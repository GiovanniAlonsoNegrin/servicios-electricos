<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserCreate extends Component
{
    public $name, $email, $password, $password_confirmation;

    protected $rules = [
        'name'                  => 'required',
        'email'                 => 'required|email|unique:users',
        'password'              => 'required',
        'password_confirmation' => 'same:password',
    ];

    public function render()
    {
        return view('livewire.admin.user-create');
    }

    public function submit(){

        //Validamos el formulario
        $this->validate();

        //Creamos el usuario
//        User::create(['name' => $this->name, 'email' => $this->email, 'password' => bcrypt($this->password)]);
        $newUser = new User;
        $newUser->name     = $this->name;
        $newUser->email    = $this->email;
        $newUser->password = bcrypt($this->password);
        $newUser->save();
        //Asignamos el rol con id 2 por defecto al usuario creado
        $newUser->roles()->sync(['2']);

        //Reseteamos el formulario
        $this->reset(['name', 'email', 'password', 'password_confirmation']);

        //Emitimos un evento
        //$this->emit('send');

        //Redireccionamos con un mensaje de confirmación que recepcionamos en la vista
        redirect()->route('admin.users.index')->with('info', 'El usuario se creó con éxito');

    }
}
