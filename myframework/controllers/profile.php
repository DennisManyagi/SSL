<?php

class profile extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);

        //cannot see page unless logged in
        if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){

            header("location:/login?msg=Not Allowed");


        }


}



public function index(){



        //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "profile";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->parent->getView("header", $data);
    $this->parent->getView("profile");
    $this->parent->getView("footer");
}



public function updatePicture(){


       if($_FILES["myfile"]["type"] == "image/jpg" || $_FILES["myfile"]["type"] == "image/jpeg"){


           if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"./assets/".$_FILES["myfile"]["name"])){

               echo "uploaded";

           }else{

               echo "problem uploading";
           }

        }else{


           header("location:/profile?msg=Not Allowed");

       }


}



}






?>