<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = [];

    protected $fillable = [
        'name', 'password', 'date',
    ];
}
