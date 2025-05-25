<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::latest("id")->take(5)->get();
    }

    public function loadProducts()
    {
        $this->products = Product::latest("id")->take(20)->get();
    }
/*
User scrolls to bottom.
JavaScript runs Livewire.dispatch('loadMoreProducts').
Livewire receives that event.
It sees #[On('loadMoreProducts')] and runs loadMoreProducts() method.
That method loads and appends more data.
*/
    #[On('loadMoreProducts')]
    public function loadMoreProducts()
    {
        $newProducts = Product::latest("id")
            ->skip($this->products->count())
            ->take(5)
            ->get();

        $this->products = $this->products->merge($newProducts);
    }

    public function render()
    {
        return view('livewire.products');
    }
}
