<?php
	//return codes
	//0:ok, 1:not ok
	require_once "uq/auth.php";

	include('db_conf.php');
	include('db_conn.php');
	$db = new MySQLDatabase();
	$db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$unique = 0;
	$name =  mysqli_real_escape_string($db->link, $_POST["name"]);
	$email = mysqli_real_escape_string($db->link, $_POST["email"]);
	$comment = $_POST["comment"];
	$uname_sso = auth_get_payload()["user"];
	$name_sso = auth_get_payload()["name"];
	$email_sso = auth_get_payload()["email"];
	$timestamp = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	  //echo("$email is not a valid email address");
	  $db->close();
	  echo 1;
	}
	
	
	//record comment
	$stmt = $db->link->prepare("INSERT INTO comments (name_input, name_sso, user_name_sso, email_input, email_sso, time, comment, ip_address) VALUES (?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss", $name, $name_sso, $uname_sso, $email, $email_sso, $timestamp, $comment, $ip);
	$stmt->execute();
	$stmt->close();	
	//echo 'comment saved';		
	$db->disconnect();
	echo 0;
	
?>