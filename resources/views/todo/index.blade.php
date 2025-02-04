@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">📝 To-Do List</h1>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($todos as $todo)
                <div class="bg-yellow-300 p-4 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold">{{date('d/m', strtotime($todo->date)) }}</h2>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($todo->tasks as $task)
                            <tbody>
                                <tr>
                                    <td>✅ {{ $task->title }}</td>
                                    <td><span class="font-semibold">{{ ucfirst($task->status) }}</span></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endforeach
            <a href="{{ route("todos.create") }}"> </a>
        </div>
    </div>
@endsection
