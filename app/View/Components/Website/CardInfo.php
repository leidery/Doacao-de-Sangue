<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardInfo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $subtitle,
        public string $title,
        public string $icon,
        public string $iconAlt,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.card-info');
    }
}
