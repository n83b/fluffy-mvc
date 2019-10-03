<?php

class poopController extends Controller{

    function __construct(){
    }

    function default(){
        require(ROOT . 'models/poop.php');
        $poop = new Poop();
        $data = $poop->showPoop(1);
        $this->viewData = $data;
        $this->render('poop');
    }

    function page(int $id){
        $id = ($id) ? $id : 1;
        require(ROOT . 'models/poop.php');
        $poop = new Poop();
        $data = $poop->showPoop($id);
        $this->viewData = $data;
        $this->render('poop');
    }
}