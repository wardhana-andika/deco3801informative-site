<?php
	include('db_conf.php');
	include('db_conn.php');
	$db = new MySQLDatabase();
    $db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$stmt = $db->link->prepare('SELECT comment, name_input FROM comments ORDER BY RAND() LIMIT 3');
	$stmt->execute();
	$stmt->store_result();
	$comment_one = "";
	$comment_two = "";
	$comment_three = "";
	$i = 0;
	$temp;
	$temp2;

	if ($stmt->num_rows > 0) {
		mysqli_stmt_bind_result($stmt, $temp, $temp2);
		while(mysqli_stmt_fetch($stmt))
		{
			if($i == 0){
				$comment_one = '"'.$temp.'"'.'-'.$temp2;
			} else if($i == 1){
				$comment_two = '"'.$temp.'"'.'-'.$temp2;
			} else if($i == 2){
				$comment_three = '"'.$temp.'"'.'-'.$temp2;
			}
			$i++;
		}
	} 
	
	echo $comment_one;
	echo "<br /><br />";
	echo $comment_two;
	echo "<br /><br />";
	echo $comment_three;
	

	$stmt->close();	
	$db->close();
?>