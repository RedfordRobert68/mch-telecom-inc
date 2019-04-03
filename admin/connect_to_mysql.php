<?php
	header('Content-type: text/plain');
    $dbPassword = "Rockon0123!";
	$dbUserName = "BobertoVicente";
	$dbServer = "localhost";
	$dbName = "mch_telecom_inc";
	
	//Connection object variable
	//The initial mysqli class can take an initial 6 parameters
	//mysqli::__construct([string $host][,string $username][,string $password][,string $dbname][,string $port][,string $socket])
	$connection = new mysqli ($dbServer, $dbUserName, $dbPassword, $dbName);
	//print_r("Woohoo all is good!");
	
	if($connection->connect_errno)
	{
		exit("Database Connection Failed. Reason: ".$connection->connect_error);
	}else{
        echo "Yay! You connected.";
    }

	//void exit([string $exitReason])
?>