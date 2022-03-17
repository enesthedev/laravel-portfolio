<?php

namespace App\View\Components\Web;

use function view;

class Timeline extends \App\Classes\Framework\View\Component\TailwindComponent
{
    /**
     * Timeline lines.
     *
     * @var array
     */
    public array $lines;

    public function __construct(array $lines = [], string $styles = '')
    {
        parent::__construct($styles);

        $this->lines = $lines;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('web.components.timeline');
    }
}
