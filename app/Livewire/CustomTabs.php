<?php

namespace App\Livewire;

use Livewire\Component;

class CustomTabs extends Component
{
    public $activeTab = "details";


    public function setActiveTab($tab){
        $this->activeTab = $tab;
    }
    public function render()
    {
        return view('livewire.custom-tabs');
    }
}
