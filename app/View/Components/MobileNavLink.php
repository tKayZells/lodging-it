<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MobileNavLink extends Component
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

    public function render()
    {
        return view("components.navigation.mobile-nav-link");
    }

}