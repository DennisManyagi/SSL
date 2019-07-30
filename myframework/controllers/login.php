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


    /*$myfile = fopen("user.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);

    //save data in a session and display inside view
    $_SESSION["data"] = $myfile;*/


    if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){


            $_SESSION["isloggedin"] = "1";
            $_SESSION["useremail"] = $_POST["email"];
            //header("location:/login?msg=Good login");
            header("location:/movies");

        }else{

            $_SESSION["isloggedin"] = "0";
            $_SESSION["useremail"] = "";
            header("location:/login?msg=Invalid User");

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




    public function login(){


        if($_REQUEST["email"] && $_REQUEST["password"]){


            $data = $this->parent->getModel("users")->select(
                "select * from users where email =:email and password = :password",
                array(":email"=>$_REQUEST["email"],":password"=>sha1($_REQUEST["password"])));



            if($data   || $_REQUEST["email"] == "mike@aol.com" && $_REQUEST["password"] == "1234" ){


                $_SESSION["isloggedin"] = 1;
                header("location:/profile");

            }else{

                header("location:/login?msg=".$_REQUEST["email"].$_REQUEST["password"].$data."bad login");
            }


        }

    }


}






?>