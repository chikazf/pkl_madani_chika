<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $guarded ='id';
    protected $attributes = [
        'judul',
        'dekripsi',
        'gambar'
    ];
    protected $fillable = [
        'judul',
        'dekripsi',
        'gambar'
    ];
}
