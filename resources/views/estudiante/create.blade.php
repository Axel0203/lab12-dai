Crear estudiante

<form action="{{ url('/estudiante') }}" method="post">
    @csrf

    @include('estudiante.form', ['modo' => 'Crear'])
    
</form>