<?php

class about extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){



        echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/home", "about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("body");
    $this->parent->getView("footer");
}




}






?>