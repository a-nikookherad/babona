<?php

namespace Production\Views\admin\Components\category;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function view;

class CategoryViewComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-view-component');
    }
}