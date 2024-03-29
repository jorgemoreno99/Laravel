
<h3>Añadir Prestamo</h3>
<form action="{{ route('prestamos.store') }}" method="POST">
    @csrf
    <label for="user">Usuario</label>
    <input type="text" name="user">

    <label for="book_id">ID del Libro</label>
    <input type="number" name="book_id">

        {{-- <label for="fecha_prestamo">Fecha de Préstamo</label>
        <input type="date" name="fecha_prestamo">

        <label for="fecha_devolucion">Fecha de Devolución</label>
        <input type="date" name="fecha_devolucion"> --}}

    <button type="submit">Guardar</button>
</form>
