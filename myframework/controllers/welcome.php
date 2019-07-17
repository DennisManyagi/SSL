<?php

class welcome extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function hello(){



        echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/home", "about"=>"/about");

    $this->parent->getView("header");
    $this->parent->getView("body");
    $this->parent->getView("footer");
}




}






?>