<h3>Listado de Libros</h3>

@if($libros->isEmpty())
    <p>No hay libros disponibles</p>
@else
    <ul>
        @foreach($libros as $libro)
            <li>{{ $libro->id }}-{{ $libro->titulo }} - {{ $libro->autor }} - {{ $libro->fecha_publicacion }}
                @if($libro->disponible)
                    <span style="color: green">Disponible</span>
                @else
                    <span style="red: red">No disponible</span>
                @endif

            </li>
        @endforeach
    </ul>
@endif


