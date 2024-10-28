<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
use App\Models\LoaiTinTuc;
class lienheController extends Controller
{
    public function index(){
        $loaisanpham = LoaiSanPham::all();
        $loaitintuc = LoaiTinTuc::all();
        return view('client.lienhe', compact('loaisanpham','loaitintuc'));
    }
}
