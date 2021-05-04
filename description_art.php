<?php
 require_once('templates/top.php');
	$art_id = 0;
	if(isset($_GET['art_id'])){
	$art_id = $_GET['art_id'];
}
	$query2 = "SELECT * FROM art WHERE id=".$art_id;
	$adr2 = mysqli_query($dbcnx, $query2);
	$tbl_art = mysqli_fetch_array($adr2);
?>
<div class="tabindexs">
	<h4><?php $category = $tbl_art['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$category = $tbl_art['category_eng'];
										
}
}
echo $category;
?></h4>
	<div class='image-container'>
		<img class='author' src='img/art/<?php echo $tbl_art['id'];?>.jpg' />
	</div>
			<div class="bummer">
				<h4><?php $price = $tbl_art['price'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$price = $tbl_art['price_eng'];
}
}
echo $price;
?></h4><h3><?php echo $tbl_art['title']?><br></h3>
<form action="coment.php" method="post">
			<input type="hidden" name="type_id" value="<?php echo $tbl_art['id'];?>">
			<input type="hidden" value="art" name="type"/>
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






