<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
//        CREADO CON LIVEWIRE

//        $request->validate([
//            'name'        => 'required',
//            'email'       => 'required|email|unique:users',
//            'password'    => 'required|confirmed|min:6',
//        ]);
//
//        $newUser = new User;
//        $newUser->name     = request('name');
//        $newUser->email    = request('email');
//        $newUser->password = bcrypt(request('password'));
//        $newUser->save();
//
//        $newUser->roles()->sync(['2']);
//
//        return redirect()->route('admin.users.create')->with('info', 'El usuario se creó con éxito');

    }


    public function edit(User $user)
    {
        $roles = Role::all();

        $rol = $user->roles->pluck('id')->toArray();

//        dd($rol);

        return view('admin.users.edit', compact('user', 'roles', 'rol'));
    }


    public function update(Request $request, User $user)
    {
//        dd($request);
        $user->roles()->sync($request->roles);

        $request->validate([
            'name'     => 'required',
            'email'    => "required|email|unique:users,email,$user->id", //ignorar email para ese registro
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.edit', $user)->with('info', 'El usuario se actualizó con éxito');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'El usuario se eliminó con éxito');
    }
}
