<?php

class xs_action_instance extends xs_Action {

    public $metadata = array (
        'template' => 'generic_data'
    ) ;
    
    // GET collections of vocabs

    function GET () {

        // Create a shortcut for the global $breakdown
        $b = $this->glob->breakdown;

        $this->glob->stack->add ( 'xs_data', $b->__getArray() ) ;

    }

}