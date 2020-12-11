<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $title;
    public string $submitText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = '', string $submitText = '')
    {
        $this->title = $title;
        $this->submitText = $submitText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
