<h3>Añadir Libro</h3>
<form action="{{ route('libros.store') }}" method="POST">
    @csrf
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">

    <label for="autor">Autor</label>
    <input type="text" name="autor">

    <label for="fecha_publicacion">Fecha publicacion</label>
    <input type="date" name="fecha_publicacion">

    <button type="submit">Guardar</button>
</form>


