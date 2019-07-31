<?php

class api extends AppController{


    
    public function __construct($parent){


        $this->parent=$parent;

        //var_dump($this->parent);


}

public function showApi(){




    $data = array();
    $data["pagename"] = "api";
    $data["navigation"] = array("home"=>"/welcome", "about"=>"/about", "photos"=>"/photos", "register"=>"/register", "login"=>"/login");

        $this->getView("header", $data);

        $data =$this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");

        $this->getView("api", $data);

        $this->getView("footer");

}





}






?>