<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table ='uploads';
    protected $primaryKey = 'id';
    protected $fillable = array('data_file','created_at','updated_at');
}