<?php

class connection {
	
	function connect()
	{
		try {
			$pdo = new PDO("mysql:host=sql7.freemysqlhosting.net;
			dbname=sql7370192", 'sql7370192', 'r4KTdPWWac');
			//set PDO error mode to exception
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $pdo;
			
		} catch (PDOException $e) {
			echo "Connection Failed: " . $e->getMessage();
		}
	}
}




