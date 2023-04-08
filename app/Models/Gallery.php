<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Gallery extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'wisata_packages_id',
        'image'
    ];

    protected $hidden = [];
    // membuat relasi antara tbl galerti dan travel package
    public function wisata_package()
    {
        return $this->belongsTo(WisataPackage::class, 'wisata_packages_id', 'id');
    }
    public function searchableAs()
    {
        return 'gallery_index';
    }
}
