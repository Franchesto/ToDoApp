<?php

namespace App\Livewire;

use Livewire\Component;

class EditTodoForm extends Component
{
    public $todo;

    protected $listeners = ['openEditTodoForm' => 'openTodo'];

    public function openTodo($todoId)
    {
        $this->todo = Todo::find($todoId);
    }

    public function render()
    {
        return view('livewire.edit-todo-form');
    }
}
