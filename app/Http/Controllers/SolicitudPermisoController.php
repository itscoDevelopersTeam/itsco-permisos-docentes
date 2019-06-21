<?php

namespace App\Http\Controllers;

use App\SolicitudPermiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SolicitudPermisoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        
        // // $solicitudes[] = null;
        // $manager = Auth::user();
        // $users = $manager->managed_area->users;
        // // echo $users;
        // foreach ($users as $user) {
        //     $nuevo = User::find($user->id);
        //     // if($nuevo->solicitudes->isNotEmpty()) {
        //     //     echo $nuevo->solicitudes;
        //     // }
        // }

        // // foreach($solicitudes as $solicitud) {
        // //     echo($solicitud->id) . '<br><br><br><br>';
        // // }

        // if(Auth::user()->hasRole('jefe.area')) {
        //     echo 'soy jefe de ' . Auth::user()->managed_area->name;
        // } else {
        //     echo 'Me lleva la verga';
        // }
        
        $solicitudes = null;
        if(Auth::user()->hasRole('admin')) {
            $solicitudes = SolicitudPermiso::paginate();
        } else {
            $auth_user_id = Auth::id();
            $solicitudes = SolicitudPermiso::where('user_id', $auth_user_id)
                ->paginate();
        }
            
        return view('solicitudes.index', compact('solicitudes'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('solicitudes.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $solicitud = SolicitudPermiso::create($request->all());
        $solicitud->user_id = Auth::id();
        $solicitud->save();
        return redirect()->route('solicitudes.edit', $solicitud->id)
            ->with('info', 'Area actualizada con éxito');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\SolicitudPermiso  $solicitudPermiso
    * @return \Illuminate\Http\Response
    */
    public function show(SolicitudPermiso $solicitudPermiso)
    {
        return view('solicitudes.show', compact('solicitudPermiso'));
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\SolicitudPermiso  $solicitudPermiso
    * @return \Illuminate\Http\Response
    */
    public function edit(SolicitudPermiso $solicitudPermiso)
    {
        return view('solicitudes.edit', compact('solicitudPermiso'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\SolicitudPermiso  $solicitudPermiso
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, SolicitudPermiso $solicitudPermiso)
    {
        $solicitudPermiso->update($request->all());
        return redirect()->route('solicitudes.edit', $solicitudPermiso->id)
            ->with('info', 'Area actualizada con éxito');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\SolicitudPermiso  $solicitudPermiso
    * @return \Illuminate\Http\Response
    */
    public function destroy(SolicitudPermiso $solicitudPermiso)
    {
        return 'solicitudes.destroy';
    }
}
