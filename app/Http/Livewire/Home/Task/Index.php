<?php

namespace App\Http\Livewire\Home\Task;

use App\Models\Task;
use Livewire\Component;

class Index extends Component
{
    public $Tasks;

    public function mount()
    {
        $this->loadTask();
    }

    public function loadTask()
    {
        $this->Tasks = Task::all();

    }

    public function DeleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        $this->loadTask();
    }

    public function render()
    {
        return view('livewire.home.task.index');
    }
}
