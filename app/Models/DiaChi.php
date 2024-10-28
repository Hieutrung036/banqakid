<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaChi extends Model
{
    use HasFactory;

    protected $table = 'diachi';
    protected $primaryKey = 'iddc';

    // Xác định các trường có thể điền
    protected $fillable = ['tennguoinhan', 'sdt', 'diachi', 'phuongxa', 'quanhuyen', 'tinhthanhpho', 'idnd']; // Thêm 'idnd' vào đây
    public $timestamps = false;

    // Nếu muốn, bạn có thể thêm quan hệ với bảng NguoiDung
    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'idnd', 'idnd');
    }
}
