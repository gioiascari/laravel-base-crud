<?php

namespace App\Http\Controllers;
use App\fumetti_comics as Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Comic::all();
        $navigation = config('nav');
        return view('comic.index', compact('data', 'navigation') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navigation = config('nav');
        return view('comic.create' , compact('navigation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic;
        $newComic->fill($data);
        $newComic->save();
        $id = $newComic->id;
        return redirect()->route('comic.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $navigation = config('nav');
        $comic= Comic::find($id);
        return view('comic.show', compact('comic', 'navigation') );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $navigation = config('nav');
        $comic = Comic::findOrFail($id);
        return view('comic.edit', compact('comic', 'navigation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $data = $request->all();
        $comic = Comic::find($id);
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comic.index', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comic.index', compact('comic')) ;

    }
}
