<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;

class nguoidungController extends Controller
{
    //hiển thị giao diện
    public function index()
    {
        $nguoidung = NguoiDung::all();
        $nguoidung = NguoiDung::paginate(10); // Lấy 10 người dùng trên mỗi trang
        return view('admin.nguoidung', compact('nguoidung'));
    }
    //thêm
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'ten' => 'required|string|max:100',
            'sdt' => ['required', 'regex:/^0[35789]\d{8}$/'],
            'email' => 'required|email|unique:nguoidung,email', // kiểm tra email đã tồn tại chưa
            'matkhau' => 'required|string|min:6',
            'quyen' => 'required|in:0,1,2', // Các quyền có thể là 0, 1 hoặc 2
        ]);

        // Tạo người dùng mới
        $nguoidung = new NguoiDung();
        $nguoidung->ten = $request->input('ten');
        $nguoidung->sdt = $request->input('sdt');
        $nguoidung->email = $request->input('email');
        $nguoidung->matkhau = Hash::make($request->input('matkhau')); // Mã hóa mật khẩu
        $nguoidung->quyen = $request->input('quyen');

        // Lưu người dùng vào database
        $nguoidung->save();

        // Quay lại trang trước hoặc về trang danh sách người dùng với thông báo thành công
        return redirect()->back()->with('success', 'Người dùng đã được thêm thành công!');
    }
    //xóa
    public function destroy($idnd)
    {
        // Tìm người dùng theo id
        $nguoidung = NguoiDung::find($idnd);

        // Kiểm tra xem người dùng có tồn tại không
        if ($nguoidung) {
            // Xóa người dùng
            $nguoidung->delete();

            // Trở lại với thông báo thành công
            return redirect()->back()->with('success', 'Người dùng đã được xóa thành công!');
        } else {
            // Nếu không tìm thấy người dùng, có thể trả về thông báo lỗi
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');
        }
    }
    public function update(Request $request, $idnd)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ten' => 'required|string|max:100',
            // 'sdt' => ['required', 'regex:/^0[35789]\d{8}$/'],
            'sdt' ,
            'email' => 'required|email|unique:nguoidung,email,' . $idnd . ',idnd', // Cập nhật ở đây
            'matkhau' => 'nullable|string|min:6', // Không bắt buộc
            'quyen' => 'required|in:0,1,2', // Các quyền có thể là 0, 1 hoặc 2
        ]);
    
        // Tìm người dùng
        $nguoidung = NguoiDung::findOrFail($idnd);
    
        // Cập nhật thông tin người dùng
        $nguoidung->ten = $request->input('ten');
        $nguoidung->sdt = $request->input('sdt');
        $nguoidung->email = $request->input('email');
    
        // Cập nhật mật khẩu nếu có
        if ($request->filled('matkhau')) {
            $nguoidung->matkhau = Hash::make($request->input('matkhau'));
        }
        
        $nguoidung->quyen = $request->input('quyen');
        $nguoidung->save();
    
        return redirect()->back()->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ yêu cầu
    
        // Tìm kiếm người dùng theo tên hoặc email
        $nguoidung = NguoiDung::where('ten', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->orWhere('sdt', 'LIKE', "%{$query}%")
            ->orWhere('quyen', 'LIKE', "%{$query}%")
            ->paginate(10); // Phân trang kết quả tìm kiếm
    
        return view('admin.nguoidung', compact('nguoidung')); // Trả về view với danh sách người dùng tìm được
    }
}
