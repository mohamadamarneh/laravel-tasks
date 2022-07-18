<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $movies = Movie::orderBy('created_at', 'desc')->paginate(2);
        $movies = Movie::all();

        return view('pages.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'movie_name' => 'require',
        //     'movie_description' => 'require',
        //     'movie_gener' => 'require',
        //     'movie_imag' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);
        // $movie->movie_imag = $request->file('movie_imag')->store('public/images');
        $movie = new Movie();
        $movie->movie_name = $request->input('movie_name');
        $movie->movie_description = $request->input('movie_description');
        $movie->movie_gener = $request->input('movie_gener');
        $image = time().'-'.$request->movie_name.'.'.$request->movie_imag->extension(); 
        $request->movie_imag->move(public_path('images'), $image);
        $movie->movie_imag = $image;
        $movie->save();
        return redirect('/movies')->with('success', 'Movie has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('pages.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('pages.update')->with('movie',$movie);

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
        $movie = Movie::find($id);

        $movie->movie_name = $request->input('movie_name');
        $movie->movie_description = $request->input('movie_description');
        $movie->movie_gener = $request->input('movie_gener');
        $movie->movie_imag = $request->file('movie_imag')->store('public/images');
        $movie->save();
        return redirect('/movies')->with('success', 'Movie has been Added!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movies')->with('success', 'Post Deleted');


    }


    public function search(){
        $search = $_GET['query'];
        $movies = Movies::where('movie_name','LIKE','%'. $search.'%')->get();
        return view('movies.search')->with('movies',$movies);
    }

}
