<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GamesController extends Controller{
    /** 
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $popularGames = Http::withHeaders(config('services.igdb'))
        ->withOptions([
            'body' => "
                fields *; 
                limit 5;
            "])
        ->post('https://api.igdb.com/v4/games/')
        ->json();

        dump($popularGames);

        return view('index', ['popularGames' => $popularGames]);
    }


}