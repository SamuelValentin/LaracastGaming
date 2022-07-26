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
        // ->withOptions([
            
        // ])
        ->asForm()->post('https://api.igdb.com/v4/games/'
        ,[
            'body' => "fields *;"
        ]
        );

        dump($popularGames->json());

        return view('index', ['popularGames' => $popularGames]);
    }


}