<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use App\Models\LoaiTinTuc;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth để xử lý đăng nhập
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordMail;

class LoginController extends Controller
{
    public function dangnhap(){
        $loaisanpham = LoaiSanPham::all();
        $loaitintuc = LoaiTinTuc::all();
        return view('taikhoan.dangnhap', compact('loaisanpham','loaitintuc'));
    }

    public function xulyDangNhap(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = NguoiDung::where('email', $credentials['email'])->first();
        
        if (!$user) {
            // Nếu không tìm thấy người dùng, thông báo tài khoản không chính xác
            return back()->withErrors([
                'email' => 'Thông tin tài khoản không chính xác.',
            ])->onlyInput('email');
        }
    
        // Kiểm tra mật khẩu
        if (!Hash::check($credentials['password'], $user->matkhau)) {
            // Nếu mật khẩu không khớp, thông báo mật khẩu không chính xác
            return back()->withErrors([
                'matkhau' => 'Mật khẩu không chính xác.',
            ])->onlyInput('email');
        }
    
         // Đăng nhập người dùng và tạo lại phiên
         Auth::login($user, $request->has('remember'));
        // Tạo lại phiên
        $request->session()->regenerate();
        // Điều hướng đến trang chủ
        return redirect()->intended(route('trangchu'));

        if ($user->quyen === 2) { // Nếu quyen là 2
            return redirect()->route('admin.mau');
        } else {
            return redirect()->route('trangchu');
        }
        
    }


    
    public function dangky(){
        $loaisanpham = LoaiSanPham::all();
        $loaitintuc = LoaiTinTuc::all();
        return view('taikhoan.dangky', compact('loaisanpham','loaitintuc'));
    }
    public function xulyDangKy(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'ten' => 'required|string|max:100',
            'sdt' => ['required', 'regex:/^0[35789]\d{8}$/'],
            'email' => 'required|email|unique:nguoidung,email',
            'matkhau' => 'required|string|min:6|confirmed', 
        
            
        ]);

        // Tạo người dùng mới
        $nguoiDung = new NguoiDung();
        $nguoiDung->ten = $request->ten;
        $nguoiDung->sdt = $request->sdt;
        $nguoiDung->email = $request->email;
        $nguoiDung->matkhau = Hash::make($request->matkhau); // Mã hóa mật khẩu
        $nguoiDung->quyen = 0; // Hoặc đặt quyền theo yêu cầu
        $nguoiDung->save();

        // Chuyển hướng về trang đăng nhập với thông báo thành công
        return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công! Bạn có thể đăng nhập ngay bây giờ.');
    }
    public function quenmatkhau(){
        $loaisanpham = LoaiSanPham::all();
        $loaitintuc = LoaiTinTuc::all();
        return view('taikhoan.quenmatkhau', compact('loaisanpham','loaitintuc'));
    }
    

    public function xulyQuenMatKhau(Request $request)
    {
        // Xác thực email
        $request->validate([
            'email' => 'required|email|exists:nguoidung,email',
        ]);
    
        // Lấy email từ request
        $email = $request->email;

        // Tạo token ngẫu nhiên
        $token = Str::random(60);
    
        // Gửi email khôi phục mật khẩu
        $url = url('reset-password?token=' . $token . '&email=' . $email);
        Mail::to($email)->send(new ResetPasswordMail($url));
    
        // Trả về thông báo
        return back()->with('status', 'Email đặt lại mật khẩu đã được gửi đến gmail của bạn.');
    }

    public function showResetForm(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');
        $loaisanpham = LoaiSanPham::all();
        $loaitintuc = LoaiTinTuc::all();
        return view('taikhoan.resetmatkhau', ['token' => $token, 'email' => $email],compact('loaisanpham','loaitintuc'));
    }

    public function resetPassword(Request $request)
    {
        // Xác thực dữ liệu từ form
        $request->validate([
            'password' => 'required|min:6|confirmed', // Kiểm tra mật khẩu và xác nhận
            'token' => 'required'
        ], [
            // Tùy chỉnh thông báo lỗi
            'matkhau.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'matkhau.confirmed' => 'Xác nhận mật khẩu không khớp với mật khẩu.',
        ]);
    
        // Lấy email từ request
        $email = $request->email;
    
        // Tìm người dùng bằng email
        $user = NguoiDung::where('email', $email)->first();
    
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email không tồn tại.']);
        }
    
        // Cập nhật mật khẩu mới
        $user->matkhau = Hash::make($request->password);
        $user->save();
    
        return redirect()->route('dangnhap')->with('status', 'Mật khẩu đã được đặt lại thành công.');
    }
    

  


}
