<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nilai_desc;

class nilai extends Model
{
    public $table="ak_nilai";

	public function nilai_desc() {
		return $this->hasOne(nilai_desc::class, 'idnilai');
	}
}
