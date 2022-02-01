<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;

class HomeController extends Controller
{
    public function home() {
        $series = Serie::all();

        return view('pages.home', compact('series'));
    }

    public function serie($id) {
        $serie = Serie::findOrFail($id);

        return view('pages.serie', compact('serie'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:60|unique:series',
            'author' => 'required|string|max:60',
            'release_date' => 'required|date',
            'rating' => 'nullable|integer|min:0|max:5'
        ]);

        $serie = Serie::create($data);

        return redirect()->route('serie', $serie->id);
    }

    public function edit($id) {
        $serie = Serie::findOrFail($id);

        return view('pages.edit', compact('serie'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'title' => 'required|string|max:60|unique:series,title',
            'author' => 'required|string|max:60',
            'release_date' => 'required|date',
            'rating' => 'nullable|integer|min:0|max:5' 
        ]);

        $serie = Serie::findOrFail($id);
        $serie->update($data);

        return redirect()->route('serie', $serie->id);
    }

    public function delete($id) {
        $serie = Serie::findOrFail($id);
        $serie->delete();

        return redirect()->route('home');
    }
}