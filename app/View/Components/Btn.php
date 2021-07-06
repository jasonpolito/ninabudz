<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Btn extends Component
{
    public $text;
    public $icon;
    public $size;
    public $href;
    public $dark;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = '#', $text = '', $icon = false, $size = 'basic', $dark = false)
    {
        $this->text = $text;
        $this->href = $href;
        $this->icon = $icon;
        $this->dark = $dark;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn');
    }
}