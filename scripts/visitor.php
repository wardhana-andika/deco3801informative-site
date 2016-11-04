<?php
	//Records hits, both unique and not
	//uniqueness based on ip address
	include('db_conf.php');
	include('db_conn.php');
	include('visitorCollector.php');
	$db = new MySQLDatabase();
	$db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$unique = 0;
	$visitor = new VisitorCollector();
	$visitor->collect_data();
	//check if current visit is unique
	$stmt = $db->link->prepare("SELECT ip_address FROM unique_hits WHERE (ip_address = ?)");
	$stmt->bind_param("s", $visitor->ip);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows < 1){
		//echo "unique!";
		$unique = 1;
	} 
	$stmt->close();
	//record all hits 
	$stmt = $db->link->prepare("INSERT INTO hits (ip_address, platform, browser, mobile, time) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $visitor->ip, $visitor->platform, $visitor->browser, $visitor->mobile, $visitor->timestamp);
	//UNCOMMENT BELOW TO ENABLE SAVE TO DB
	$stmt->execute();
	$stmt->close();
	if ($unique == 1){
		//record unique hits
		$stmt = $db->link->prepare("INSERT INTO unique_hits (ip_address, platform, browser, mobile, time) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $visitor->ip, $visitor->platform, $visitor->browser, $visitor->mobile, $visitor->timestamp);
		//UNCOMMENT BELOW TO ENABLE SAVE TO DB
		$stmt->execute();
		$stmt->close();	
	}
	$db->disconnect();
?>
