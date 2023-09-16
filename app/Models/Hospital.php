<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Hospital extends Model
{
    use Searchable;

    protected $table = 'hospital';

    protected $primaryKey = 'h_id';

    //mine
    // public function status()
    // {
    //     return $this->belongsTo(Status::class);
    // }

   // Define the searchable attributes
   public function toSearchableArray()
   {
       return [
           'h_name' => $this->name,
           'Region' => $this->Region,
           'Zone' => $this->Zone,
           'Wereda' => $this->Wereda,
           'Service' => $this->Service
           

           // Add more attributes you want to search here
       ];
   }

}
