<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Image;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Images extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    
    public function render()
    {
        return view('livewire.images',[
            "images" => Image::paginate(5)
        ]);
    }

    public function download($path){
        return Storage::download($path);
    }
}
