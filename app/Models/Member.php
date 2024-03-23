<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'alamat',
        'no_telp',
    ];
    protected $table = 'members';
    
    public function Member()
    {
        return $this->hasMany(Member::class, 'id_member', 'id');
    }
}
