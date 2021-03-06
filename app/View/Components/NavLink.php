<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{


    /**
     * @var string
     */
    public $isRoute; 


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $isRoute )
    {
        $this->isRoute = $isRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navigation.nav-link');
    }
}
