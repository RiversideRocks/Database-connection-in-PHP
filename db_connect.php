<?php

function connect_to_mysql() {
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass="";
	
	$sql = mysqli_connect($dbhost,$dbuser,$dbpass);

	if(! $sql){
	  return 'Could not connect. Reason: '.mysqli_error());
	}else{
		return "Connect successfully";
	}
}

connect_to_mysql()
	
	?>
