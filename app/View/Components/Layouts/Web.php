<?php

namespace App\View\Components\Layouts;

use Illuminate\Support\HtmlString;
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
     * Additional page styles.
     *
     * @var HtmlString
     */
    public HtmlString $styles;

    /**
     * Additional page scripts.
     *
     * @var HtmlString
     */
    public HtmlString $scripts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HtmlString $description = new HtmlString(), HtmlString $scripts = new HtmlString(), HtmlString $styles = new HtmlString())
    {
        $this->description = $description;
        $this->scripts = $scripts;
        $this->styles = $styles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('web.layouts.layout');
    }
}
