<?php

namespace App\Http\Controllers;

use App\SolicitudPermiso;
use Illuminate\Http\Request;

class SolicitudPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'solicitudes.index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'solicitudes.create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'solicitudes.create';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitudPermiso  $solicitudPermiso
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitudPermiso $solicitudPermiso)
    {
        return 'solicitudes.show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitudPermiso  $solicitudPermiso
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitudPermiso $solicitudPermiso)
    {
        return 'solicitudes.edit';
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
        return 'solicitudes.edit';
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
