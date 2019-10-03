<?php

class Controller{

    public $viewData = [];

    function render($filename)
    {
        //extrcts viewData array into single variables for view
        extract($this->viewData);
        
        ob_start();
        require(ROOT . 'views/' . $filename . '.php');
        $output = ob_get_clean();
        echo $output;
    }
    
}