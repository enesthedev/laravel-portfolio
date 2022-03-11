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
     * Page description.
     *
     * @var string
     */
    public string $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $description = '', bool $isAdmin = false)
    {
        $this->description = $description;
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
