<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Specialized_Clinic extends Model
{

    use Searchable;

    protected $table = 'Specialized_Clinics';

    protected $primaryKey = 'sc_id';


    // Define the searchable attributes
    public function toSearchableArray()
    {
        return [
            'sc_name' => $this->name,
            'Region' => $this->Region,
           'Zone' => $this->Zone,
           'Wereda' => $this->Wereda,
           'Service' => $this->Service
            // Add more attributes you want to search here
        ];
    }

   
    protected $casts = [
        'Service' => 'array',
    ];


    //mine
    public function status()
    {
        return $this->belongsTo(Location::class, 'l_id');
    }

}
