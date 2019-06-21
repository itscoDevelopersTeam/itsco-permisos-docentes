<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Area;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Dependiendo del rol del usuario
         * se mostrarán todos los usuarios
         * o solamente aquellos del área a la
         * que pertenecen.
         * 
         * Nota: un usuario no puede automodificarse
         */
        $users = null;
        $manager = Auth::user();
        if($manager->hasRole('admin') || $manager->hasRole('recursos.humanos')) {
            $users = User::paginate();
        } elseif(!empty($manager->area)) {  // Valida si el usuario tiene asignada o no un área
            $users = $manager->area->users;
        }

        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $areas = Area::all()->sortBy('name');

        return view('users.edit', 
            compact('user', 'roles', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        /**
         * Preguntar si este usuario
         * es jefe de algún área
         */
        // echo $user->managed_area;
        if(!empty($user->managed_area)) {
            $old_managed_area = $user->managed_area;
            $old_managed_area->user_id = null;
            $old_managed_area->save();
        }

        /**
         * Preguntar si se le asignó como jefe de área
         * de ser así modificar el campo 'user_id' de
         * la tabla areas para establecerlo como jefe
         */
        
        $user->update($request->all());
        $user->syncRoles($request->get('roles'));
        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
