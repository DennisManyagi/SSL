<?php

class register extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register");

    $this->parent->getView("header", $data);
    $this->parent->getView("registerForm");
    $this->parent->getView("footer");
}


public function registerAction(){

        //if blank or empty
        if(empty($_POST["name"]) || $_POST["name"] == ""){

            echo "does not exist or blank";

        }else{

            //var_dump(preg_match("/^[a-zA-Z]/", $_POST["name"]));


            if(!preg_match("/^[a-zA-Z]*$/", $_POST["name"])){

                echo"incorrect input";


            }else{

                echo "valid input";
            }


            echo "exists";
        }


       // var_dump($_POST["name"]);
       // var_dump($_POST["lastname"]);
       // var_dump($_GET);
      //  var_dump($_REQUEST);


}



}






?>