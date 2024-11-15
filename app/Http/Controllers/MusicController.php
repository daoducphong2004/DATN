<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'music' => 'required|mimes:mp3,wav,ogg|max:10240', // Giới hạn 10MB
        ]);

        $path = $request->file('music')->store('music', 'public');

        return response()->json(['url' => asset('storage/' . $path)]);
    }
}
