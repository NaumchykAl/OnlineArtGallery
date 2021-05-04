<?php
 require_once('templates/top.php');
		if($_POST){
			$query = 'select * from users where uname="' . $_POST['uname'] . '"
						   and upass="' . $_POST['upass'] . '"';
			$result = mysqli_query($dbcnx, $query);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['user_id'] = $row['id'];
?>
<script>
 document.location.href="cabinet.php"
</script>
<?php
			} else {
				echo 'Авторизация НЕ успешна';
			}
			mysqli_close($dbcnx);
		}
?>	
	<?php echo $password ;?><br>
	<form action=login.php method=post>
	<?php echo $login ;?><input type=text name=uname><br>
	<?php echo $pass ;?><input type=password name=upass><br>
	<?php echo "<input type=submit value= $ent >"?>
    </form><br>
	
<?php
			require_once('templates/bottom.php');
?>





