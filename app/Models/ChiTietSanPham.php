<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;
    protected $table = 'chitietsanpham';
    protected $primaryKey = 'idctsp';
    public $timestamps = false;
    protected $fillable = ['idctsp', 'soluong', 'idsp', 'idm', 'idkt'];

    public function hinhanh()
    {
        return $this->hasMany(HinhAnh::class, 'idctsp', 'idctsp');
    }
    public function kichthuoc()
    {
        return $this->belongsTo(KichThuoc::class, 'idkt', 'idkt');
    }
    public function mau()
    {
        return $this->belongsTo(Mau::class, 'idm', 'idm');
    }
    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'idsp', 'idsp');
    }
    public function danhgia()
    {
        return $this->hasMany(DanhGia::class, 'IDCTSP', 'IDCTSP');
    }
   
    public function hinhanhsCount()
    {
        return $this->hasMany(HinhAnh::class, 'idctsp');
    }

}
