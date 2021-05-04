<?php
	session_start();
	require_once('config/config.php');
	if (isset($_POST['language'])) {
		$_SESSION['language'] = $_POST['language'];
	};

	if (isset($_POST['style'])) {
		$_SESSION['style'] = $_POST['style'];
	};

	if (isset($_SESSION['language']) && $_SESSION['language'] == "eng") {
		include('english.php');
	} else {
		include('russian.php');
	}
?>
	<!DOCTYPE html>
	<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Онлайн Художественная Галерея</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="стили.css">	
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="mySlider.css">

	<script src='js/jquery-3.4.1.min.js'></script>
	<script src='js/pop.js'></script>
	<script src='js/fast-edit.js'></script>
	<script src="js/slider.js"></script>
	<script src="js/index.js"></script>
	<script src='js/tabindex.js'></script>
	<script src="js/mySlider.js"></script>
  </head>
  <body class="container2">
  <header> 
	<div class="site-header2">
	<form class="forms" name="forma1" method=post>
						<?php echo $Choose_a_language; ?>
						<select name="language" size="1">
							<option <?php
									if ($_SESSION['language'] == 'rus') {
										echo 'selected';
									}
									?> value="rus"> <?php echo $Russian_language; ?>
							<option <?php
									if ($_SESSION['language'] == 'eng') {
										echo 'selected';
									}
									?> value="eng"> <?php echo $English_language; ?>
						</select><br>
						<input class="form_submit" type="submit" value=<?php echo $Send; ?>>
					</form>	
			<h2><?php echo $Name; ?></h2>
			<h1><?php echo $Namess; ?></h1>
					
	</div>
  </header>	

	<div class="icons">	
			<div class="left-pillar">
				<ul class="post-menu">
					<li class="logotip">
						<a href="/#Main_text"><span class='menu-img'><img src='img/bulletin_board.png' /></span><?php echo $Text; ?></a>
					</li>
					<li>
						<a href="/#photo"><span class='menu-img'><img src='img/art_palette.png' /></span><?php echo $Ph; ?></a>
					</li>
					<li>
						<a href="/#table"><span class='menu-img'><img src='img/fountain_pen.png' /></span><?php echo $Art; ?></a>
					</li>
					<li>
						<a href="/#picture"><span class='menu-img'><img src='img/brush.png' /></span><?php echo $Pictures; ?></a>
					</li>
					<li>
						<a href="/#map"><span class='menu-img'><img src='img/eraser.png' /></span><?php echo $Maps; ?></a>
					</li>
					<li>
						<a href="/#fan"><span class='menu-img'><img src='img/camera.png' /></span><?php echo $Photo; ?>
					</li>
					<li>
						<a href="/#maze"><span class='menu-img'><img src='img/graphic_design.png' /></span><?php echo $Contacts ;?></a>	
					</li>
					<li>
					<?
						if(isset($_SESSION['user_id'])){
						 ?>
						<li><a href="cabinet.php"><span class='menu-img'><img src='img/image.png' /></span><?php echo $User_account; ?></a> </a></li>
						<li><a href="/logout.php"> <span class='menu-img'><img src='img/book.png' /></span><?php echo $Output; ?></a></a></li>
						<?
						}else{
						 ?>
						<li><a href="users.php"><span class='menu-img'><img src='img/lightbulb_idea.png' /></span><?php echo $Admin_panel; ?></a></a></li>
						<li><a href="login.php"><span class='menu-img'><img src='img/folder.png' /></span><?php echo  $Entrance; ?></a></a></li>
						<?
						}
						?>
						
					</li>
					
					
				</ul>
			</div>
	