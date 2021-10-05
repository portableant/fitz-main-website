<?php

namespace App\View\Components;

use Illuminate\View\Component;

class galleryCard extends Component
{

    public $title;
    public $altTag;
    public $params;
    public $image;
    public $route;
    public $status;
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public function __construct(string $route, array $params, string $title, string $altTag = NULL, array $image = NULL, array $status)
     {
         $this->route = $route;
         $this->params = $params;
         $this->title = $title;
         $this->altTag = $altTag;
         $this->image = $image;
         $this->status = $status;
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery-card');
    }
}