@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">

        <livewire:todo-form />
        <br>
        <br>
        <!-- Grid Layout -->
        <div class="grid gap-4 grid-cols-[repeat(auto-fit,minmax(250px,1fr))]">

        @foreach ($todos as $todo)
                <div class="bg-yellow-300 p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold mr-2">{{date('d/m', strtotime($todo->date)) }}</h2>
                        <svg wire:click="$emit('openEditTodoForm', {{ $todo->id }})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                        </svg>
                    </div>

                    <table class="table-auto">
                        <colgroup>
                            <col style="width: 80%">
                            <col style="width: 20%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($todo->tasks as $task)
                            <tbody>
                                <tr class="min-h-12" >
                                    <td class="pr-4">✅ {{ $task->title }}</td>
                                    <td class="text-left font-semibold"><span class="font-semibold">{{ ucfirst($task->status) }}</span></td>
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
