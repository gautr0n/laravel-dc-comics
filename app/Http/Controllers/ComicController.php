<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        $data = [
            'comics' => $comics
        ];

        return view('comics.index', $data);
    }

    public function show(Comic $comic){
        return view ('comics.show', compact('comic'));
    }

    public function create(){
        return view ('comics.create');
    }

    public function store(Request $request){

            $data = $request->validate([
                'title'=>'required|max:255|min:2',
                'description'=>'required|max:1000|min:2',
                'thumb'=>'required|max:255|url',
                'price'=>'required|max:5',
                'series'=>'required|max:20|min:2',
                'sale_date'=>'required|max:20|min:2',
                'type'=>'required|max:20|min:2',
            ]);

            $new_comic = new Comic();

            $new_comic->title = $data['title'];
            $new_comic->description = $data['description'];
            $new_comic->thumb = $data['thumb'];
            $new_comic->price = $data['price'];
            $new_comic->series = $data['series'];
            $new_comic->sale_date = $data['sale_date'];
            $new_comic->type = $data['type'];

            $new_comic->save();

            return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic){
        return view ('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic){

        $data = $request->validate([
            'title'=>'required|max:255|min:2',
            'description'=>'required|max:1000|min:2',
            'thumb'=>'required|max:255|url',
            'price'=>'required|max:5',
            'series'=>'required|max:20|min:2',
            'sale_date'=>'required|max:20|min:2',
            'type'=>'required|max:20|min:2',
        ]);


        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic){
        $comic->delete();

        return to_route('comics.index');
    }

    public function destroyAll(){
        Comic::truncate();

        return to_route('comics.index');
    }
}
