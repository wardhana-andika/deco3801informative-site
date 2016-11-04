<?php
	session_start();
	require_once "uq/auth.php";
	auth_require();
	$_SESSION['user'] = auth_get_payload()["user"];
	
	
	if(!isset($_SESSION['auth'])){
		include('db_conf.php');
		include('db_conn.php');
		$db = new MySQLDatabase();
		$db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		$stmt = $db->link->prepare("SELECT user_id FROM users WHERE (user_id = ?)");
		$stmt->bind_param("s",$_SESSION['user']);
		$stmt->execute();
		$stmt->store_result();
		
		if($stmt->num_rows > 0){
			$_SESSION['auth'] = true;
			//header('Location: ');
			$name = auth_get_payload()["name"];
		} else{
			//redirects to somewhere and say you are not authorized
			header("Location: index.php");
		}
		
	}
	
	
?>