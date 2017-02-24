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

    public function getFileAttribute($photo)
    {
    	# code...
    	return $this->upload_path . $photo;
    }
}
