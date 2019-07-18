<?php

class photos extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos");

    $this->parent->getView("header", $data);
    $this->parent->getView("photos");
    $this->parent->getView("footer");
}




}






?>