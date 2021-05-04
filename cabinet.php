<?php
	require_once('templates/top.php');
	if($_POST){
		$query = 'insert into cabinet (name, city, phone, email, users_id) values("' . $_POST['name'] . '","' . $_POST['city'] . '","' . $_POST['phone'] . '","' . $_POST['email']. '","' .$_SESSION['user_id'] . '")';

	if(mysqli_query($dbcnx, $query)){
?>	
<script>
 document.location.href="index.php"
</script>
<?php 		
			} else {
				echo 'НЕ успешно';
			}
			mysqli_close($dbcnx);
		}
?>
   <div class="tabindex">
    <h2><?php echo $User_account ;?></h2>
			<div class="sticker gallery">
				<div id="slides">
					<div class='images'>
	<form action=cabinet.php method=post>
	<?php echo $NameE; ?><input type=text name=name><br>
	<?php echo $Enter; ?><input type=text name=city><br>
	<?php echo $phone_n; ?> <input type=text name=phone><br>
	<?php echo $email_n; ?><input type=text name=email><br>
	
	<input type=submit value="оk">
	</form><br>
					</div>
				</div>
			</div>
	</div>
	
<?php 
	
	$query = "SELECT * FROM cabinet WHERE users_id = '".$_SESSION['user_id']."' ORDER BY id DESC";
	$adr = mysqli_query($dbcnx, $query);
	$tbl_cabinet = mysqli_fetch_array($adr);
?>	
<div class = "link link_name">
<?php echo $tbl_cabinet['name'];?>
</div>

<div class = "link link_name">
<?php echo $tbl_cabinet['city'];?>
</div>

<div class = "link link_name">
<?php echo $tbl_cabinet['phone'];?>
</div>

<div class = "link link_name">
<?php echo $tbl_cabinet['email'];?>
</div>

<?php 
	require_once('templates/bottom.php');	
?>

 



 
 
 
 