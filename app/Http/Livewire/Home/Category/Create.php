<?php

namespace App\Http\Livewire\Home\Category;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $category_id;
    public $category;

    public $rules = [
        'category.name' => 'required|min:3|max:16',
        'category.description' => 'required|min:1',
        'category.status' => 'nullable'

    ];

    public function mount($category_id)
    {
        if ($category_id === null) {
            $this->category = new category();
        } else {
            $this->category = category::findOrFail($category_id);
        }

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        $this->category->save();
        $this->emit('homeNavChangePage', 'category_index', null);
    }

    public function goBack()
    {
        $this->emit('homeNavChangePage', 'category_index', null);
    }

    public function render()
    {
        return view('livewire.home.category.create');
    }
}
