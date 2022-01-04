<?php

namespace App\Http\Livewire\Frontend;

use App\Mail\GeneralMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $phone, $message, $policies;

    protected $rules = [
        'name'     => 'required',
        'email'    => 'required|email',
        'phone'    => 'required',
        'message'  => 'required|min:4',
        'policies' => 'accepted'
    ];

    public function render()
    {
        return view('livewire.frontend.contact');
    }

    public function send(){
        // validamos el formulario
        $this->validate();
        // Generamos el email
        $email['recipients'] = 'giovannialonsonegrin@gmail.com';
        $email['subject']    = 'Contacto vía web | servicios eléctricos';
        $email['data']       = $this;
        $email['name']       = 'Giovanni';
        $email['view']       = 'emails.contact';
        $email['archive']    = null;
        // Emitimos el correo
        Mail::to($email['recipients'])
            ->send(new GeneralMail($email));
        // Emitimos un evento para generar el sweet alert
        $this->emit('mySent');
        // Reseteamos el controlador eliminando todos los valores de las variables
        $this->reset(['name', 'email', 'phone', 'message', 'policies']);
    }
}
