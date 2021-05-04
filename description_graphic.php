<?php
 require_once('templates/top.php');
	$graphic_id = 0;
	if(isset($_GET['graphic_id'])){
	$graphic_id = $_GET['graphic_id'];
}
	$query2 = "SELECT * FROM graphic WHERE id=".$graphic_id;
	$adr2 = mysqli_query($dbcnx, $query2);
	$tbl_graphic = mysqli_fetch_array($adr2);
?>
<div class="tabindexs">
	<h4><?php $category = $tbl_graphic['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$category = $tbl_graphic['category_eng'];
										
}
}
echo $category;
?></h4>
	<div class='image-container'>
		<img class='author' src='img/graphic/<?php echo $tbl_graphic['id'];?>.jpg' />
	</div>
			<div class="bummer">
				<h4><?php $price = $tbl_graphic['price'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$price = $tbl_graphic['price_eng'];
}
}
echo $price;
?></h4><h3><?php echo $tbl_graphic['title']?><br></h3>
<form action="coment.php" method="post">
			<input type="hidden" name="type_id" value="<?php echo $tbl_graphic['id'];?>">
			<input type="hidden" value="graphic" name="type"/>
				<p> <?php echo $Leave ?> </p>
					<h3><textarea name="body" class="com" width="100%" rows=4></textarea></h3>
					<h3><input type="submit" value=ok></h3>
</form>
<br style="clear:both" />
<?php
	$query2 = "SELECT * FROM coments WHERE type='graphic'";
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






