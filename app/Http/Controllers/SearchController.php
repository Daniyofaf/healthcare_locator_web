<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Clinic;
use App\Models\Specialized_Clinic;
use App\Models\Specialized_Hospital;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class SearchController extends Controller
{
    public function search(Request $request)
    {
         // Validate the input
        // $request->validate([
        //     'table' => 'required|in:hospital,specialized_hospitals,specialized_clinics,Clinic',
        //     'query' => 'required|string',
        // ]);


        $table = $request->input('table'); // Get the selected table name from the form
        $query = $request->input('query'); // Get the search query from the form

        // Initialize $results to an empty array to avoid "compact() Undefined variable" error
        $results = [];

        // Perform the search query based on the selected table
        if ($table === 'AnyHealthCare') {
            // If "Any HealthCare" is selected, fetch all records from all tables
            $hospitalResults = Hospital::search($query)->get();
            $specializedHospitalResults = Specialized_Hospital::search($query)->get();
            $specializedClinicResults = Specialized_Clinic::search($query)->get();
            $clinicResults = Clinic::search($query)->get();

            // Combine all results into a single array
            $results = $hospitalResults
                ->concat($specializedHospitalResults)
                ->concat($specializedClinicResults)
                ->concat($clinicResults);
        } elseif ($table === 'hospital') {
            $results = hospital::search($query)->get();
        } elseif ($table === 'specialized_hospitals') {
            $results = Specialized_Hospital::search($query)->get();
        } elseif ($table === 'specialized_clinics') {
            $results = Specialized_Clinic::search($query)->get();
        } elseif ($table === 'Clinics') {
            $results = Clinic::search($query)->get();
        } else {
            //default
            
            
        }

        // Pass $results to your view for display
       return view('search.results', compact('results'));
    }
}
