<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Select extends Component
{

    /**
     * Style Variants of select
     *
     * @var array
     */
    public array $variants;

    /**
     * Style variant of select
     *
     * @param string $styles
     */
    public string $variant;


    /**
     * Select style classes.
     *
     * @var string
     */
    public string $selectStyles;

    /**
     * Select label style classes.
     *
     * @var string
     */
    public string $labelStyles;

    /**
     * Select options array.
     *
     * @var array
     */
    public array $options;

    /**
     * Unique id for label - input relation.
     *
     * @var string
     */
    public string $selectDomId;

    /**
     * Name of select for form submit.
     *
     * @var string
     */
    public string $selectFormName;

    /**
     * Text string of select.
     *
     * @var string
     */
    public string $selectLabelText;

    /**
     * <selected> option of select.
     *
     * @var string
     */
    public string $selectedOption;

    /**
     * Language prefix for translateable strings.
     *
     * @var string
     */
    public string $languagePrefix;

    /**
     * Create a new component instance.
     *
     * @param array $options
     * @param string $variant
     * @param string $labelStyles
     * @param string $selectStyles
     * @param string $selectLabelText
     * @param string $selectDomId
     * @param string $selectFormName
     * @param array $variants
     * @param string $selectedOption
     * @param string $languagePrefix
     */
    public function __construct(string $selectLabelText, string $selectDomId, string $selectFormName, string $languagePrefix = '', string $selectedOption = '', array $options = [], string $variant = 'light', string $labelStyles = '', string $selectStyles = '', array $variants = ['dark' => 'text-white', 'light' => 'text-black' ])
    {
        $this->selectDomId = $selectDomId;
        $this->selectFormName = $selectFormName;
        $this->selectLabelText = $selectLabelText;
        $this->selectStyles = $selectStyles;

        $this->selectedOption = $selectedOption;

        $this->labelStyles = $labelStyles;

        $this->variant = $variant;
        $this->variants = $variants;

        $this->languagePrefix = $languagePrefix;

        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.select');
    }
}
