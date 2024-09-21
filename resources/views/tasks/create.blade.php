<h1>Crear Nueva Tarea</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Título</label>
    <input type="text" name="title" id="title" required>

    <label for="due_date">Fecha Límite</label>
    <input type="date" name="due_date" id="due_date" required>

    <button type="submit">Crear</button>
</form>
