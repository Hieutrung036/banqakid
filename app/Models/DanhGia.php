<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'danhgia';
    protected $primaryKey = 'iddg';

    // Xác định các trường có thể điền
    protected $fillable = ['sosao', 'noidung', 'thoigian','idnd', 'idctsp','idtt'];
    public $timestamps = false;

    // Nếu muốn, bạn có thể thêm quan hệ với bảng NguoiDung
    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'idnd', 'idnd');
    }
    public function chitietsanpham()
    {
        return $this->belongsTo(ChiTietSanPham::class, 'idctsp', 'idctsp');
    }
    public function tintuc()
    {
        return $this->belongsTo(TinTuc::class, 'idtt', 'idtt');
    }
    public function phanhoi()
    {
        return $this->hasMany(PhanHoi::class, 'iddg', 'iddg');
    }
}
