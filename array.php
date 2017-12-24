<?php

//$data = [10, 20, 30, 'Moshiur', 'Mirpur-10', 'Bangkadesh'];
//echo $data[4];

//$data = [
//    'name' => 'Maisha',
//    'city' => 'Mirpur-10',
//    'country' => 'Bangladesh',
//    'phone' => '017554488',
//    'gender' => 'Male'
//];

//echo $data['name'];
//
//foreach ($data as $value){
//    echo $value.'<br/>';
//}


//echo '<pre>';
//print_r($data);
//echo '</pre>';

//echo '<pre>';
//var_dump($data);
//echo '</pre>';
//
//$data[0][0] = 10;
//$data[0][1] = 20;
//$data[0][2] = 30;
//
//$data[1][0] = 40;
//$data[1][1] = 50;
//$data[1][2] = 60;
//
//$data[2][0] = 70;
//$data[2][1] = 80;
//$data[2][2] = 90;
//
//$data[3][0] = 100;
//$data[3][1] = 110;
//$data[3][2] = 120;
//
//foreach ($data as $value){
//    echo $value[0].' '.$value[1].' '.$value[2].'<br>';
//}
//


// function return korle echo korte hbe.jodi show korte chai.

//
//function demo($firstName=null,$lastName=null){
//
//    $fullName = $firstName .' ' .$lastName;
//    return $fullName;
//}
//echo '<br>....................................<br>';
//
//$res = demo('Sakib','khan');
//echo 'Full Name is:'.$res;
//echo '<br>....................................<br>';
// $res =demo('Salman');
//echo $res;
//echo '<br>....................................<br>';
//$res = demo('Amir','khan');
//echo '<h3>'.$res.'</h3>';
//

//oop:::syntax
//class
//object
//property
//method
// Encapsolation
//Inheritance
//Abstract
//manespace
//polymorphism

//class ::

class Demo {

  public $name ='Tasdiq Babun'; //property
    public $city ='Mohammad Pur';

    function add(){ //method
        echo 'In Add';
    }
    function hello(){
        echo 'In hello';
    }

}

$demo = new Demo; //class er object er nam small letter hbe.

$demo->hello();
$demo->add();
echo $demo ->name;



?>

