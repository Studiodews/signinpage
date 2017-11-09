<?php
	require_once('../../inc/db.php');
	if ($_GET['p'] == "all") {
		$rows = $db->select('SELECT * FROM tblinfo INNER JOIN tblusertype ON tblinfo.user_type_id = tblusertype.type_id', '','');
	} else {
		$id = $_GET['p'];
		$rows = $db->select("SELECT * FROM tblinfo INNER JOIN tblusertype ON tblinfo.user_type_id = tblusertype.type_id WHERE tblinfo.info_id=$id", '',''); 	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Print | PFA Sign-In Web Page</title>
	<style>
		html,
		body {
			float: none;
		}
		.attendee {
			font-family: sans-serif;
			width: 50%;
			height: 100%;
			float: left;
			text-align: center;
			page-break-before: avoid;
			box-sizing: border-box;
			border: 1px solid #f00;
		}
		.attendee:nth-child(odd) {
			page-break-before: always;
			clear: left;
		}
		.attendee:nth-child(even) {

		}
		.attendee section {
			padding: 5em 1em 1em;
			box-sizing: border-box;
			height: 50%;
		}
		.attendee section.back {
			transform: rotate(180deg);
			border-top: 1px dashed #000;
		}
		.attendee section header {

		}
		.attendee section header img {
			max-width: 70%;
		}
		.attendee section header h1 {
			display: none;
		}
		.attendee section figure {

		}
		.attendee section figure img {
			max-width: 25%;
			border-radius: 50%;
		}
		.attendee section figure figcaption {

		}
		.attendee section figure figcaption h3.name {
			margin: 0;
		}
		.attendee section figure figcaption h4.nickname {
			margin: 0;
		}
		.attendee section footer {

		}
		.attendee section footer small {

		}
		article {
			margin-top:0px;
		}
	</style>
</head>
<body>
	<?php
        $cnt = 0;
        foreach($rows as $row):
          $cnt++;
     ?>
	<article class="attendee">
		<section class="back">
			<header>
				<img src="https://epinoy.com/id/assets/img/pfa_logo.jpg" />
			</header>
			<figure>
				<h1>Financial Opportunity Seminar</h1>
				<figcaption>
					<h3 class="name"><?php echo $row->firstname.' '.$row->lastname; ?></h3>
					<h4 class="nickname"><?php echo $row->nickname; ?></h4>
				</figcaption>
			</figure>
			<footer>
				<small><?php echo $row->user_type_name; ?></small>
			</footer>
		</section>
		<section class="front">
			<header>
				<img src="https://epinoy.com/id/assets/img/pfa_logo.jpg" />
			</header>
			<figure>
				<h1>Financial Opportunity Seminar</h1>
				<figcaption>
					<h3 class="name"><?php echo $row->firstname.' '.$row->lastname; ?></h3>
					<h4 class="nickname"><?php echo $row->nickname; ?></h4>
				</figcaption>
			</figure>
			<footer>
				<small><?php echo $row->user_type_name; ?></small>
			</footer>
		</section>
	</article>
	<?php 
    	endforeach; 
    ?>
</body>
</html>
