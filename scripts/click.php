<?php
	//process social media and buy now clicks
	include('db_conf.php');
	include('db_conn.php');
	include('visitorCollector.php');
	$db = new MySQLDatabase();
	$db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$visitor = new VisitorCollector();
	$visitor->collect_data();
	//process which click
	if(isset($table)){
		//social media
		$stmt = $db->link->prepare("INSERT INTO ".$table." (ip_address, platform, browser, mobile, time) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $visitor->ip, $visitor->platform, $visitor->browser, $visitor->mobile, $visitor->timestamp);			
		$stmt->execute();
		$stmt->close();
	} else{
		//buy now
		$stmt = $db->link->prepare("INSERT INTO purchase_clicks (ip_address, platform, browser, mobile, time) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $visitor->ip, $visitor->platform, $visitor->browser, $visitor->mobile, $visitor->timestamp);			
		$stmt->execute();
		$stmt->close();	
	}
	$db->disconnect();
?>





