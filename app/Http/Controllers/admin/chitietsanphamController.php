<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ChiTietSanPham;
use App\Models\SanPham;
use App\Models\HinhAnh;
use App\Models\KichThuoc;
use App\Models\LoaiSanPham;
use App\Models\Mau;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class chitietsanphamController extends Controller
{
    public function index()
    {
        // Giả sử bạn đang lấy danh sách sản phẩm từ cơ sở dữ liệu
        $sanpham = SanPham::all(); // hoặc bạn có thể sử dụng paginate() nếu cần

        return view('admin.chitietsanpham', compact('sanpham'));
    }
    public function show(Request $request, $id)
    {
        $sanpham = SanPham::findOrFail($id);

        $chitietsanpham = ChiTietSanPham::paginate(5);
        $mau = Mau::all();
        $kichthuoc = KichThuoc::all();

        return view('admin.chitietsanpham', compact('sanpham', 'mau', 'kichthuoc', 'chitietsanpham'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'idsp' => 'required|integer|exists:SanPham,IDSP',
            'idm' => 'required|integer|exists:Mau,IDM',
            'idkt' => [
                'required',
                'integer',
                'exists:KichThuoc,IDKT',
                // Kiểm tra unique với điều kiện
                Rule::unique('chitietsanpham')->where(function ($query) use ($request) {
                    return $query->where('idsp', $request->idsp)
                        ->where('idm', $request->idm);
                }),
            ],
            'soluong' => 'required|int',
        ], [
            'idkt.unique' => 'Trùng kích thước.',
        ]);
        $chitietsanpham = new ChiTietSanPham($request->only(['idsp', 'idm', 'idkt', 'soluong']));
        $chitietsanpham->save();
        $mau = Mau::find($request->idm);
        $chitietsanpham->mau()->associate($mau);
        $kichThuoc = KichThuoc::find($request->idkt);
        $chitietsanpham->kichthuoc()->associate($kichThuoc);
        return redirect()->back()->with('success', 'Thêm màu và kích thước thành công.');
    }
}
