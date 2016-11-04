<?php
	//return codes
	//0:ok, 1:not ok, 2:email already registered
	include('db_conf.php');
	include('db_conn.php');
	$db = new MySQLDatabase();
	$db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$unique = 0;
	$email = $_POST["email"];
	$email = mysqli_real_escape_string($db->link, $email);
	$timestamp = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $email;
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	  //echo("$email is not a valid email address");
	  $db->close();
	  echo 1;
	}
	
	//check if email is already registered
	$stmt = $db->link->prepare("SELECT email FROM emails WHERE (email = ?)");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows < 1){
		$unique = 1;
		//echo 'email is unique';
	} 
	$stmt->close();
	
	if ($unique == 1){
		//record new email
		$stmt = $db->link->prepare("INSERT INTO emails (email, time, ip_address) VALUES (?,?,?)");
		$stmt->bind_param("sss", $email, $timestamp, $ip);
		$stmt->execute();
		$stmt->close();	
		//echo 'email is saved';		
		$db->disconnect();
		echo 0;
	} else{
		//echo 'email not unique';
		$db->disconnect();
		echo 2;
	}
	
?>