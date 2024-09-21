<h1>Editar Tarea</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Título</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" required>

    <label for="due_date">Fecha Límite</label>
    <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}" required>

    <button type="submit">Actualizar</button>
</form>
