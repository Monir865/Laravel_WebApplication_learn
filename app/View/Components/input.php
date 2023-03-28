<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{

    public $name;
    public $label;
    public $type;
    public $data;

    public function __construct($name, $label, $type, $data=0)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->data = $data;
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
