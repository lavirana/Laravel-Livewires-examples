<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Image;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;

class Images extends Component
{
    use WithPagination;
    #[Url]
    public $search;
    protected $paginationTheme = "bootstrap";
    
    public function render()
    {
        info($this->search);
        return view('livewire.images',[
            "images" => Image::where('title', "LIKE", "%{$this->search}%")->paginate(5)
        ]);
    }

    public function download($path){
        return Storage::download($path);
    }
}
