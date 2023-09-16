<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Clinic extends Model
{
    use Searchable;

    protected $table = 'clinics';

    protected $primaryKey = 'c_id';



    // Define the searchable attributes
    public function toSearchableArray()
    {
        return [
            'c_name' => $this->name,
            'Region' => $this->name,
           'Zone' => $this->name,
           'Wereda' => $this->name,
           'Service' => $this->Service
            // Add more attributes you want to search here
        ];
    }

    //mine
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

}

