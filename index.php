<?php 

require 'database.php';

require 'session.php';

require 'cookies.php';

if(logged_in_cookie()){
	$sql="SELECT ID FROM user_calendar_data WHERE ID='".$_COOKIE['CALENDAR_USER_ID']."'";
	if($result = $connection->query($sql)) {
		$row=$result->fetch_array();
		$user_ID=$row['ID'];
		$_SESSION['CALENDAR_USER_ID']=$user_ID;
		include 'account.php';
	}
}
else if(logged_in_session()){
	include 'account.php';
}
else {
    include 'home.php';
}

?>
