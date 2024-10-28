<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhGia;
use App\Models\NguoiDung;
use App\Models\PhanHoi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class danhgiaController extends Controller
{
    public function index()
    {
        $nguoidung = NguoiDung::all(); // Lấy tất cả người dùng từ cơ sở dữ liệu
        $danhgia = DanhGia::all();
        $danhgia = DanhGia::paginate(10); // Lấy 10 bản ghi mỗi trang
        return view('admin.danhgia', compact('danhgia', 'nguoidung'));
    }
    
    public function store(Request $request)
    {
            $nguoidung = Auth::id();
            $iddg = $request->input('iddg');
            $noidung = $request->input('noidung');
            $thoiGianHienTai =  Carbon::now();
            $currentTimeVn = $thoiGianHienTai->setTimezone('Asia/Ho_Chi_Minh');
            $danhgia = new PhanHoi();
            $danhgia->iddg = $iddg;
            $danhgia->noidung = $noidung;
            $danhgia->thoigian = $currentTimeVn;
            $danhgia->idnd = $nguoidung;
            $danhgia->save();
            return redirect()->back()->with('success', 'Phản hồi thành công.');

    }
    public function destroy($iddg)
    {
        $danhgia = DanhGia::find($iddg);

        if ($danhgia) {
            $danhgia->delete();
            return redirect()->back()->with('success', 'Phản hồi đã được xóa thành công!');
        }

        return redirect()->back();
    }
    public function search(Request $request)
    {
        $nguoidung = NguoiDung::all(); // Lấy tất cả người dùng từ cơ sở dữ liệu
        $danhgia = DanhGia::all();
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ yêu cầu
    
        // Tìm kiếm người dùng theo tên hoặc email
        $danhgia = DanhGia::where('sosao', 'like','%'.$query.'%')
            ->orWhere('noidung', 'like','%'.$query.'%')
            ->paginate(10);

        $nguoidung = NguoiDung::where('ten', 'like','%'.$query.'%')->paginate(10);

        return view('admin.danhgia', compact('danhgia', 'nguoidung')); // Trả về view với danh sách người dùng tìm được
    }
}
