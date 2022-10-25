<?php

namespace App\Http\Livewire\Home\Task;

use App\Models\Category;
use App\Models\Task;
use Livewire\Component;

class Create extends Component
{
    public $task_id;
    public $task;
    public $Categories;

    public $rules = [
        'task.category_id' => 'required',
        'task.name' => 'required|min:3|max:16',
        'task.description' => 'required|alpha_num|max:11',
        'task.hours' => 'required',
        'task.start_date' => 'required',
        'task.end_date' => 'required',
        'task.status' => 'nullable'

    ];

    public function mount($task_id)
    {
        if ($task_id === null) {
            $this->task = new Task();
        } else {
            $this->task = Task::findOrFail($task_id);
        }

        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->Categories = Category::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        $this->task->save();
        $this->emit('homeNavChangePage', 'task_index', null);
    }

    public function goBack()
    {
        $this->emit('homeNavChangePage', 'task_index', null);
    }

    public function render()
    {
        return view('livewire.home.task.create');
    }
}
