<?php

class movies extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);

        //cannot see page unless logged in
        if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){

            header("location:/login?msg=Not Allowed");


            //display saved data in file
        }else if(@$_SESSION["data"]){

            echo $_SESSION["data"];


        }



}



public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "movies";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->parent->getView("header", $data);
    $this->parent->getView("film");
    $this->parent->getView("footer");
}




}






?>