<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIcontroller extends Controller
{
    public function fetchAPI()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
        ]);
        $data = $response->json();
        if ($response->successful()) {
            return view('index', compact('data'));
        }
        return response()->json(['error' => 'Failed to fetch posts'], $response->status());
    }


    public function fetchAPI_ForID($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts', [
            'id' => $id,
        ]);
        $data = $response->json();
        if ($response->successful()) {
            return view('index', compact('data'));
        }
        return response()->json(['error' => 'Failed to fetch posts'], $response->status());
    }
}
