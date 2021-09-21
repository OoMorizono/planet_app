<?php

namespace App\Http\Controllers;

use App\Models\planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        $planet = new Planet();

        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();
        return redirect('/planets');
    }

    public function edit($id)
    {
        $planet = planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();
        return redirect('/planets');
    }

    public function destroy($id)
    {
        $task = Planet::find($id);
        $task->delete();

        return redirect('/planets');
    }
}
