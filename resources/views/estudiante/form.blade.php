
<h1> {{$modo }} estudiante </h1>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ isset($estudiante->nombre)?$estudiante->nombre:'' }}" id="nombre"><br>

<label for="apellidoPaterno">Apellido Paterno</label>
<input type="text" name="apellidoPaterno" value="{{ isset($estudiante->apellidoPaterno)?$estudiante->apellidoPaterno:'' }}" id="apellidoPaterno"><br>

<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" value="{{ isset($estudiante->apellidoMaterno)?$estudiante->apellidoMaterno:'' }}" id="apellidoMaterno"><br>

<label for="dni">DNI</label>
<input type="text" name="dni" value="{{ isset($estudiante->dni)?$estudiante->dni:'' }}" id="dni"><br>

<label for="email">Email</label>
<input type="text" name="email" value="{{ isset($estudiante->email)?$estudiante->email:'' }}" id="email"><br>

<input type="submit" value="{{ $modo }}">
<a href="{{ url('estudiante/') }}">Regresar</a>
<br>