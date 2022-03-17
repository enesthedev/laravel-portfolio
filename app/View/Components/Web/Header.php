<?php

namespace App\View\Components\Web;

use App\Classes\Framework\View\Component\TailwindComponent;
use function view;

class Header extends TailwindComponent
{

    /**
     * List of menu items.
     *
     * @var array
     */
    public array $routes;

    /**
     * Description of application.
     *
     * @var string
     */
    public string $description;

    /**
     * Title of header.
     *
     * @var string|null
     */
    public string $title;

    /**
     * Avatar path of header;
     *
     * @var string
     */
    public string $avatar;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = '', string $description = '', array $routes = [], string $avatar = '', string $styles = '')
    {
        parent::__construct($styles);

        $this->title = $title;
        $this->description = $description;
        $this->avatar = $avatar;
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
