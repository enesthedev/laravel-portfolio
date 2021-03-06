<?php

namespace App\View\Components\Admin;

use App\Classes\Framework\View\Component\TailwindComponent;
use function view;

class Link extends TailwindComponent
{

    /**
     * @var string
     */
    public string $to;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $to = '', string $styles ='')
    {
        parent::__construct($styles);

        $this->to = $to;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.link');
    }
}
