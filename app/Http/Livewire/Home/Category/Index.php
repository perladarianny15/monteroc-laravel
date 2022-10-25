<?php

namespace App\Http\Livewire\Home\Category;

use App\Models\Category;
use App\Models\Task;
use Livewire\Component;

class Index extends Component
{
    public $Categories;


    public function mount()
    {
        $this->loadCategory();
    }

    public function loadCategory()
    {
        $this->Categories = Category::all();

    }

    public function DeleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $this->loadCategory();
    }


    public function render()
    {
        return view('livewire.home.category.index');
    }
}
