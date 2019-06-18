<?php

namespace App\Http\Controllers;

use App\Area;
use App\User;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::paginate();
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->sortBy('name');
        return view('areas.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = User::find($request->get('user_id'));
        $old_area = $manager->managed_area;
        $old_area->user_id = null;
        $old_area->save();

        $area = Area::create($request->all());
        $manager->area_id = $area->id;
        $manager->save();
        echo $manager;

        return redirect()->route('areas.edit', $area->id)
            ->with('info', 'Area actualizada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return view('areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        $users = User::all()->sortBy('name');
        return view('areas.edit', compact('area', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        /**
         * Preguntar si el campo user_id cambió
         * si cambió, entonces realizar proceso de 
         * asignación de jefe a las areas
         */
        if($request->input('user_id') != $area->user_id) {
            $manager = User::find($request->get('user_id'));
            
            /**
             * Obtiene el área que es administrada
             * por este usuario y la establece a null
             */
            $old_managed_area = $manager->managed_area;
            $old_managed_area->user_id = null;
            $old_managed_area->save();

            /**
             * Obtiene el area que se asignará
             * a este manager
             */
            $manager->area_id = $area->id;
            $manager->save();
        }

        /**
         * Guarda los cambios creados en
         * el área actual
         */
        $area->update($request->all());

        return redirect()->route('areas.edit', $area->id)
            ->with('info', 'Area actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
