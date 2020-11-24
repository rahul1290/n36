<head>
	<title>News-36  		<?php /*
		if(isset($newsDetail[0]['title_hindi'])){
			echo '| '.$newsDetail[0]['title_hindi'].' | '.$newsDetail[0]['title_hindi']; 
		}*/ ?>	</title> 
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="description" content="<?php if(isset($newsDetail[0]['title_english'])){ echo $newsDetail[0]['title_hindi'];}?>">
	<meta name="keywords" content="<?php if(isset($newsDetail[0]['meta_keyword'])){echo $newsDetail[0]['meta_keyword'];}?>">
	<meta name="author" content="<?php echo 'News-36 Desk'; ?>">
	
	
	<meta property="og:title" content="<?php if(isset($newsDetail[0]['title_english'])){ echo $newsDetail[0]['title_hindi'];}?>">
	<meta property="og:description" content="<?php if(isset($newsDetail[0]['title_english'])){ echo $newsDetail[0]['title_hindi'];}?>">
	

	<?php
	if(isset($newsDetail)){ 
	$img = explode(',', $newsDetail[0]['media_files']); ?>
	<meta property="og:image" content="<?php echo base_url('news_images/200X154/').$img[0]; ?>">
	<meta property="og:url" content="<?php echo base_url('news/').$newsDetail[0]['slug'];?>">
	<meta name="twitter:card" content="<?php if(isset($newsDetail[0]['title_english'])){ echo $newsDetail[0]['title_hindi'];}?>">
	<?php } ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--::::: FABICON ICON :::::::-->
	<link rel="icon" href="<?php echo base_url('assets/img/logo/News-36logo.png'); ?>">
	<!--::::: ALL CSS FILES :::::::-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/fontawesome.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/modal-video.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/slick.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/stellarnav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>">
    

    <script src="<?php echo base_url('assets/js/plugins/jquery.2.1.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery.nav.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery.waypoints.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery-modal-video.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/owl.carousel.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/circle-progress.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/slick.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/stellarnav.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/wow.min.js'); ?>"></script>
	
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	
	<script data-ad-client="ca-pub-5172083038801230" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GL5M8GEF1H"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-GL5M8GEF1H');
	</script>
</head>
<input type="hidden" name="baseUrl" id="baseUrl" value="<?php echo base_url(); ?>" />