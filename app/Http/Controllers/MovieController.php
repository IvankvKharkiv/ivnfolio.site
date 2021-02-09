<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $someothermovies = DB::table('movies')
                            ->leftJoin('users', 'movies.user_id', '=','users.id' ) 
                            ->where('movies.approved','=', '1')
                            ->select('movies.*', 'users.name as user_name');
        
        $someothermovies = $someothermovies->limit(10);
        $someothermovies = $someothermovies->get();

    

        foreach($someothermovies as $someothermovie){
            $somvar = $someothermovie->video_path;
            $somvar1= $someothermovie->title;
        }

        $movies=Movie::all();
        return view('movies.movies', compact('movies'));
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
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    // public function show(Movie $movie)
    // {
    //     //
    // }

    public function show($slug)
    {
        
        $movie = Movie::where('slug', $slug)->first();
        if( !is_null($movie) ) {
            $year = Carbon::createFromFormat('Y-m-d', $movie->release_date)->year;
            return view('movies.movie', compact('movie', 'year'));
        }else{
            abort(404);
        }
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
