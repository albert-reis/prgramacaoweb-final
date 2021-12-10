<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Contato extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = [];
    //public $primarykey = 'id_post';
    //protected $collection = 'obras';

    protected $fillable = [
        'road', 'district', 'contact',
    ];
}
