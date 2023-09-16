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
            'name' => $this->name,
            'Region' => $this->name,
           'Zone' => $this->name,
           'Wereda' => $this->name,
           'Service' => $this->Service
            // Add more attributes you want to search here
        ];
    }

}
