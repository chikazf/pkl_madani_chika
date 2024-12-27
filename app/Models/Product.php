<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $guarded ='id';
    protected $attributes = [
        'judul',
        'dekripsi',
        'gambar',
        'harga',
        'stok'
    ];
    protected $fillable = [
        'judul',
        'dekripsi',
        'gambar',
        'harga',
        'stok'
    ];
}
