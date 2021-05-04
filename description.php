<?php
 require_once('templates/top.php');
	$foto_id = 0;
	if(isset($_GET['foto_id'])){
	$foto_id = $_GET['foto_id'];
}
	$query2 = "SELECT * FROM foto WHERE id=".$foto_id;
	$adr2 = mysqli_query($dbcnx, $query2);
	$tbl_foto = mysqli_fetch_array($adr2);
?>
<div class="tabindexs">
	<h4><?php $category = $tbl_foto['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$category = $tbl_foto['category_eng'];					
}
}
echo $category;
?></h4>
	<div class='image-container'>
		<img class='author' src='img/foto/<?php echo $tbl_foto['id'];?>.jpg' />
	</div>
			<div class="bummer">
				<h4><?php $price = $tbl_foto['price'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$price = $tbl_foto['price_eng'];
}
}
echo $price;
?></h4><h3><?php echo $tbl_foto['title']?><br></h3>
<form action="coment.php" method="post">
			<input type="hidden" name="type_id" value="<?php echo $tbl_foto['id'];?>">
			<input type="hidden" value="foto" name="type"/>
			    <p><?php echo $Leave ?></p>
					<h3><textarea name="body" class="com" width="100%" rows=4></textarea></h3>
					<h3><input type="submit" value=ok></h3>
</form>
<br style="clear:both" />
<?php
	$query2 = "SELECT * FROM coments WHERE type='foto'";
	$adr2 = mysqli_query($dbcnx, $query2);
    while($tbl_coment = mysqli_fetch_array($adr2))
   {
    echo "<p>";
	echo $tbl_coment['body'];
	echo "</p>";
   }
 ?> 
   	        </div>
</div>	
<?php
 require_once('templates/bottom.php');
?>






