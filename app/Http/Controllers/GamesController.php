<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

        $before = Carbon::now()->subMonth(2)->timestamp;
        $after = Carbon::now()->addMonth(2)->timestamp;

        $popularGames = Http::withHeaders(config('services.igdb'))
        ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating;
            where platforms = (48,49,130);
            &(first_release_date > {$before}
            & first_release_date < {$after});
            sort rating asc;
            limit 10;
        
        ",'text/plain')
        ->post('https://api.igdb.com/v4/games/')->json();

        dump($popularGames);

        return view('index', [
            'popularGames' => $popularGames]
        );
    }


}