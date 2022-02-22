<div>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        {{-- Si users al menos tiene un registro se muestra --}}
        @if($roles->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th colspan="1"></th>
                            <th><a class="text-success" href="{{ route('admin.roles.create') }}"><i class="fas fa-plus-circle fa-lg"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->title }}</td>
                                <td width="10px">
                                    <a class="text-primary" href="{{ route('admin.roles.edit', $role->id) }}"><i class="fas fa-edit fa-lg"></i></a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger border-transparent bg-transparent"><i class="fas fa-trash-alt fa-lg"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $roles->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
