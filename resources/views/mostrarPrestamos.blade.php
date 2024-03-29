<h3>Listado de Prestamos</h3>

@if($prestamos->isEmpty())
    <p>No hay prestamos actualmente</p>
@else
    <ul>
        @foreach($prestamos as $prestamo)
            <li>{{ $prestamo->id }}-{{ $prestamo->user }} - {{ $prestamo->fecha_prestamo }} - {{ $prestamo->fecha_devolucion }}</li>
        @endforeach
    </ul>
@endif
