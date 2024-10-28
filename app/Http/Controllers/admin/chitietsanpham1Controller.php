<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ChiTietSanPham;
use App\Models\KichThuoc;
use App\Models\Mau;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class chitietsanpham1Controller extends Controller
{
    public function index($id)
    {
        $sanpham = SanPham::findOrFail($id);
        $chitietsanpham = ChiTietSanPham::paginate(5);

        $mau = Mau::all();
        $kichthuoc = KichThuoc::all();
        return view('admin.chitietsanpham1', compact('sanpham', 'mau', 'kichthuoc', 'chitietsanpham'));
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

        return redirect()->back()->with('success', 'Thêm thành công.');
    }
    public function destroy($id)
    {
        $chitietsanpham = ChiTietSanPham::findOrFail($id);


        $chitietsanpham->delete();
        return redirect()->back()->with('success', 'Xóa thành công.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idsp' => 'required|integer|exists:sanpham,idsp',
            'idm' => 'required|integer|exists:mau,idm',
            'idkt' => [
                'required',
                'integer',
                'exists:kichthuoc,idkt',
                Rule::unique('chitietsanpham')->where(function ($query) use ($request, $id) {
                    return $query->where('idsp', $request->idsp)
                        ->where('idm', $request->idm)
                        ->where('idkt', $request->idkt)
                        ->where('idctsp', '<>', $id); // Sử dụng biến $id ở đây
                }),
            ],
            'soluong' => 'required|int',
        ], [
            'idkt.unique' => 'Trùng kích thước.',
        ]);

        // Tìm và cập nhật chi tiết sản phẩm
        $chitietsanpham = ChiTietSanPham::findOrFail($id);
        $chitietsanpham->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật thành công.');
    }
}
