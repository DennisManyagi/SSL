<?php


class apiModel{



    public function __construct($parent){


        $this->db = $parent->db;



    }


    public function googleBooks($term=''){

        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyAU2jOA1Xn8nG_TX-2zs23sRXwvxa6B-5s");

        $service = new Google_Service_Book($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;



    }



}






?>