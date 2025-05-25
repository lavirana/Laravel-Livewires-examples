<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\ProductImage;
use Livewire\WithFileUploads;
use Livewire\Component;

class UploadProductMultipleImages extends Component
{
    use WithFileUploads;
    public  $name, $pro_id;
    public $products = [];
    public $images = [];
    public $imagesPreview = [];

    public function loadProducts(){
        $this->products = Product::all();
    }




    public function submit(){

        $this->validate([
        'pro_id' => 'required',
        'images' => 'required'
        ]);

        $product = Product::find($this->pro_id);

        foreach($this->images as $image)
        {
            $path = $image->store("products", "public");
            ProductImage::create([
                'product_id' => $product->id,
                'path' => $path
            ]);
        }
        $this->images = [];
        $this->imagesPreview = [];
        session()->flash('success', "product Images has been uploaded");

    }
    public function updatedImages(){
        $this->imagesPreview = [];
            foreach($this->images as $image){
                $this->imagesPreview[] = $image->temporaryUrl(); 
            }
    }
    public function render()
    {
        return view('livewire.upload-product-multiple-images');
    }
}
