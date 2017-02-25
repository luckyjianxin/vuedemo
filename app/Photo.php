<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $upload_path = '/images/';
    protected $fillable = [
    	'file'
    ];
}
