<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>

    <title>
        Todo List
    </title>

</head>
<body>

    <div>
        <h1>ToDo List</h1>
    </div>
    <table class="table" style="width:100%">
        @foreach ($todos as $todo)
        <thead>
            <tr>
                <th>Tasks</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($todo->tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $todo->date }}</td>
                </tr>
            @endforeach
        </tbody>
        @endforeach
    </table>

</body>
</html>
