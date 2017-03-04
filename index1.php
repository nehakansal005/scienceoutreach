<?php
include('connect.php');
	 

	
		if($_POST['key'] == "postk") {
	


$result = $data->prepare("SELECT * FROM post_table");
  
    
	$result->execute();
	$rowcount=$result->rowCount();
   
  

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

	
    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';

        
		
		
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));

		
		
		
    }}

	

    	if($_POST['key'] == "mathematics") {

$result = $data->prepare("SELECT * FROM post_table WHERE category=:type");
  
    $result->bindValue('type','mathematics');
	$result->execute();
	$rowcount=$result->rowCount();
   
  

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

	
    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';

        
		
		
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));

		
		
		
    }}


?>