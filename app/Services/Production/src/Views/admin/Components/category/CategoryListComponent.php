<?php

namespace Production\Views\admin\Components\category;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function view;

class CategoryListComponent extends Component
{

    public function __construct(public $categories)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.category.category-list-component');
    }

}
