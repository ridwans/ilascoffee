<?php

if (eregi("function.php",$_SERVER['PHP_SELF'])) 
{
	Header("Location:http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/cargoonline/");
	die();
}

	include_once("_config/config.php");
	include_once("_config/db.php");
	
	session_start();
	
	function db_connect()
	{
		GLOBAL $db;
		$conn = mysql_connect($db["hostname"], $db["username"], $db["password"]) or die ('Connection DB failed!');
		if(!$conn)
		{
			echo "Failed to connect to MySQL: ";
		}
		
		//to select the targeted database
		mysql_select_db($db["database"], $conn) or die(mysql_error());
		
		return $conn;
	}
	
	function db_disconnect($conn='')
	{
		mysql_close($conn);
	}
	
	function cart_num()
	{
		db_connect();
		$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : "";
		$num = 0;
		if($uid != "")
		{
			$sql = "SELECT SUM(qty) as num FROM carts WHERE user_id='".$uid."'";
			$result = mysql_query($sql);
			$rec = mysql_fetch_array($result);
			$num = ($rec['num']) ? $rec['num'] : 0;
		}
		return $num;
	}
?>