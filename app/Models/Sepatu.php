<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    protected $fillable = [
        'nama_sepatu',
        'merk',
        'stok',
        'warna',
        'id_supplier',
    ];
    protected $table = 'sepatus';
    
    public function Sepatu()
    {
        return $this->hasMany(Sepatu::class, 'id_sepatu', 'id');
    }

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
}
