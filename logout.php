<?php

require 'session.php';

session_destroy();

setcookie('CALENDAR_USER_ID',$user_ID,time()-3600,"/");

header('Location: index.php');
?>