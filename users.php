<?php 
	require_once('templates/top.php');
	if($_POST){
		$query = 'insert into users (uname, upass, urole) values("' . $_POST['uname'] . '","' . $_POST['upass'] . '","user")';

		if(mysqli_query($dbcnx, $query)){
?>	
<script>
 document.location.href="login.php"
</script>
<?php 		
			} else {
				echo 'НЕ успешно';
			};
			mysqli_close($dbcnx);
		}
?>

	<form action=users.php method=post>
	<?php echo $login ;?><input type=text name=uname><br>
	<?php echo $pass ;?><input type=password name=upass><br>
	<?php echo "<input type=submit value= $ch >"?>
	</form><br>

<?php 
	require_once('templates/bottom.php');	
?>
 





	
