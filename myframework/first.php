
<?php



 class myclass{

public function _construct($number=0){


    echo "my constructor".$number;

}

    public function myMethod($name=""){



    //var_dump($_REQUEST);

    echo "name: ".$_REQUEST["name"];

    }

}



$mynewclass = new myclass(12345);


$mynewclass->myMethod("Joe");





?>




<?


$myvar =["num"=>1,"age"=>"27", "another"=>["1",2]];


//var_dump($myvar);


foreach($myvar as $item){


    var_dump($item);
    echo "---------- <br>";
}

for ($i=0; $i<10; $i++){


   // echo "Hello <br>";


}




    ?>
