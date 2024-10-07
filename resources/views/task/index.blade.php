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

</body>
</html>
