<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateComicRequest;
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
        // Add Validation for data input variable ($request)
        $request->validate([

            'title' => ['required', 'min:3'],
            'price' => ['required', 'min:0.01'],
            'series' => ['min:3'],
            'description' => ['min:20']

        ]);


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
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $updatedData = $request->all();

        $formattedDate = date('Y-m-d', strtotime($updatedData['sale_date']));

        $updatedData['sale_date'] = $formattedDate;

        // dd($updatedData);

        $comic->update($updatedData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    /**
     * Display a listing of the soft deleted resource.
     */
    public function getDeletedComics()
    {
        
        $deletedComicsArray = Comic::onlyTrashed()->get();

        // dd($deletedComicsArray);

        return view('comics.deleted', compact('deletedComicsArray'));
        
    }
}