<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PetCard extends Component
{
    public object $pet;

    public string $className;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(object $pet, string $className = '')
    {
        $this->pet = $pet;
        $this->className = $className;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.pet-card');
    }
}
