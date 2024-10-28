<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Kế thừa từ Authenticatable để sử dụng chức năng xác thực
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'nguoidung';
    protected $primaryKey = 'idnd';

    // Xác định các trường có thể điền
    protected $fillable = ['ten', 'sdt', 'email', 'matkhau', 'quyen'];
    public $timestamps = false;

    // Laravel sử dụng cột password mặc định, nhưng bạn sử dụng matkhau
    protected $hidden = ['matkhau'];

    
}
