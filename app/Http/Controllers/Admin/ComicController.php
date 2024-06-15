<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsArray = Comic::all();

        // dd($comicsArray);

        return view('comics.index', compact('comicsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comicData = $request->all();

        $formattedDate = date('Y-m-d', strtotime($comicData['sale_date']));

        $newComic = new Comic();
        $newComic->fill($comicData);
        $newComic->sale_date = $formattedDate;
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idComicClicked)
    {
        $comicClicked = Comic::findOrFail($idComicClicked);

        return view('comics.show', compact('comicClicked'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
