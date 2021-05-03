<?php

function logged_in_cookie() {
	if(isset($_COOKIE['CALENDAR_USER_ID']) && !empty($_COOKIE['CALENDAR_USER_ID'])) {
		return true;
	}
	else {
		return false;
	}
}
?>