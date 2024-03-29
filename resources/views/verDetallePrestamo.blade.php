<h3>Detalles del Prestamo</h3>

<p><strong>User:</strong> {{ $prestamo->user }}</p>
<p><strong>Libro:</strong> {{ $libro->titulo }} ({{$libro->autor}})</p>
<p><strong>Fecha de prestamo:</strong> {{ $prestamo->fecha_prestamo }}</p>
<p><strong>Fecha de devolucion:</strong> {{ $prestamo->fecha_devolucion }}</p>

<form action="{{ route('devolver', ['id' => $prestamo->id]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Devolver</button>
</form>




<form action="{{ route('prestamos.destroy', ['prestamo' => $prestamo->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Borrar</button>
</form>
