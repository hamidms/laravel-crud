<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'agama',
        'alamat',
        'avatar',
        'user_id'
    ];

    public function getAvatar() {
        if(!$this->avatar) {
            return asset('images/user.webp');
        }

        return asset('images/'.$this->avatar);
    }
}
