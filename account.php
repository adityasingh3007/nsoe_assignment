<?php
require 'database.php';
$user_name = grab_data('Name');
$user_username = grab_data('Username');
?>
<head>
    <title>My Calendar</title>
    <link rel="icon" type="image/ico" href="./favicon.ico">
    <link href="./account.css" rel="stylesheet">
    <link href="./timeline.css" rel="stylesheet">
    <link href="./header.css" rel="stylesheet">

    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="body_container" >
<div class="body_container_paint">
    <div class="header_container">
		<div class="header_bar">
			<a href="./index.php">
				<div class="main_logo">NITT Bank</div>
			</a>
			<div class="account_control">
				<div class="user_name" id="user_name">
                    <a href="./logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>
    
    <div class="navigate_page" style="padding:10px;">
        <div style="color:#fff;text-align:center">
            <h3>Welcome <?php echo $user_name." ( ".$user_username." )";?> </h3><br>
        </div>
        <div class="timeline_container">
            <div class="timeline_header">Account Details</div>
            <hr>
            <div id="txtHint">
                Account No: XXXX-XXXX-XXXX-<?php echo rand(1000,9999); ?> <br>
                IFSC Code: NITTB001617 <br>
                Balance: Rs. <?php echo rand(10,10000); ?>/- <br>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br>
	<div class="footer">
		<div class="navigate_page _foot">
			<div class="_foot_notes">
			<a href="./index.php">NITT Bank.<span class="com_">com</span></a>
			</div>
			<div class="_foot_notes copyright" style="">
			&copy <?php echo date("Y"); ?>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>