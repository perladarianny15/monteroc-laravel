<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Main extends Component
{
    public $shownPage;
    public $category_id;
    public $task_id;

    protected $listeners = ['homeNavChangePage'];

    public function mount()
    {
        $this->shownPage = 'task_index';
    }

    public function homeNavChangePage($page, $category_id = null, $task_id = null)
    {
        $this->shownPage = $page;
        $this->category_id = $category_id;
        $this->task_id = $task_id;
    }

    public function render()
    {
        return view('livewire.home.main');
    }
}
