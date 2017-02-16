<?php

try{

$db = new PDO('mysql:host=localhost;dbname=scienceoutreach;charset=UTF8','root','');

// var_dump($db);


}

catch(EXCEPTION $e){
	echo"error";

}









?>