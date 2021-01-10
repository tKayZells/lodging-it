<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputTextarea extends Component
{

    /**
     * @var string
     */
    public $inputname; 


    /**
     * @var string
     */
    public $inputtext;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $inputname, $inputtext )
    {
        $this->inputname = $inputname;
        $this->inputtext = $inputtext;
    }

    public function render()
    {
        return view("components.inputs.textarea");
    }

}