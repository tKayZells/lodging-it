<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class NavLinkComposer 
{

    public function __construct()
    {
        
    }

    public function compose(View $view)
    {
        $view->with('appLinks', [
            'home',
            'features',
            'rooms',
            'hotels',
            'customers'
        ]);
    }

}