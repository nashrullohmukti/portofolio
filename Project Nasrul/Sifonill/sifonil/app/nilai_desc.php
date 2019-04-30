<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nilai;
class nilai_desc extends Model
{
    public $table="ak_nilai_desc";

    public function nilai()
    {
    	return $this->belongsTo(nilai::class,'idnilai');
    }
}
