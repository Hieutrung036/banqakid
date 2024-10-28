<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use App\Models\LoaiTinTuc;
use App\Models\HinhAnh;

use Illuminate\Http\Request;

class tintucController extends Controller
{
    public function index()
    {

        $loaitintuc = LoaiTinTuc::all(); // Lấy tất cả người dùng từ cơ sở dữ liệu
        $tintuc = TinTuc::all();
        $tintuc = TinTuc::paginate(10); // Lấy 10 người dùng trên mỗi trang
        return view('admin.tintuc', compact('tintuc', 'loaitintuc'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tieude' => 'required|string|max:100|unique:tintuc,tieude',
            'noidung' => 'required|string|max:255',
            'idltt' => 'required|exists:loaitintuc,idltt',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for multiple images
        ], [
            'tieude.required' => 'Trường tiêu đề là bắt buộc.',
            'noidung.required' => 'Trường nội dung là bắt buộc.',
            'idltt.required' => 'Vui lòng chọn loại tin tức.',
            'idltt.exists' => 'Loại tin tức không hợp lệ.',
            'tieude.unique' => 'Trùng màu.',
            'image.required' => 'Vui lòng chọn hình ảnh.',
            'image.image' => 'File phải là định dạng hình ảnh.',
            'image.*.mimes' => 'Tất cả các file phải có định dạng jpeg, png, jpg hoặc gif.',
        ]);

        // Tạo tin tức mới
        $tintuc = new TinTuc();
        $tintuc->tieude = $request->input('tieude');
        $tintuc->noidung = $request->input('noidung');
        $tintuc->ngaydang = now();
        $tintuc->idltt = $request->input('idltt');
        $tintuc->save();

        // Handle image upload
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $ext = $image->extension(); // Lấy phần mở rộng
                $fileName = time() . '-' . uniqid() . '-tintuc.' . $ext; // Tạo tên tệp duy nhất
    
                // Lưu hình ảnh vào thư mục uploads
                $image->move(public_path('uploads'), $fileName); // Lưu vào public/uploads
    
                // Lưu đường dẫn hình ảnh vào bảng hinhanh
                $hinhanh = new HinhAnh();
                $hinhanh->duongdan = 'uploads/' . $fileName; // Lưu đường dẫn tương đối
                $hinhanh->idtt = $tintuc->idtt; // Liên kết hình ảnh với tin tức mới tạo
                $hinhanh->save();
            }
        }

        return redirect()->back()->with('success', 'Tin tức đã được thêm thành công!');
    }

    public function destroy($idtt)
    {
        // Xóa các hình ảnh liên quan đến tin tức
        HinhAnh::where('idtt', $idtt)->delete();
        
        // Xóa tin tức
        Tintuc::destroy($idtt);

        return redirect()->back()->with('success', 'Tin tức đã được xóa thành công!');
    }
    public function update(Request $request, $idm)
    {
        // Xác thực dữ liệu
        $request->validate([
            'tieude' => 'required|string|max:100|unique:tintuc,tieude',
            'noidung' => 'required|string|max:255',
            'idltt' => 'required|exists:loaitintuc,idltt',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for multiple images
        ], [
            'tieude.required' => 'Trường tiêu đề là bắt buộc.',
            'noidung.required' => 'Trường nội dung là bắt buộc.',
            'idltt.required' => 'Vui lòng chọn loại tin tức.',
            'idltt.exists' => 'Loại tin tức không hợp lệ.',
            'tieude.unique' => 'Trùng màu.',
            'image.required' => 'Vui lòng chọn hình ảnh.',
            'image.image' => 'File phải là định dạng hình ảnh.',
            'image.*.mimes' => 'Tất cả các file phải có định dạng jpeg, png, jpg hoặc gif.',
        ]);

        // Tìm loại sản phẩm
        $tintuc = TinTuc::findOrFail($idm);

        // Cập nhật thông tin
        $tintuc->tieude = $request->input('tieude');
        $tintuc->noidung = $request->input('noidung');



        // Lưu thay đổi vào cơ sở dữ liệu
        $tintuc->save();

        return redirect()->back()->with('success', 'Thông tin tin tức đã được cập nhật thành công.');
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ yêu cầu
    
    //     // Tìm kiếm người dùng theo tên hoặc email
    //     $tintuc = TinTuc::where('tieude', 'LIKE', "%{$query}%")
    //         ->paginate(10); // Phân trang kết quả tìm kiếm
    
    //     return view('admin.tintuc', compact('tintuc')); // Trả về view với danh sách người dùng tìm được
    // }
}   
