<h3>Editar Libro</h3>

<form action="{{ route('libros.update', ['libro' => $libro->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titulo">Título</label>
    <input type="text" name="titulo" value="{{ $libro->titulo }}">

    <label for="autor">Autor</label>
    <input type="text" name="autor" value="{{ $libro->autor }}">

    <label for="fecha_publicacion">Fecha de publicación</label>
    <input type="date" name="fecha_publicacion" value="{{ $libro->fecha_publicacion }}">

    <button type="submit">Actualizar</button>
</form>
