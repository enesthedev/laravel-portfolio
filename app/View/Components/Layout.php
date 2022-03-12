<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class Layout extends Component
{

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
    public function __construct(string $description = '')
    {
        $this->description = $description;
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
