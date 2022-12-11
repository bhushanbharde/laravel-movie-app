<?php

namespace App\Http\Controllers;

use App\ViewModels\TvShowViewModel;
use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTv = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=04c35731a5ee918f014970082a0088b1')
            ->json()['results'] ;
        
        $topRatedTv = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=04c35731a5ee918f014970082a0088b1')
        ->json()['results'] ;

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=04c35731a5ee918f014970082a0088b1')
            ->json()['genres'];

        // dd($nowPlayingMovies);
        
        $viewModel = new TvViewModel($popularTv, $topRatedTv,$genres);
        return view('tv.index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvshow = Http::get('https://api.themoviedb.org/3/tv/'.$id.'?api_key=04c35731a5ee918f014970082a0088b1&append_to_response=videos,credits,images')
            ->json();

        // dump($movie);

        $viewModel = new TvShowViewModel($tvshow);
        return view('tv.show', $viewModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
