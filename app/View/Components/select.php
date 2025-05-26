<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
class Select extends Component
{
    public $label;
    public $name;
    public $model;
    public $placeholder;
    public $options;



    public function __construct($label = '', $name = '', $model = '', $placeholder = '', $options = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->model = $model;
        $this->placeholder = $placeholder;
        $this->options = $options;
    }

    public function render()
    {
        return view('components.select');
    }
}
