<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    protected $primaryKey = 'l_id';


    protected $casts = [
        'Service' => 'array',
    ];


}
