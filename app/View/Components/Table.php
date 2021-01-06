<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{


    /**
     * 
     * @var array
     */
    public $headers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $headers )
    {
        $this->headers = $headers;
    }

    public function render()
    {
        return view("components.table.index");
    }

}