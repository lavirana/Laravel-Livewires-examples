<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use  App\Models\variants;
use Livewire\Component;

class CreateProductWithVariants extends Component
{
    public  $name, $pro_id;
    public $categories = [];
    public $products = [];
    public $variants = [
        ["name" => "", "price" => "", "sku" => ""]
    ];

    public function loadCategories(){
        info('load categories');
        $this->categories = Category::all();
    }
    public function loadProducts(){
        $this->products = Product::all();
    }

    public function addVariant(){
        $this->variants[] = 
        ["name" => "", "price" => "", "sku" => ""];
    }
    public function render()
    {
        return view('livewire.create-product-with-variants');
    }

    public function removeVariant($index){
        unset($this->variants[$index]);
    }

    public function submit(){
        info($this->variants);
        $this->validate([
            "pro_id" => "required",
            "variants.*.name" => "required",
            "variants.*.price" => "required",
            "variants.*.sku" => "required"
        ]);
        $product = Product::find($this->pro_id);
        foreach($this->variants as $variant){
            $product->variants()->create($variant);
        }
        $this->variants = [
            ["name" => "", "price" => "", "sku" => ""]
        ];
        $this->name = "";

        session()->flash('success', 'Product variants are created');

    }
}
