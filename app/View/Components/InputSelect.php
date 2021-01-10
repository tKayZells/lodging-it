<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSelect extends Component
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
     * @var array
     */
    public $values;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $inputname, $inputtext, $values )
    {
        $this->inputname = $inputname;
        $this->inputtext = $inputtext;
        $this->values = $values;
    }

    public function render()
    {
        return view("components.inputs.select");
    }

}