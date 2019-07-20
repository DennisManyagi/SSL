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




public function registerConfirmed(){


    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->parent->getView("header", $data);
    $this->parent->getView("registerConfirmed");
    $this->parent->getView("footer");


}



public function registerAction(){


        $err = array();



        //if blank or empty
        if(empty($_POST["name"]) || $_POST["name"] == ""){

            array_push($err, "Name does not exist");

            //echo "does not exist or blank";

        }else{

            //var_dump(preg_match("/^[a-zA-Z]/", $_POST["name"]));


            //check expression of input for validation
            if(!preg_match("/^[a-zA-Z]*$/", $_POST["name"])){

                array_push($err, "Incorrect input");


            }


            echo "exists";
        }

        //check error count and send message to url
       if(count($err)>0){

           header("location:/register?msg=".implode("&", $err));
       }else{

           header("location:/register/registerConfirmed");
           echo"everything is good";
       }
       // var_dump($_POST["name"]);
       // var_dump($_POST["lastname"]);
       // var_dump($_GET);
      //  var_dump($_REQUEST);


}



}






?>