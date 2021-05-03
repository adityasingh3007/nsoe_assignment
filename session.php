<?php
ob_start();
session_start();

function logged_in_session() {
	if(isset($_SESSION['CALENDAR_USER_ID']) && !empty($_SESSION['CALENDAR_USER_ID'])) {
		return true;
	}
	else {
		return false;
	}
}

function grab_data($head) {
	require 'database.php';
	$sql = "SELECT $head FROM user_calendar_data WHERE ID='".$_SESSION['CALENDAR_USER_ID']."'";
	if($result = $connection->query($sql)) {
		$row=$result->fetch_array();
		if($query_output=$row[$head]) {
			return $query_output;
		}
	}
}

?>