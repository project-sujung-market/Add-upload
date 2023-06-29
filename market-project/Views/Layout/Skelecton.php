<?php
	$phpstyle = "";
	if($_SERVER['PHP_SELF'] != "/index.php") {
		$phpstyle = explode("/", $_SERVER['PHP_SELF'])[2];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://kit.fontawesome.com/2fd94a74da.js" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if($phpstyle == "join") : ?>
	<link rel="stylesheet" href="css/login_signup.css">
	<?php elseif($phpstyle == "mypage") : ?>
	<link rel="stylesheet" href="css/mypage.css">
	<?php elseif($phpstyle == "upload") : ?>
	<link rel="stylesheet" href="css/Upload.css">
	<?php else: ?>
	<link rel="stylesheet" href="css/index.css">
	<?php endif; ?>
	<link rel="stylesheet" href="css/style.css">
	<title>수정마켓</title>
</head>

<body>
	<?php require_once (__VIEW . "/Layout/header.php"); ?>
	<div class="row">
		<div class="row-9">
			<?php require_once (__VIEW . "/{$page}.php"); ?>
		</div>
		<div class="row-3">
			<?php require_once (__VIEW . "/Layout/right.php"); ?>
		</div>
	</div>
	<footer>
		<p>Copyright 2023. (project-sujung-market) All pictures cannot be copied without permission.</p>
	</footer>
	<?php if($phpstyle == "upload") : ?>
		<script src="js/Upload.js"></script>
	<?php elseif($phpstyle == "join") : ?>
		<script src="js/join.js"></script>
	<?php endif; ?>
</body>

</html>