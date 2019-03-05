<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'id',
        'name',
        'types',
        'height',
        'weight',
        'abilities',
        'egg groups',
        'stats', 
        'genus',
        'description',
        'created_at'
      ];
}
