<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos_category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'photos_category';

    public function galeri()
    {
        return $this->hasMany(photo::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
} 
