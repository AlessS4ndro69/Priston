<?php 
include("galeria/conexion.php");
//include('core/core.php');
$active1="active";
$active2="";
$active3="";
$active4="";
?>
<html>


	
<div class="container gallery-container">
	
	<?php include('galeria/nav.php');?>
	
    <h1>La concha de sus mares</h1>

    <p class="page-description text-center">Restobar - Cevicheria</p>
    
    <div class="tz-gallery">

        <div class="row">

		<?php
			$nums=1;
			$sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
			while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
		?>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?php  echo PATH_IMG . $rw_banner_top['url_image'];?>">
                    <img src="<?php echo PATH_IMG .  $rw_banner_top['url_image'];?>" alt="<?php echo $rw_banner_top['titulo'];?>" >
                </a>
            </div>
		<?php 
			if ($nums%3==0){
				echo '<div class="clearfix"></div>';
			}
		$nums++;
			}
		?>	
            
            

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</html>