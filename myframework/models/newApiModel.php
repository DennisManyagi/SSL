<?php


class newApiModel{



    public function __construct($parent){


        $this->db = $parent->db;



    }


    public function googleBooks($term=''){

        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("eb1455b205d04bdd9cab9fc27de158fe");

        $service = new Google_Service_Book($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;



    }

}






?>