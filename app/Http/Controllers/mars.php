<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class mars extends Controller
{
    public function index()
    {
        $response = Http::withoutVerifying()->get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos', [
            "api_key" => 'kG9eZ3SOphQ2lzqdlaahrOnQundSFngPLzuQnLJ7',
            "earth_date" => '2022-09-01',
            "page" => 1,
        ]);
        // dd($response->json());
        return view('mars.index', [
            'data' => $response->json()['photos']
        ]);
    }
}
