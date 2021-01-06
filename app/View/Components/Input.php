<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    /**
     * @var string
     */
    public $inputname; 

    /**
     * @var string
     */
    public $inputtype;


    /**
     * @var string
     */
    public $inputtext;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $inputname, $inputtype, $inputtext )
    {
        $this->inputname = $inputname;
        $this->inputtype = $inputtype;
        $this->inputtext = $inputtext;
    }

    public function render()
    {
        return view("components.inputs.input");
    }

}