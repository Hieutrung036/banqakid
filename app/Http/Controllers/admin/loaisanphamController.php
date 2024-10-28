<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
use App\Models\LoaiTinTuc;
use App\Models\Sanpham;
use Illuminate\Validation\Rule; // Đảm bảo import Rule ở đây

class loaisanphamController extends Controller
{
    public function index(){
        $loaisanpham = LoaiSanPham::all();
        $loaisanpham = LoaiSanPham::paginate(10); // Lấy 10 người dùng trên mỗi trang
        return view('admin.loaisanpham', compact('loaisanpham'));
    }

    public function store(Request $request)
{
    $request->validate([
        'ten' => [
            'required',
            'string',
            'max:100',
            // Điều kiện unique với điều kiện giới tính
            Rule::unique('loaisanpham')->where(function ($query) use ($request) {
                return $query->where('gioitinh', $request->gioitinh);
            }),
        ],
        'mota' => 'required|string|max:255',
        'gioitinh' => 'required|in:0,1', 
        'soluong' => 'nullable|integer|min:0',
        'hinhanh' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $hinhanhPath = $request->file('hinhanh')->store('images', 'public');
    
    // Tạo loại sản phẩm mới
    $loaisanpham = new LoaiSanPham();
    $loaisanpham->ten = $request->input('ten');
    $loaisanpham->gioitinh = $request->input('gioitinh');
    $loaisanpham->mota = $request->input('mota');
    $loaisanpham->soluong = $request->input('soluong', 0); 
    $loaisanpham->hinhanh = $hinhanhPath;

    // Lưu vào cơ sở dữ liệu
    $loaisanpham->save();

    // Quay lại trang trước với thông báo thành công
    return redirect()->back()->with('success', 'Loại sản phẩm đã được thêm thành công!');
}

     //xóa
     public function destroy($idlsp)
     {
         $loaisanpham = LoaiSanPham::find($idlsp);
     
         if ($loaisanpham) {
             $loaisanpham->delete();
             return redirect()->back()->with('success', 'Loại sản phẩm đã được xóa thành công!');
         }
     
         return redirect()->back(); 
     }

     public function update(Request $request, $idlsp)
     {
         // Xác thực dữ liệu
         $request->validate([
             'ten' => [
                 'required', // Thêm điều kiện bắt buộc
                 'string',
                 'max:100',
                 Rule::unique('loaisanpham')->where(function ($query) use ($request) {
                     return $query->where('gioitinh', $request->gioitinh); // Kiểm tra với gioitinh tương ứng
                 })->ignore($idlsp, 'idlsp'), // Bỏ qua bản ghi hiện tại dựa trên khóa chính
             ],
             'mota' => 'required|string|max:255', // Bắt buộc
             'gioitinh' => 'required|in:0,1', // Bắt buộc
             'soluong' => 'nullable|integer|min:0',
             'hinhanh' => 'image|mimes:jpg,jpeg,png|max:2048', // Kiểm tra file hình ảnh
         ]);
     
         // Tìm loại sản phẩm
         $loaisanpham = LoaiSanPham::findOrFail($idlsp);
     
         // Cập nhật thông tin
         $loaisanpham->ten = $request->input('ten');
         $loaisanpham->mota = $request->input('mota');
         $loaisanpham->gioitinh = $request->input('gioitinh');
         $loaisanpham->soluong = $request->input('soluong', 0); // Giá trị mặc định là 0
     
         // Kiểm tra và cập nhật hình ảnh nếu có
         if ($request->hasFile('hinhanh')) {
             $hinhanhPath = $request->file('hinhanh')->store('images', 'public');
             $loaisanpham->hinhanh = $hinhanhPath; // Cập nhật đường dẫn hình ảnh
         }
     
         // Lưu thay đổi vào cơ sở dữ liệu
         $loaisanpham->save();
     
         return redirect()->back()->with('success', 'Thông tin loại sản phẩm đã được cập nhật thành công.');
     }
     public function search(Request $request)
     {
         $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ yêu cầu
     
         // Tìm kiếm người dùng theo tên hoặc email
         $loaisanpham = LoaiSanPham::where('ten', 'LIKE', "%{$query}%")
         ->orWhere('gioitinh', 'LIKE', "%{$query}%")
         ->orWhere('soluong', 'LIKE', "%{$query}%")
        
       
             ->paginate(10); // Phân trang kết quả tìm kiếm
     
         return view('admin.mau', compact('mau')); // Trả về view với danh sách người dùng tìm được
     }
     
}
