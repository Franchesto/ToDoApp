<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Todo List
    </title>

</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th>Todo ID</th>
        <th>Todo Name</th>
        <th>Tasks</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->name }}</td>
            <td>
                <ul>
                    @foreach ($todo->tasks as $task)
                        <li>{{ $task->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
