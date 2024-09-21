<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $quote = DB::select('select * from quotes');
        $quote = Quote::all();

        return view('quote', ['quotes' => $quote]);
        //return view('quote');
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'artist' => 'required|string',
        'album' => 'required|string',
        'path' => 'required|file|mimes:mp3,wav,ogg',
    ]);

    $music = new Music();
    $music->title = $validatedData['title'];
    $music->artist = $validatedData['artist'];
    $music->album = $validatedData['album'];
    $music->path = $validatedData['path']->store('music', 'public');
    $music->duration = $this->getDuration($music->path);
    $music->save();

    return redirect()->route('music.index')->with('success', 'Music uploaded successfully!');
}

private function getDuration($filePath)
    {
        // Use a suitable library or command-line tool to get the duration
        // For example, using ffmpeg:
        $command = "ffprobe -i \"{$filePath}\" -show_format -v quiet";
        $output = exec($command);
        preg_match('/duration=(.*)/', $output, $matches);
        return isset($matches[1]) ? $matches[1] : 0;
    }
}
