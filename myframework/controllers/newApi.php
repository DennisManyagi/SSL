<?php

class newApi extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}


public function index(){




    $data = array();
    $data["pagename"] = "newApi";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

    $this->getView("header", $data);

    //$data =$this->parent->getModel("newApiModel")->googleBooks("Henry David Thoreau");

    $this->getView("newApi", $data);

    $this->getView("footer");
}


public function showApi(){




    $data = array();
    $data["pagename"] = "newApi";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

        $this->getView("header", $data);

        $data =$this->parent->getModel("newApiModel")->googleBooks("Henry David Thoreau");

        $this->getView("newApi", $data);

        $this->getView("footer");

}





}






?>