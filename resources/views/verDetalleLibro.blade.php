<h3>Detalles del Libro</h3>

<p><strong>Título:</strong> {{ $libro->titulo }}</p>
<p><strong>Autor:</strong> {{ $libro->autor }}</p>
<p><strong>Fecha de Publicación:</strong> {{ $libro->fecha_publicacion }}</p>


<form action="{{ route('libros.destroy', ['libro' => $libro->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Borrar</button>
</form>
