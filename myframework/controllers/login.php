<?php

class login extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "login";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->parent->getView("header", $data);
    $this->parent->getView("loginForms");
    $this->parent->getView("footer");
}



public function recv(){

        if($_POST["type"] == "form"){

            $this->recvForm();

    }else{

            $this->recvAjax();
        }
}


public function recvForm(){

        if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){



            $_SESSION["isloggedin"] = "1";
            $_SESSION["useremail"] = $_POST["email"];
            //header("location:/login?msg=Good login");

        }else{

            $_SESSION["isloggedin"] = "0";
            $_SESSION["useremail"] = "";
            //header("location:/login?msg=Invalid User");

        }

        //var_dump($_SESSION);


}


public function recvAjax(){


    if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){

        echo "good";

    }else{

        echo "bad";

    }

}

}






?>