<?php

namespace App\View\Components;

use App\Classes\Framework\View\Component\TailwindComponent;

class Button extends TailwindComponent
{
    /**
     * Button type.
     *
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type = 'submit', string $styles = '')
    {
        parent::__construct($styles);

        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('web.components.button');
    }
}
