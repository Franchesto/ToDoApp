<?php

namespace App\Livewire;

use Livewire\Component;

class TodoForm extends Component
{
    public bool $showForm = false; // Control visibility of the form

    // Toggle visibility of the form
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function render()
    {
        return view('livewire.todo-form');
    }
}
