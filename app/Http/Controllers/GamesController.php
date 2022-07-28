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
        ->withBody('
            fields name;
            sort rating desc;
        
        ','text/plain')
        ->post('https://api.igdb.com/v4/games/');

        dump($popularGames->json());

        return view('index', ['popularGames' => $popularGames]);
    }


}