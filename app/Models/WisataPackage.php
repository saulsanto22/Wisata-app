<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataPackage extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'judul', 'slug', 'lokasi', 'deskripsi',
        'makanan_khas',
        'durasi', 'type', 'harga_masuk'
    ];

    protected $hidden = [];
    // relasi :menandakan paket travel mempunyai banyak gambar
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'wisata_packages_id', 'id');
    }

    public function searchableAs()
    {
        return 'wisata_package_index';
    }
}
