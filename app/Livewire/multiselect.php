<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ProductCategory;
use Livewire\Component;

class Multiselect extends Component
{
    public $category, $category_ids;
    public $categories = [];



    public function render()
    {
        return view('livewire.multiselect',[
            $this->categories = Category::all()
        ]);
    }

    public function submit(){
        foreach($this->category_ids as $key => $cat_id){
            ProductCategory::create([
                'product_id' => 2,
                'category_id' => $cat_id
            ]);
        }
    }
}
