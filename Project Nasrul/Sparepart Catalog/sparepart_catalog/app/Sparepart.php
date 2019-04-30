<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $fillable = ['oracle_number', 'name','min_stock','unit','price','image', 'machine_id'];
}
