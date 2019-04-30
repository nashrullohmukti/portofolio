<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    protected $fillable = ['name', 'placement_id'];

    public function workcenter()
    {
      return $this->belongsTo('App\placement', 'foreign_key');
    }
}
