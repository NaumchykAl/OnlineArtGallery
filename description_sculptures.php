<?php
 require_once('templates/top.php');
	$sculptures_id = 0;
	if(isset($_GET['sculptures_id'])){
	$sculptures_id = $_GET['sculptures_id'];
}
	$query2 = "SELECT * FROM sculptures WHERE id=".$sculptures_id;
	$adr2 = mysqli_query($dbcnx, $query2);
	$tbl_sculptures = mysqli_fetch_array($adr2);
?>
<div class="tabindexs">
	<h4><?php $category = $tbl_sculptures['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$category = $tbl_sculptures['category_eng'];
										
}
}
echo $category;
?></h4>
	<div class='image-container'>
		<img class='author' src='img/sculptures/<?php echo $tbl_sculptures['id'];?>.png' />
	</div>
			<div class="bummer">
				<h4><?php $price = $tbl_sculptures['price'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$price = $tbl_sculptures['price_eng'];
}
}
echo $price;
?></h4><h3><?php echo $tbl_sculptures['title']?><br></h3>
<form action="coment.php" method="post">
			<input type="hidden" name="type_id" value="<?php echo $tbl_sculptures['id'];?>">
			<input type="hidden" value="sculptures" name="type"/>
				<p> <?php echo $Leave ?> </p>
					<h3><textarea name="body" class="com" width="100%" rows=4></textarea></h3>
					<h3><input type="submit" value=ok></h3>
</form>
<br style="clear:both" />
<?php
	$query2 = "SELECT * FROM coments WHERE type='art'";
	$adr2 = mysqli_query($dbcnx, $query2);
    while($tbl_coment = mysqli_fetch_array($adr2))
   {
    echo "<h4>";
	echo $tbl_coment['body'];
	echo "</h4>";
   }
 ?> 
   	        </div>
</div>	
<?php
 require_once('templates/bottom.php');
?>






