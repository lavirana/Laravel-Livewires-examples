<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepCreateProduct extends Component
{

use WithFileUploads;

    public $step = 1;
    public $name = "";
    public $details = "";
    public $price;
    public $quantity;
    public $image;
    public function render()
    {
        return view('livewire.multi-step-create-product');
    }

    public function nextStep()
    {
        switch($this->step){
            case'1':
                $this->validate([
                "name" => "required",
                "details" => "required"
                ]);
                break;
                case'2':
                    $this->validate([
                    "image" => "required|image",
                    ]);
                    break;
                default;

                break;
        }
$this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }


    public function submit(){
        $this->validate([
            "name" => "required",
            "details" => "required",
            "image" => "required|image",
            "price" => "required",
            "quantity" => "required"
            ]);

$photo = $this->image->store("products", "public");
            Product::create([
                "name" => $this->name,
                "details" => $this->details,
                "price" => $this->price,
                "quantity" => $this->quantity,
                "photo" => $photo
            ]);
    }
}
