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

        $before = Carbon::now()->subMonth(12)->timestamp;
        $before1 = Carbon::now()->subMonth(6)->timestamp;
        $after = Carbon::now()->addMonth(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $popularGames = Http::withHeaders(config('services.igdb'))
        ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count;
            where platforms = (49)
            & (first_release_date > {$before}
            & first_release_date < {$after})
            & rating_count > 20;
            sort rating desc;
            limit 10;
        
        ",'text/plain')
        ->post('https://api.igdb.com/v4/games/')->json();

        dump($popularGames);

        $recentlyReview = Http::withHeaders(config('services.igdb'))
        ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (49)
            & (first_release_date > {$before1}
            & first_release_date < {$current})
            & rating > 75;
            sort rating desc;
            limit 3;
        
        ",'text/plain')
        ->post('https://api.igdb.com/v4/games/')->json();

        dump($recentlyReview);

        return view('index', [
            'popularGames' => $popularGames,
            'recentlyReview' => $recentlyReview,
        ]);
    }


}