<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BloodbankCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $name,
        public $description,
        public $img
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.bloodbank-card');
    }
}
