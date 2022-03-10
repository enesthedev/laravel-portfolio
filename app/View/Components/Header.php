<?php

namespace App\View\Components;

use App\Classes\Framework\View\Component\TailwindComponent;

class Header extends TailwindComponent
{

    /**
     * List of menu items.
     *
     * @var array
     */
    public array $routes;

    /**
     * Title of header.
     *
     * @var string|null
     */
    public string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = null, array $routes = [], string $styles = '')
    {
        parent::__construct($styles);

        $this->title = $title;
        $this->routes = $routes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('web.components.header');
    }
}
