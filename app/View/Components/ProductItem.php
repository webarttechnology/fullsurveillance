<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductItem extends Component
{
    /**
     * Create a new component instance.
     */


     public $itemList;

    public function __construct($itemList)
    {
        $this->itemList = $itemList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-item');
    }
}
