@component('mail::message')
    <h1 class="font-sans">
        Contacto vía web a {{ now()->format('d/m/Y H:i:s') }}
    </h1>
    <p>
        Nombre: {{ $data['data']->name }}
    </p>
    <p>
        Email: {{ $data['data']->email }}
    </p>
    <p>
        Teléfono: {{ $data['data']->phone }}
    </p>
    <p>
        Mensaje: {{ $data['data']->message }}
    </p>
    <hr>
@endcomponent
