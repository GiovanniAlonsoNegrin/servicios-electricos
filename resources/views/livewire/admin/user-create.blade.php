<div>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label id="name">Nombre</label>
                    <input wire:model.defer="name" type="text" id="name" class="form-control" placeholder="Ingrese el nombre de usuario">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label id="email">Email</label>
                    <input  wire:model.defer="email" type="email" id="email" class="form-control" placeholder="Ingrese el email de usuario">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label id="password">Contraseña</label>
                    <input  wire:model.defer="password" type="password" id="password" class="form-control" placeholder="Ingrese la contraseña de usuario">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label id="password_confirmation">Repetir contraseña</label>
                    <input wire:model.defer="password_confirmation" type="password" id="password_confirmation" class="form-control" placeholder="Repite la contraseña de usuario">
                    @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Crear usuario</button>
                <a class="btn btn-danger" href="{{ route('admin.users.index') }}">Cancelar</a>
            </form>

        </div>
    </div>
</div>

{{--@push('js')--}}
{{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--    <script>--}}
{{--RECEPCIONAMOS EL EVENTO--}}
{{--        Livewire.on('send', () => {--}}
{{--            // alert('Usuario Creado');--}}
{{--            Swal.fire({--}}
{{--                title: 'Usuario creado con éxito',--}}
{{--                text: "El usuario se ha creado correctamente",--}}
{{--                icon: 'success',--}}
{{--                confirmButtonColor: '#28A745',--}}
{{--                confirmButtonText: 'Ok'--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}
