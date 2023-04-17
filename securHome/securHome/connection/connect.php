<?php
ob_start();
session_start();
try{
	$db=new PDO("mysql:host=localhost;dbname=securhome","root","");
	
}
catch(Exception $e){
	echo "Error occured: ".$e->getMessage();
}

?>