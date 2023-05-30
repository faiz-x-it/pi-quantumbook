<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with =['kategori'];
        
    public function kategori()
    {
        return $this->belongsTo(photos_category::class);
    }
 
}
