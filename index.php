<?php
 require_once('templates/top.php');
?>
			<div class="block">
				<div class="menu">
				
					<div class="pageMenu">
						<a href="https://www.mail.ru/"><?php echo $Mails;?></a>
					</div>
					<div class="pageMenu">
						<a href="https://www.google.com/"><?php echo $Homes;?></a>
					</div>
					<div class="pageMenu">
						<a href="https://www.google.by/search?q=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA"><?php echo $Main;?></a>
					</div>	

				</div>				
			</div> 
			
		<div class="content">
			<div class="float" id="Main_text">
					<?php echo $Main_text; ?>
			</div>	

				<div class="float" id="photo">
					<div class="tabindex">
							<h1><?php echo $Ph; ?></h1>
<?php
		$query = "SELECT * FROM catalogs";
		
		$adr = mysqli_query($dbcnx, $query);
		
        if (!$adr) exit("Ошибка при обращении к таблице");
?>		                <div class="sticker gallery" id="photo">
							<div id="slide">
								<div class='images'>

<?php
        while($tbl_catalog = mysqli_fetch_array($adr)){
?>	
									<div class='image'>
										<div class="cap"></div>
										<div class='image-block'>
											<h3><a href="/author.php?catalog_id=<?php echo $tbl_catalog['id']?>">
<?php 
											$cat = $tbl_catalog['name'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_catalog['name_eng'];
}
}
											echo $cat;
?>
												</a></h3>
											<div class='image-container'>
												<img src='img/catalog/<?php echo $tbl_catalog['id'];?>.jpg' />
											</div>
											<div class="bummer">
											<h3><?php $cat = $tbl_catalog['city'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_catalog['city_eng'];
}
}
											echo $cat;
?>
											</div>
										</div>
									</div>	
<?php 
}
?>
								</div>
							</div>
						</div>				
					</div>
				</div>
		</div>
			
				<div class="tables" id="table">
					<div class="tabindex">
							<h1><?php echo $Art; ?></h1>
<?php
		$query = "SELECT * FROM graphic";
		
		$adr = mysqli_query($dbcnx, $query);
		
        if (!$adr) exit("Ошибка при обращении к таблице");
?>		                 <div class="sticker gallery" id="table">
							<div id="slide">
								<div class='images'>
								<?php
        while($tbl_graphic = mysqli_fetch_array($adr)){
			$query2 = "SELECT * FROM catalogs WHERE id=".$tbl_graphic['catalog_id'];
			$adr2 = mysqli_query($dbcnx, $query2);
			$tbl_catalog = mysqli_fetch_array($adr2);
?>	
									<div class='image'>
										<div class="cap"></div>
										<div class='image-block'>
											<h3><?php 
											$cat = $tbl_graphic['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_graphic['category_eng'];
										
}
}
											echo $cat;?></h3>
											<div class='image-container'>
												<img src='img/graphic/<?php echo $tbl_graphic['id'];?>.jpg' />
											</div>
											<div class="bummer">
<?php
		if ($tbl_catalog['id']){
?>	
<a href="/author.php?catalog_id=<?php echo $tbl_catalog['id']?>">
<?php $name = $tbl_catalog['name'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$name = $tbl_catalog['name_eng'];	
}
}
echo $name;
?>
</a>
<a class="link link_info" href="/description_graphic.php?graphic_id=<?php echo $tbl_graphic['id']?>">
<?php echo $Info; ?>
</a>
<?php
		}									  
?>	
											</div>
										</div>
									</div>	
<?php 
}
?>
								</div>
							</div>
						</div>				
					</div>
				</div>
	

	<div class="pic" id="picture">
		<div class="tabindex">
			<h1><?php echo $Pictures; ?></h1>
<?php
		$query = "SELECT * FROM art";
		
		$adr = mysqli_query($dbcnx, $query);
		
        if (!$adr) exit("Ошибка при обращении к таблице");
?>			<div class="sticker gallery" id="picture">
				<div id="slide">
					<div class='images'>
<?php
        while($tbl_art = mysqli_fetch_array($adr)){
			$query2 = "SELECT * FROM catalogs WHERE id=".$tbl_art['catalog_id'];
			$adr2 = mysqli_query($dbcnx, $query2);
			$tbl_catalog = mysqli_fetch_array($adr2);
?>	
									<div class='image'>
										<div class="cap"></div>
										<div class='image-block'>
											<h3><?php 
											$cat = $tbl_art['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_art['category_eng'];
										
}
}
											echo $cat;?></h3>
											<div class='image-container'>
												<img src='img/art/<?php echo $tbl_art['id'];?>.jpg' />
											</div>
											<div class="bummer">
<?php
		if ($tbl_catalog['id']){
?>	
<a href="/author.php?catalog_id=<?php echo $tbl_catalog['id']?>">
<?php $name = $tbl_catalog['name'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$name = $tbl_catalog['name_eng'];	
}
}
echo $name;
?>
</a>
<a class="link link_info" href="/description_art.php?art_id=<?php echo $tbl_art['id']?>">
<?php echo $Info; ?>
</a>
<?php
		}									  
?>											  

											</div>
										</div>
									</div>	
<?php 
}
?>
		
					</div>
				</div>
			</div>	
		</div>
	</div>	
	<div class="maps" id="map">
		<div class="tabindex">
			<h1><?php echo $Maps;?></h1>
					
<?php
		$query = "SELECT * FROM sculptures";
		
		$adr = mysqli_query($dbcnx, $query);
		
        if (!$adr) exit("Ошибка при обращении к таблице");
?>			<div class="sticker gallery" id="picture">
				<div id="slide">
					<div class='images'>
<?php
        while($tbl_sculptures = mysqli_fetch_array($adr)){
			$query2 = "SELECT * FROM catalogs WHERE id=".$tbl_sculptures['catalog_id'];
			$adr2 = mysqli_query($dbcnx, $query2);
			$tbl_catalog = mysqli_fetch_array($adr2);
?>	
									<div class='image'>
										<div class="cap"></div>
										<div class='image-block'>
											<h3><?php 
											$cat = $tbl_sculptures['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_sculptures['category_eng'];
										
}
}
											echo $cat;?></h3>
											<div class='image-container'>
											<img src='img/sculptures/<?php echo $tbl_sculptures['id'];?>.png' />
											</div>
											<div class="bummer">
<?php
		if ($tbl_catalog['id']){
?>	
<a href="/author.php?catalog_id=<?php echo $tbl_catalog['id']?>">
<?php $name = $tbl_catalog['name'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$name = $tbl_catalog['name_eng'];	
}
}
echo $name;
?>
</a>
<a class="link link_info" href="/description_sculptures.php?sculptures_id=<?php echo $tbl_sculptures['id']?>">
<?php echo $Info; ?>
</a>
<?php
		}									  
?>											  

											</div>
										</div>
									</div>	
<?php 
}
?>
		
					</div>
				</div>
			</div>	
		</div>
	</div>	
	<div class="fans" id="fan">
		<div class="tabindex">
			<h1><?php echo $Photo;?></h1>
						
<?php
		$query = "SELECT * FROM foto";
		
		$adr = mysqli_query($dbcnx, $query);
		
        if (!$adr) exit("Ошибка при обращении к таблице");
?>			<div class="sticker gallery" id="picture">
				<div id="slide">
					<div class='images'>
<?php
        while($tbl_foto = mysqli_fetch_array($adr)){
			$query2 = "SELECT * FROM catalogs WHERE id=".$tbl_foto['catalog_id'];
			$adr2 = mysqli_query($dbcnx, $query2);
			$tbl_catalog = mysqli_fetch_array($adr2);
?>		
									<div class='image'>
										<div class="cap"></div>
										<div class='image-block'>
<h3><?php 
											$cat = $tbl_foto['category'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$cat = $tbl_foto['category_eng'];
										
}
}
											echo $cat;?></h3>
											<div class='image-container'>
											<img src='img/foto/<?php echo $tbl_foto['id'];?>.jpg' />
											</div>
											<div class="bummer">
<?php
		if ($tbl_catalog['id']){
?>	
<a class="link link_name" href="/author.php?catalog_id=<?php echo $tbl_catalog['id']?>">
<?php $name = $tbl_catalog['name'];
											if (isset($_SESSION['language'])){
											if($_SESSION['language'] == 'eng'){
											$name = $tbl_catalog['name_eng'];	
}
}
echo $name;
?>
</a>
<a class="link link_info" href="/description.php?foto_id=<?php echo $tbl_foto['id']?>">
<?php echo $Info; ?>
</a>
<?php
		}									  
?>											  

											</div>
										</div>
									</div>	
<?php 
}
?>
		
		
					</div>
				</div>
			</div>	
		</div>
	</div>	

</div>	
<div class="centr_blok">
	<div class="mazes" id="maze">
		<div class="mapsis">
		<h1><?php echo $Contacts ;?>
			<form><h2><?php echo $Travel; ?> </h2></h1>
<?php
	echo  '<h3><div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.6172834844233!2d27.59613001540882!3d53.90300604057058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfb3d74b1b95%3A0xc94631cd4fc2a140!2z0YPQuy4g0JrQvtC30LvQvtCy0LAgMjgsINCc0LjQvdGB0Lo!5e0!3m2!1sru!2sby!4v1602075314704!5m2!1sru!2sby"
                            width=100% height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div></h3>';
?>                    
					 <?php echo $Address; ?>
                     <?php echo $Phone; ?>
                     <?php echo $Email; ?>

</form>
		</div>				
	</div>	
</div>	
	

	
				
<?php
 require_once('templates/bottom.php');
?>