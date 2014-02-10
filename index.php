<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0">
<meta name="description" content="รวบรวมประสบการณ์ดีๆ จากประสบการณ์ในการ trade หุ้น ให้ได้อ่านเป็นประสบการณ์ในการเล่น มือใหม่ควรอ่านเพื่อจะได้มีความเข้าใจในการ trade มากขึ้น">
<meta name="keywords" content="feed , stock , trade , หุ้น , blank" />
<link rel="icon" href="http://www.gravatar.com/avatar/e8136c5cd59ab1348af1e8af3755c9e1.png" type="image/x-icon" />
<title>Abstract Feed Stock Trade </title>

<!-- BEGIN HEADER INCLUDE -->
<?php include "includes/page-header.php" ;?>
<!-- END HEADER INCLUDE -->

</head>
<body>

<!-- BEGIN LOGO + TAGLINE + MENU BUTTON INCLUDE -->
<?php include "includes/logo-tagline-menubutton.php" ;?>
<!-- END LOGO + TAGLINE + MENU BUTTON INCLUDE -->

<!-- BEGIN MAIN MENU -->
<div id="top-slide-menu"><div id="menu-wrap"><ul id="menu-main-menu" class="menu">

<!-- BEGIN MENU INCLUDE -->
<?php include "includes/menu.php" ;?>
<!-- END MENU INCLUDE -->

<?php  

if ( file_exists( 'config.php' ) ) 
{
    require 'config.php';
}

?>


<?php require 'connect_database.php'; ?>
</ul></div></div>
<!-- END MAIN MENU -->

<div id="sitewrap">
<div id="pagewrap">
<div id="body">
<div id="content">

	<!--
	BEGIN EDITING HERE
	-->
						
		<!-- BEGIN SLIDER -->
		<div class="swiper-main" style="display:none">
		  <div class="swiper-container swiper1">
			<div class="swiper-wrapper">
			  <div class="swiper-slide"> <img src="content-images/01_sword.jpg" alt="sword"> </div>
			  <div class="swiper-slide"> <img src="content-images/02_redhair.jpg" alt="redhair"> </div>
			  <div class="swiper-slide"> <img src="content-images/03_goggles.jpg" alt="goggles"> </div>
			</div>
		  </div>
		</div>
		<!-- <div class="pagination pagination1"></div> -->
		<!-- END SLIDER -->
		
		<!-- BEGIN TITLE -->
		<h1 class="post-title">Welcome to Feed Credit by <a href="https://www.facebook.com/OutOfMyMindOnValueInvestment">Facebook</a> </h1>
		<!-- END TITLE -->

		<!-- BEGIN CONTENT -->

		<?php  
		$ci_db->order_by( 'id_content', 'asc' );
		$ci_db->limit(20);
		$query = $ci_db->get( 'fb_content' );
		$show_data = $query->result();


		?>


		<?php foreach ( $show_data as $key => $value ): ?>
			
			<div class="entry-content">
		
				<?php echo $value->content ?>
						
			</div>
			<hr>

		<?php endforeach ?>

		
		<!-- END CONTENT -->
		
	<!--
	END EDITING HERE
	-->


</div>
</div>
</div>
</div>


<!-- BEGIN FOOTER INCLUDE -->
<?php include "includes/page-footer.php" ;?>
<!-- END FOOTER INCLUDE -->

</body>
</html>