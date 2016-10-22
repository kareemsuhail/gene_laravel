<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class choices extends Model
{
    protected $table = 'choices';
    protected $fillable = [
        'group', 'value',
    ];
}
