<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $primaryKey = 'st_id';

 // Define the searchable attributes
 public function toSearchableArray()
 {
     return [
         'st_name' => $this->name,
        
         // Add more attributes you want to search here
     ];
 }

    // protected $casts = [
    //     'Status' => 'array',
    // ];

}


