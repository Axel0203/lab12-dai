
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('estudiante/create') }}">Registrar nuevo estudiante</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $estudiantes as $estudiante )
        <tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->nombre }}</td>
            <td>{{ $estudiante->apellidoPaterno }}</td>
            <td>{{ $estudiante->apellidoMaterno }}</td>
            <td>{{ $estudiante->dni }}</td>
            <td>{{ $estudiante->email }}</td>
            <td>
            <a href="{{ url('estudiante/'.$estudiante->id.'/edit/' ) }}">Editar</a>    
            | 
            <form action="{{ url('/estudiante/'.$estudiante->id ) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Deseas borrar este registro?')" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
