<?php

class logout extends AppController{


    
    public function __construct($parent){


        $_SESSION["isloggedin"] = "0";
        session_destroy();

        header("location:login");

        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->parent->getView("header", $data);
    $this->parent->getView("welcome");
    $this->parent->getView("footer");
}




}






?>