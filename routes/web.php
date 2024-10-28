<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client;
use App\Http\Controllers\account;
use App\Http\Controllers\admin;


Route::get('/', [client\trangchuController::class, 'index'])->name('trangchu');
Route::get('/lienhe', [client\lienheController::class, 'index'])->name('lienhe');
Route::get('/tintuc', [client\tintucController::class, 'index'])->name('tintuc');
Route::get('/gioithieu', [client\gioithieuController::class, 'index'])->name('gioithieu');
Route::get('/sanpham', [client\sanphamController::class, 'index'])->name('sanpham');




Route::get('/dangnhap', [account\loginController::class, 'dangnhap'])->name('dangnhap');
Route::post('/dangnhap', [account\loginController::class, 'xulyDangNhap'])->name('dangnhap.submit');

Route::get('/dangky', [account\loginController::class, 'dangky'])->name('dangky');
Route::post('/dangky', [account\loginController::class, 'xulyDangKy'])->name('dangky.submit');

Route::get('/quenmatkhau', [account\loginController::class, 'quenmatkhau'])->name('quenmatkhau');
Route::post('/xulyquenmatkhau', [account\LoginController::class, 'xulyQuenMatKhau'])->name('xulyQuenMatKhau');

Route::get('/reset-password', [account\LoginController::class, 'showResetForm'])->name('reset.form');
Route::post('/reset-password', [account\LoginController::class, 'resetPassword'])->name('resetPassword');

// Route::post('/logout', [account\loginController::class, 'logout'])->name('logout');

Route::get('/admin/trangchu', [admin\trangchuController::class, 'index'])->name('admin.trangchu');

Route::get('/admin/nguoidung', [admin\nguoidungController::class, 'index'])->name('admin.nguoidung');
Route::post('/admin/nguoidung/them', [admin\nguoidungController::class, 'store'])->name('admin.nguoidung.store');
Route::delete('/admin/nguoidung/{idnd}', [admin\nguoidungController::class, 'destroy'])->name('admin.nguoidung.destroy');
Route::post('/admin/nguoidung/{idnd}', [admin\nguoidungController::class, 'update'])->name('admin.nguoidung.update');
Route::put('/admin/nguoidung/{idnd}', [admin\nguoidungController::class, 'update'])->name('admin.nguoidung.update');
Route::get('/admin/nguoidung/search', [admin\nguoidungController::class, 'search'])->name('admin.nguoidung.search');

Route::get('/admin/diachi', [admin\diachiController::class, 'index'])->name('admin.diachi');
Route::post('/admin/diachi/them', [admin\diachiController::class, 'store'])->name('admin.diachi.store');
Route::delete('/admin/diachi/{iddc}', [admin\diachiController::class, 'destroy'])->name('admin.diachi.destroy');
Route::post('/admin/diachi/{iddc}', [admin\diachiController::class, 'update'])->name('admin.diachi.update');
Route::put('/admin/diachi/{iddc}', [admin\diachiController::class, 'update'])->name('admin.diachi.update');
Route::get('/admin/diachi/search', [admin\diachiController::class, 'search'])->name('admin.diachi.search');


Route::get('/admin/danhgia', [admin\danhgiaController::class, 'index'])->name('admin.danhgia');
Route::post('/admin/danhgia/them', [admin\danhgiaController::class, 'store'])->name('admin.danhgia.store');
Route::delete('/admin/danhgia/{iddg}', [admin\danhgiaController::class, 'destroy'])->name('admin.danhgia.destroy');
Route::get('/admin/danhgia/search', [admin\danhgiaController::class, 'search'])->name('admin.danhgia.search');


Route::get('/admin/sanpham', [admin\sanphamController::class, 'index'])->name('admin.sanpham');
Route::post('/admin/sanpham/them', [admin\sanphamController::class, 'store'])->name('admin.sanpham.store');
Route::delete('/admin/sanpham/{idsp}', [admin\sanphamController::class, 'destroy'])->name('admin.sanpham.destroy');
Route::post('/admin/sanpham/{idsp}', [admin\sanphamController::class, 'update'])->name('admin.sanpham.update');
Route::put('/admin/sanpham/{idsp}', [admin\sanphamController::class, 'update'])->name('admin.sanpham.update');
Route::get('/admin/sanpham/search', [admin\sanphamController::class, 'search'])->name('admin.sanpham.search');


Route::get('/admin/loaisanpham', [admin\loaisanphamController::class, 'index'])->name('admin.loaisanpham');
Route::post('/admin/loaisanpham/them', [admin\loaisanphamController::class, 'store'])->name('admin.loaisanpham.store');
Route::delete('/admin/loaisanpham/{idlsp}', [admin\loaisanphamController::class, 'destroy'])->name('admin.loaisanpham.destroy');
Route::post('/admin/loaisanpham/{idlsp}', [admin\loaisanphamController::class, 'update'])->name('admin.loaisanpham.update');
Route::put('/admin/loaisanpham/{idlsp}', [admin\loaisanphamController::class, 'update'])->name('admin.loaisanpham.update');
Route::get('/admin/loaisanpham/search', [admin\loaisanphamController::class, 'search'])->name('admin.loaisanpham.search');


Route::get('/admin/mau', [admin\mauController::class, 'index'])->name('admin.mau');
Route::post('/admin/mau/them', [admin\mauController::class, 'store'])->name('admin.mau.store');
Route::delete('/admin/mau/{idm}', [admin\mauController::class, 'destroy'])->name('admin.mau.destroy');
Route::post('/admin/mau/{idm}', [admin\mauController::class, 'update'])->name('admin.mau.update');
Route::put('/admin/mau/{idm}', [admin\mauController::class, 'update'])->name('admin.mau.update');
Route::get('/admin/mau/search', [admin\mauController::class, 'search'])->name('admin.mau.search');

Route::get('/admin/loaitintuc', [admin\loaitintucController::class, 'index'])->name('admin.loaitintuc');
Route::post('/admin/loaitintuc/them', [admin\loaitintucController::class, 'store'])->name('admin.loaitintuc.store');
Route::delete('/admin/loaitintuc/{idltt}', [admin\loaitintucController::class, 'destroy'])->name('admin.loaitintuc.destroy');
Route::post('/admin/loaitintuc/{idltt}', [admin\loaitintucController::class, 'update'])->name('admin.loaitintuc.update');
Route::put('/admin/loaitintuc/{idltt}', [admin\loaitintucController::class, 'update'])->name('admin.loaitintuc.update');
Route::get('/admin/loaitintuc/search', [admin\loaitintucController::class, 'search'])->name('admin.loaitintuc.search');

Route::get('/admin/kichthuoc', [admin\kichthuocController::class, 'index'])->name('admin.kichthuoc');
Route::post('/admin/kichthuoc/them', [admin\kichthuocController::class, 'store'])->name('admin.kichthuoc.store');
Route::delete('/admin/kichthuoc/{idkt}', [admin\kichthuocController::class, 'destroy'])->name('admin.kichthuoc.destroy');
Route::post('/admin/kichthuoc/{idkt}', [admin\kichthuocController::class, 'update'])->name('admin.kichthuoc.update');
Route::put('/admin/kichthuoc/{idkt}', [admin\kichthuocController::class, 'update'])->name('admin.kichthuoc.update');
Route::get('/admin/kichthuoc/search', [admin\kichthuocController::class, 'search'])->name('admin.kichthuoc.search');

Route::get('/admin/tintuc', [admin\tintucController::class, 'index'])->name('admin.tintuc');
Route::post('/admin/tintuc/them', [admin\tintucController::class, 'store'])->name('admin.tintuc.store');
Route::delete('/admin/tintuc/{idtt}', [admin\tintucController::class, 'destroy'])->name('admin.tintuc.destroy');
Route::post('/admin/tintuc/{idtt}', [admin\tintucController::class, 'update'])->name('admin.tintuc.update');
Route::put('/admin/tintuc/{idtt}', [admin\tintucController::class, 'update'])->name('admin.tintuc.update');

Route::get('/admin/magiamgia', [admin\magiamgiaController::class, 'index'])->name('admin.magiamgia');
Route::post('/admin/magiamgia/them', [admin\magiamgiaController::class, 'store'])->name('admin.magiamgia.store');
Route::delete('/admin/magiamgia/{idgg}', [admin\magiamgiaController::class, 'destroy'])->name('admin.magiamgia.destroy');
Route::post('/admin/magiamgia/{idgg}', [admin\magiamgiaController::class, 'update'])->name('admin.magiamgia.update');
Route::put('/admin/magiamgia/{idgg}', [admin\magiamgiaController::class, 'update'])->name('admin.magiamgia.update');
Route::get('/admin/magiamgia/search', [admin\magiamgiaController::class, 'search'])->name('admin.magiamgia.search');


Route::get('/admin/phuongthucthanhtoan', [admin\phuongthucthanhtoanController::class, 'index'])->name('admin.phuongthucthanhtoan');
Route::post('/admin/phuongthucthanhtoan/them', [admin\phuongthucthanhtoanController::class, 'store'])->name('admin.phuongthucthanhtoan.store');
Route::delete('/admin/phuongthucthanhtoan/{idpttt}', [admin\phuongthucthanhtoanController::class, 'destroy'])->name('admin.phuongthucthanhtoan.destroy');
Route::post('/admin/phuongthucthanhtoan/{idpttt}', [admin\phuongthucthanhtoanController::class, 'update'])->name('admin.phuongthucthanhtoan.update');
Route::put('/admin/phuongthucthanhtoan/{idpttt}', [admin\phuongthucthanhtoanController::class, 'update'])->name('admin.phuongthucthanhtoan.update');
Route::get('/admin/phuongthucthanhtoan/search', [admin\phuongthucthanhtoanController::class, 'search'])->name('admin.phuongthucthanhtoan.search');


Route::get('/admin/phuongthucgiaohang', [admin\phuongthucgiaohangController::class, 'index'])->name('admin.phuongthucgiaohang');
Route::post('/admin/phuongthucgiaohang/them', [admin\phuongthucgiaohangController::class, 'store'])->name('admin.phuongthucgiaohang.store');
Route::delete('/admin/phuongthucgiaohang/{idptgh}', [admin\phuongthucgiaohangController::class, 'destroy'])->name('admin.phuongthucgiaohang.destroy');
Route::post('/admin/phuongthucgiaohang/{idptgh}', [admin\phuongthucgiaohangController::class, 'update'])->name('admin.phuongthucgiaohang.update');
Route::put('/admin/phuongthucgiaohang/{idptgh}', [admin\phuongthucgiaohangController::class, 'update'])->name('admin.phuongthucgiaohang.update');
Route::get('/admin/phuongthucgiaohang/search', [admin\phuongthucgiaohangController::class, 'search'])->name('admin.phuongthucgiaohang.search');



Route::get('/admin/thuonghieu', [admin\thuonghieuController::class, 'index'])->name('admin.thuonghieu');
Route::post('/admin/thuonghieu/them', [admin\thuonghieuController::class, 'store'])->name('admin.thuonghieu.store');
Route::delete('/admin/thuonghieu/{idth}', [admin\thuonghieuController::class, 'destroy'])->name('admin.thuonghieu.destroy');
Route::post('/admin/thuonghieu/{idth}', [admin\thuonghieuController::class, 'update'])->name('admin.thuonghieu.update');
Route::put('/admin/thuonghieu/{idth}', [admin\thuonghieuController::class, 'update'])->name('admin.thuonghieu.update');
Route::get('/admin/thuonghieu/search', [admin\thuonghieuController::class, 'search'])->name('admin.thuonghieu.search');







Route::get('/admin/chitietsanpham/{id}', [admin\chitietsanphamController::class, 'show'])->name('admin.chitietsanpham');
Route::post('/admin/chitietsanpham/them', [admin\chitietsanphamController::class, 'store'])->name('admin.chitietsanpham.store');

Route::get('/admin/chitietsanpham1/{id}', [admin\chitietsanpham1Controller::class, 'index'])->name('admin.chitietsanpham1');
Route::post('/admin/chitietsanpham1/them', [admin\chitietsanpham1Controller::class, 'store'])->name('admin.chitietsanpham1.store');
Route::delete('/admin/chitietsanpham1/{id}', [admin\chitietsanpham1Controller::class, 'destroy'])->name('admin.chitietsanpham1.destroy');
Route::post('/admin/chitietsanpham1/{id}', [admin\chitietsanpham1Controller::class, 'update'])->name('admin.chitietsanpham1.update');
Route::put('/admin/chitietsanpham1/{id}', [admin\chitietsanpham1Controller::class, 'update'])->name('admin.chitietsanpham1.update');

