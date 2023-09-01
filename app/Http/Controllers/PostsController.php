<!-- ?php -->

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PostsController extends Controller
// {
//     public function search(Request $request){
//         // Get the search value from the request
//         $search = $request->input('search');
    
//         // Search in the title and body columns from the posts table
//         $hospitals = hospitals::query()
//             ->where('name', 'LIKE', "%{$search}%")
//             ->orWhere('h_id', 'LIKE', "%{$search}%")
//             ->get();
    
//         // Return the search view with the resluts compacted
//         return view('search', compact('hospitals'));
//     }
// } 
