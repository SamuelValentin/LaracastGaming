<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller{
    /*
        @return
    */
    public function index()
    {
        $popularGames = Http::withHeaders([
            'Client-ID' => 'gq1oz2q0sb92v7o0mcjnwxv9k4z6ps',
            'Authorization' => 'Bearer fm22wsvr4xro7m61x7rx6nfwgwfsf4',
        ])->withOptions([
            'body' => "
                fields name,rating; sort rating desc;
            "
        ])->post('https://api.igdb.com/v4/games/')
        ->json();

        dd($popularGames);
    }


}