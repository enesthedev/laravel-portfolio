<?php

namespace App\View\Components\Admin;

class Container extends \App\Classes\Framework\View\Component\TailwindComponent
{

    /**
     * Create a new component instance.
     *
     * @param string $styles
     */
    public function __construct(string $styles = '')
    {
        parent::__construct($styles);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin.components.container');
    }
}
