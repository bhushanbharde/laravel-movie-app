<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=04c35731a5ee918f014970082a0088b1')
            ->json()['results'] ;
        
        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=04c35731a5ee918f014970082a0088b1')
        ->json()['results'] ;

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=04c35731a5ee918f014970082a0088b1')
            ->json()['genres'];

        // dd($nowPlayingMovies);
        
        $viewModel = new MoviesViewModel($popularMovies,$nowPlayingMovies,$genres);
        return view('movies.index', $viewModel);
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
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=04c35731a5ee918f014970082a0088b1&append_to_response=videos,credits,images')
            ->json();

        // dump($movie);

        $viewModel = new MovieViewModel($movie);
        return view('movies.show', $viewModel);
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
