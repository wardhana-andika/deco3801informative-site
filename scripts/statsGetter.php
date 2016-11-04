<?php
	class StatsGetter{
		private $db;
		private $stmt;
		private $temp1;
		private $temp2;
		public $fb_count;
		public $tw_count;
		public $in_count;
		public $buy_count;
		public $hits_count;
		public $unique_hits_count;
		public $json_ip;
		public $json_platform;
		public $json_browser;
		public $json_mobile;
		public $json_hits_by_hour;
		public $json_comments_by_hour;
		public $json_signups_by_hour;
		public $email_count;
		public $comment_count;
		
				
		public function get_everything()
		{
			include('db_conf.php');
			include('db_conn.php');
			$this->db = new MySQLDatabase();
			$this->db->connect(DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			$this->fb_count = $this->get_click_count("fb");
			$this->tw_count = $this->get_click_count("tw");
			$this->in_count = $this->get_click_count("in");
			$this->buy_count = $this->get_click_count("buy");
			$this->hits_count = $this->get_click_count("hits");
			$this->unique_hits_count = $this->get_click_count("unique");
			$this->email_count = $this->get_click_count("email");
			$this->comment_count = $this->get_click_count("com");
			$this->get_hits_by_ip();
			$this->get_hits_by_platform();
			$this->get_hits_by_browser();
			$this->get_hits_by_mobile();
			$this->get_hits_by_hour();
			$this->get_comments_by_hour();
			$this->get_signups_by_hour();
			$this->db->disconnect();
		}
		
		private function get_signups_by_hour(){
			$this->stmt = $this->db->link->prepare('SELECT HOUR(time), COUNT(id) FROM emails GROUP BY HOUR(time)');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_signups_by_hour = '"signups_by_hour":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					//time correction, DB time data at UTC, correcting to UTC+10
					$this->temp1 = $this->temp1 + 10;
					if($this->temp1 > 23){
						$this->temp1 = $this->temp1 - 24;
					}
					
					$this->json_signups_by_hour .= '"'.$this->temp1.'":"'.$this->temp2.'",';
				}
				$this->json_signups_by_hour = rtrim($this->json_signups_by_hour, ',');
				$this->json_signups_by_hour .= '}]';
			} 
			
			$this->stmt->close();	
			
		}
		
		private function get_comments_by_hour(){
			$this->stmt = $this->db->link->prepare('SELECT HOUR(time), COUNT(id) FROM comments GROUP BY HOUR(time)');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_comments_by_hour = '"comments_by_hour":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					//time correction, DB time data at UTC, correcting to UTC+10
					$this->temp1 = $this->temp1 + 10;
					if($this->temp1 > 23){
						$this->temp1 = $this->temp1 - 24;
					}
					
					$this->json_comments_by_hour .= '"'.$this->temp1.'":"'.$this->temp2.'",';
				}
				$this->json_comments_by_hour = rtrim($this->json_comments_by_hour, ',');
				$this->json_comments_by_hour .= '}]';
			} 
			
			$this->stmt->close();	
			
		}
		
		private function get_hits_by_hour(){
			$this->stmt = $this->db->link->prepare('SELECT HOUR(time), COUNT(id) FROM hits GROUP BY HOUR(time)');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_hits_by_hour = '"hits_by_hour":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					//time correction, DB time data at UTC, correcting to UTC+10
					$this->temp1 = $this->temp1 + 10;
					if($this->temp1 > 23){
						$this->temp1 = $this->temp1 - 24;
					}
					
					$this->json_hits_by_hour .= '"'.$this->temp1.'":"'.$this->temp2.'",';
				}
				$this->json_hits_by_hour = rtrim($this->json_hits_by_hour, ',');
				$this->json_hits_by_hour .= '}]';
			} 
			
			$this->stmt->close();	
			
		}
		
		private function get_hits_by_ip(){
			$this->stmt = $this->db->link->prepare('SELECT COUNT(id), ip_address FROM hits GROUP BY ip_address ORDER BY COUNT(id) DESC');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_ip = '"hits_by_ip":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					$this->json_ip .= '"'.$this->temp2.'":"'.$this->temp1.'",';
				}
				$this->json_ip = rtrim($this->json_ip, ',');
				$this->json_ip .= '}]';
			} 
			
			/* example output format
			"visits":[
				{
				"reg":"12",
				"unique":"5"
				}
			]
			*/
			
			$this->stmt->close();	
		}
		
		private function get_hits_by_platform(){
			$this->stmt = $this->db->link->prepare('SELECT COUNT(id), platform FROM hits GROUP BY platform');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_platform = '"hits_by_platform":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					$this->json_platform .= '"'.$this->temp2.'":"'.$this->temp1.'",';
				}
				$this->json_platform = rtrim($this->json_platform, ',');
				$this->json_platform .= '}]';
			} 
			
			$this->stmt->close();	
		}
		
		private function get_hits_by_browser(){
			$this->stmt = $this->db->link->prepare('SELECT COUNT(id), browser FROM hits GROUP BY browser');
			$this->stmt->execute();
			$this->stmt->store_result();
			
			$this->json_browser = '"hits_by_browser":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					$this->json_browser .= '"'.$this->temp2.'":"'.$this->temp1.'",';
				}
				$this->json_browser = rtrim($this->json_browser, ',');
				$this->json_browser .= '}]';
			} 
			
			$this->stmt->close();	
		}
		
		private function get_hits_by_mobile(){
			$this->stmt = $this->db->link->prepare('SELECT COUNT(id), mobile FROM hits GROUP BY mobile');
			$this->stmt->execute();
			$this->stmt->store_result();
			$this->json_mobile = '"hits_by_mobile":[{';
			
			if ($this->stmt->num_rows > 0) {
				mysqli_stmt_bind_result($this->stmt, $this->temp1, $this->temp2);
				while(mysqli_stmt_fetch($this->stmt))
				{
					$this->json_mobile .= '"'.$this->temp2.'":"'.$this->temp1.'",';
				}
				$this->json_mobile = rtrim($this->json_mobile, ',');
				$this->json_mobile .= '}]';
			} 
			
			$this->stmt->close();	
		}
		
		//also gets visit counts
		private function get_click_count($table)
		{
			if($table ==  "fb"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM facebook_clicks");
			} else if($table == "tw"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM twitter_clicks");
			} else if($table == "in"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM instagram_clicks");
			} else if($table == "buy"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM purchase_clicks");
			} else if($table == "hits"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM hits");
			} else if($table == "unique"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM unique_hits");
			} else if($table == "email"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM emails");
			} else if($table == "com"){
				$this->stmt = $this->db->link->prepare("SELECT * FROM comments");
			} else{
				$count = -2;
			}
			$this->stmt->execute();
			$this->stmt->store_result();
			$val = $this->stmt->num_rows;
			$this->stmt->close();	
			return $val;
		}
	}

?>