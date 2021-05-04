<?php
	require_once('templates/top.php');
	if($_POST){
		$query = 'insert into cabinet (name, city, phone, email, users_id) values("' . $_POST['name'] . '","' . $_POST['city'] . '","' . $_POST['phone'] . '","' . $_POST['email']. '","' .$_SESSION['user_id'] . '")';

	if(mysqli_query($dbcnx, $query)){
?>	
<script>
 document.location.href="cabinet1.php"
</script>
<?php 		
			} else {
				echo 'НЕ успешно';
			}
			mysqli_close($dbcnx);
		}
?>
 
<?php 
	require_once('templates/bottom.php');	
?>