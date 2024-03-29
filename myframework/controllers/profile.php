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




    $data = array();
    $data["pagename"] = "profile";
    $data["navigation"] = $this->parent->getNav();

    $sql = "select * from users";
    $data["users"] = $this->parent->getModel("users")->select($sql);
    //var_dump($this->parent->getModel("fruit")->select($sql));


    $this->parent->getView("header", $data);
    $this->parent->getView("profile");
    $this->parent->getView("users", $data);
    $this->parent->getView("footer");
}

    public function addUser(){


        //echo"hello world yes!";

        //$data = array("pagename"=>"about");

        $data = array();
        $data["pagename"] = "addUser";
        $data["navigation"] = $this->parent->getNav();


        $this->parent->getView("header", $data);
        $this->parent->getView("addUser", $data);
        $this->parent->getView("footer");

    }


    public function addAction(){

        $_REQUEST["name"];

        $sql = "insert into users (email) values (:name)";


        $data["users"] = $this->parent->getModel("users")->insert($sql, array(":name"=>$_REQUEST["name"]));
        //var_dump($this->parent->getModel("fruit")->select($sql));

        header("location:/profile");

    }

    public function deleteAction(){

        //$_REQUEST["name"];

        $sql = "delete from users where id = (:name)";


        $data["users"] = $this->parent->getModel("users")->delete($sql, array(":name"=>$_REQUEST["name"]));
        //var_dump($this->parent->getModel("fruit")->select($sql));

        header("location:/profile");

    }

    public function updateAction(){


        $data = array();
        $data["pagename"] = "updateView";
        $data["navigation"] = $this->parent->getNav();


        $this->parent->getView("header", $data);
        $this->parent->getView("updateView", $data);
        $this->parent->getView("footer");


        $_REQUEST["name"];

        $sql = "insert into users (email) values (:name)";


        $data["users"] = $this->parent->getModel("users")->update($sql, array(":name"=>$_REQUEST["name"]));
        //var_dump($this->parent->getModel("fruit")->select($sql));



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