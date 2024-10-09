<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList App</title>
</head>
<body>

<form action="{{ url('/') }}" method="post">
    @csrf
    <input type="text" name="task" id="task" placeholder="Enter Task">
    <button type="submit" value="Add task">Add Task</button>
</form>
<br>
<table border="1">
    <tr>
        <th>Task</th>
        <th>Action</th>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task -> task}}</td>
            <td>
                <form action="{{ route('task.destroy', $task->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
