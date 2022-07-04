<?php

namespace App\Http\Controllers;

use App\Comic;
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
        $comics_list = Comic::all();
        return view('comics.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_comic = Comic::findOrFail($id);
        return view('comics.show', compact('show_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show_comic = Comic::findOrFail($id);
        return view('comics.edit', compact('show_comic'));
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
        $request->validate($this->getValidationRules());
        $data = $request->all();
        $show_comic = Comic::findOrFail($id);
        $show_comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $show_comic = Comic::findOrFail($id);
        $show_comic->delete();

        return redirect()->route('comics.index');
    }

    /**
     * Return an array of validation rules.
     *
     * @return Array
     */
    private function getValidationRules()
    {
        return [
            'title' => 'required|max:150|min:5',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'required|max:150',
            'sale_date' => 'required|max:50',
            'type' => 'required|max:50'
        ];
    }
}
