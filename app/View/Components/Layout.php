<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Boolean;

class Layout extends Component
{
    /**
     * isAdmin boolean variable.
     *
     * @var bool
     */
    public bool $isAdmin;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $isAdmin = false)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('web.components.layout');
    }
}
