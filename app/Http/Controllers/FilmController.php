<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Language;

class FilmController extends Controller
{
    public function film(){

        $peliculas = Film::paginate(20);
        $lenguajes = Language::all();

        return view('saki.listarpelis', compact('peliculas'), compact('lenguajes'));
    }

    public function crear(){

        return view('saki.crearpelis');
    }

    public function stored()
    {

        $data = request()->all();

        Film::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'release_year' => $data['release_year'],
            'language_id' => $data['language_id'],
            'original_language_id' => $data['original_language_id'],
            'rental_duration' => $data['rental_duration'],
            'rental_rate' => $data['rental_rate'],
            'length' => $data['length'],
            'replacement_cost' => $data['replacement_cost'],
            'rating' => $data['rating'],
            'special_features' => $data['special_features'],
        ]);

        return redirect('/sakila/listadopelicula');
    }

    public function deleted($id){

        $pelicula = Film::find($id);
        $pelicula->delete();
        return view('saki.peliborrado');
    }

    public function edit($pelicula){

        return view('saki.modificarpelis')
        ->with('pelicula', $pelicula);
    }

    public function updated($id){

        $pelicula = Film::find($id);
        $data = request()->all();

        $pelicula->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'release_year' => $data['release_year'],
            'language_id' => $data['language_id'],
            'original_language_id' => $data['original_language_id'],
            'rental_duration' => $data['rental_duration'],
            'rental_rate' => $data['rental_rate'],
            'length' => $data['length'],
            'replacement_cost' => $data['replacement_cost'],
            'rating' => $data['rating'],
            'special_features' => $data['special_features'],
        ]);

        return redirect('/sakila/listadopelicula')
        ->with('pelicula', $pelicula);
    }
    
}
