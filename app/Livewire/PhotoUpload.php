<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class PhotoUpload extends Component
{
    use WithFileUploads;
    public $photo;
    public function render()
    {
        return view('livewire.photo-upload',[
            "images" => Image::all()
        ]);
    }

    public function submit(){
        $this->validate([
            "photo" => "required|image"
        ]);
        $filepath = $this->photo->store("photos");
       $image = Image::create([
            'title' => 'Testing Image',
            'filepath' => $filepath
        ]);

        session()->flash('success', 'Photo uploaded successfully');
        session()->flash('error', 'Something went wrong');
        info($filepath);
    }
}

