<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = [];

        // Search in home page
        $homeContent = File::get(resource_path('views/pages/home.blade.php'));
        if (stripos($homeContent, $query) !== false) {
            $results[] = [
                'title' => 'Home Page',
                'url' => route('home'),
                'description' => 'The word "' . $query . '" was found on the home page.'
            ];
        }

        return view('pages.search-results', ['query' => $query, 'results' => $results]);
    }
}
