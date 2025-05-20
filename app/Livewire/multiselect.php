<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Multiselect extends Component
{
    public $category;
    public $categories = [];



    public function render()
    {
        return view('livewire.multiselect',[
            $this->categories = Category::all()
        ]);
    }
}
