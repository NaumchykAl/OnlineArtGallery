<?php
 require_once('templates/top.php');
	$catalog_id = 0;
	if(isset($_GET['catalog_id'])){
	$catalog_id = $_GET['catalog_id'];
}
$tbl = 'catalogs';
if (isset($_SESSION['language'])){
	if($_SESSION['language'] == 'eng'){
	$tbl = 'catalogs_eng';
}
}
	$query2 = "SELECT * FROM $tbl WHERE id=".$catalog_id;
	$adr2 = mysqli_query($dbcnx, $query2);
	$tbl_catalog = mysqli_fetch_array($adr2);
?>

<div class="tabindexs">
	<h4><?php echo $tbl_catalog['name'];?></h4>
	<div class='image-container'>
		<img class='author' src='img/catalog/<?php echo $tbl_catalog['id'];?>.jpg' />
	</div>
			<div class="bummer">
				<h4><?php echo $tbl_catalog['city']?></h4><h3><?php echo $tbl_catalog['info']?><br><br><?php echo $tbl_catalog['phone'] ?><br><?php echo $tbl_catalog['email'] ?></h3>
	        </div>
</div>	
<?php
 require_once('templates/bottom.php');
?>