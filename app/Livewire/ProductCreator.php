<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCreator extends Component
{
    public $name, $price, $detail, $category;
    public $categories = [];

    public function loadCategories(){
        info('load categories');
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.product-creator');
    }

    public function resetForm(){
        $this->name = "";
        $this->price = "";
        $this->detail = "";
    }

    public function submit(){
        $this->validate([
            "name" => "required",
            "price" => "required|min:5|numeric",
            "detail" => "required"
        ]);

        $product = Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'detail' => $this->detail
        ]);
        info($product);
    }
}
