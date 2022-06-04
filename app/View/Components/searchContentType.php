<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

use App\Models\SearchContentTypes;

class searchContentType extends Component
{
    public string $type;
    public string $display_name;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param null $display_name
     */
    public function __construct($type, $display_name = NULL)
    {
        $this->type = $type;
        if($display_name === '') {
            $this->display_name = $this->getDisplayName($type);
        } else {
            $this->display_name = $type;
        }
    }

    public function getDisplayName(string $type): string
    {
        return SearchContentTypes::find($type)['display_name'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.search-content-type');
    }
}
