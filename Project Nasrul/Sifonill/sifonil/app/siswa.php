<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public $table = "ak_siswa";

    public function nilai()
    {
    	return $this->hasMany(nilai::class);
    }

}
