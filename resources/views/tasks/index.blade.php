<h1>Lista de Tareas</h1>
<a href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>

<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->title }} - {{ $task->status }}
            <a href="{{ route('tasks.edit', $task->id) }}">Editar</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
