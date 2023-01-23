<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(3);

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); //

        // $new_comic = new Comic;
        // $new_comic->title           = $data['title'];
        // $new_comic->description     = $data['description'];
        // $new_comic->thumb           = $data['thumb'];
        // $new_comic->price           = $data['price'] ?? false;
        // $new_comic->series          = $data['series'];
        // $new_comic->sale_date       = $data['sale_date'];
        // $new_comic->type            = $data['type'];
        // $new_comic->save();

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id )->with('success_create', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = comic::findOrFail($comic); senza il parametro nella funzione show
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $request->all();

        $comic->title           = $data['title'];
        $comic->description     = $data['description'];
        $comic->thumb           = $data['thumb'];
        $comic->price           = $data['price'];
        $comic->series          = $data['series'];
        $comic->sale_date       = $data['sale_date'];
        $comic->type            = $data['type'];
        $comic->update();


        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('success_delete', $comic->id);
    }
}
