<?php


namespace App\View\Components;

use Illuminate\View\Component;

use JetBrains\PhpStorm\Pure;

class searchType extends Component
{
    public string $name;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    #[Pure] public function __construct($name)
    {
        $this->name = $name;
        $this->title = $this->titleString();
    }

    public function titleString(): string
    {
        return 'content';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-type');
    }
}
