<?php

namespace App\View\Components\Layouts;

use Illuminate\Support\HtmlString;
use Illuminate\View\Component;
use function view;

class Auth extends Component
{

    /**
     * Additional Page scripts.
     *
     * @var HtmlString
     */
    public HtmlString $scripts;

    /**
     * Additional Page styles.
     *
     * @var HtmlString
     */
    public HtmlString $styles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HtmlString $styles = new HtmlString(), HtmlString $scripts = new HtmlString())
    {
        $this->styles = $styles;
        $this->scripts = $scripts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.layouts.auth');
    }
}
