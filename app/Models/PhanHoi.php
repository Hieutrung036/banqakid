<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhanHoi extends Model
{
    use HasFactory;
    protected $table = 'phanhoi';
    protected $primaryKey = 'idph';
    public $timestamps = false;
    protected $fillable = ['noidung', 'thoigian', 'idnd','iddg'];

    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'idnd', 'idnd');
    }
    public function danhgia()
    {
        return $this->belongsTo(DanhGia::class, 'iddg', 'iddg');
    }
}