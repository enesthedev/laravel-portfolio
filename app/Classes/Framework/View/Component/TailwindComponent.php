<?php

namespace App\Classes\Framework\View\Component;

abstract class TailwindComponent extends \Illuminate\View\Component
{
    /**
     * @var string
     */
    public string $styles;

    /**
     * @param $styles
     */
    public function __construct($styles)
    {
        $this->styles = $styles;
    }
}
