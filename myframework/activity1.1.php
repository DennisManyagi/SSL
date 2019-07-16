<?php

//1
 class human{




     public function eat(){


         echo "yum!";

     }

 }


$man = new human();

$man->eat();


//2
$name = "Dennis";

$age = 28;

$person = [$name,$age];

$personTwo = array($name=>1,$age=>2);

$personThree = array($name=>1);

echo "$name $age";

echo '$name $age';

echo "$person[0] $person[1]";

echo "$personTwo[0] $personTwo[2]";

$age = null;

echo "$age";

unset($name);

echo "$name";

//3

function grade($a){


    if ($a > 90 & $a < 100) {

        echo "You got ".$a ." your grade is an A. ";


    }elseif($a<89 & $a>80){

        echo "You got ".$a ." your grade is an B. ";

    }elseif($a<79 & $a>70){

        echo "You got ".$a ." your grade is an C. ";

    }elseif($a<69 & $a>60){

        echo "You got ".$a ." your grade is an D. ";

    }elseif($a<60) {

        echo "You got ".$a ." your grade is an F. ";


    }
}

grade(94);
grade(54);
grade(89.9);
grade(60.01);
grade(102.1);


//4

$colors = [0=>"Red",1=>"Pink",2=>"Blue",3=>"Baby Blue",4=>"Green",5=>"Lime",6=>"Black",7=>"Purple",8=>"White",9=>"Grey"];

foreach($colors as $item =>$value){


    echo "<span style='color:$value'>$value</span>";
    echo "<br>";
}


?>


<?php

?>
