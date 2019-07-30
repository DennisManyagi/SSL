<?php

class crud extends AppController{


    
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

public function addForm(){


    //echo"hello world yes!";

    //$data = array("pagename"=>"about");

    $data = array();
    $data["pagename"] = "crud";
    $data["navigation"] = $this->parent->getNav();


    $this->parent->getView("header", $data);
    $this->parent->getView("addForm", $data);
    $this->parent->getView("footer");

}

public function addAction(){

$_REQUEST["name"];

$sql = "insert into fruit_table (name) values (:name)";
    $data["fruit"] = $this->parent->getModel("fruit")->insert($sql, array(":name"=>$_REQUEST["name"]));
    //var_dump($this->parent->getModel("fruit")->select($sql));

    header("location:/crud");

}


    public function deleteAction(){

        //$_REQUEST["name"];

        $sql = "delete from fruit_table where id = (:name)";


        $data["users"] = $this->parent->getModel("users")->delete($sql, array(":name"=>$_REQUEST["name"]));
        //var_dump($this->parent->getModel("fruit")->select($sql));

        header("location:/profile");

    }

    public function updateAction(){

        $_REQUEST["name"];

        $sql = "update fruit_table set (name) values (:name) where id = (:id)";


        $data["users"] = $this->parent->getModel("users")->update($sql, array(":name"=>$_REQUEST["name"]));
        //var_dump($this->parent->getModel("fruit")->select($sql));

        header("location:/profile");

    }



}






?>