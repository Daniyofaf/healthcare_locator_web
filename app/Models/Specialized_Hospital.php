<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Specialized_Hospital extends Model
{

    use Searchable;

    protected $table = 'Specialized_Hospitals';

    protected $primaryKey = 'sh_id';



    // Define the searchable attributes
    public function toSearchableArray()
    {
        return [
            'sh_name' => $this->name,
            'Region' => $this->name,
           'Zone' => $this->name,
           'Wereda' => $this->name,
           'Service' => $this->Service
            // Add more attributes you want to search here
        ];
    }

    //  mine
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    
}
