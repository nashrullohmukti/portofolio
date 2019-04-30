<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placement extends Model
{
  public function machines()
  {
      return $this->hasMany('App\machine');
  }
}
