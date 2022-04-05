<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function actor(){

        $actores = Actor::paginate(10);

        return view('saki.listaractores', compact('actores'));
    }


    public function create()
    {
        return view('saki.crearactores');
    }

    public function store()
    {

        $data = request()->all();

        Actor::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        return redirect('/sakila/listadoactor');
    }

    public function delete($id){

        $actor = Actor::find($id);
        $actor->delete();
        return view('saki.actorborrado');
    }

    public function editar($actor){

        return view('saki.modificaractores')
        ->with('actor', $actor);
    }

    public function update($id){

        $actor = Actor::find($id);
        $data = request()->all();

        $actor->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        return redirect('/sakila/listadoactor')
        ->with('actor', $actor);

    }

}
