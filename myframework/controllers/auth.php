<?php

class auth extends AppController{


    
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
    $data["pagename"] = "crud";
    $data["navigation"] = $this->parent->getNav();

    $sql = "select * from fruit_table";
    $data["fruit"] = $this->parent->getModel("fruit")->select($sql);
    //var_dump($this->parent->getModel("fruit")->select($sql));


    $this->parent->getView("header", $data);
    $this->parent->getView("crud", $data);
    $this->parent->getView("footer");
}



public function login(){


        if($_REQUEST["username"] && $_REQUEST["password"]){


            $data = $this->parent->getModel("users")->select(
                "select * from users where email =:email and password = :password",
                array(":email"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"])));

                if($data){


                    $_SESSION["isloggedin"] = 1;
                    header("location:/profile");
                }else{

                    header("location:/welcome?msg= bad login");
                }


        }

}


}






?>