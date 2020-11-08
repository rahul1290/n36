<body class="theme-1">
	<?php if(isset($tranding_news)){ print_r($tranding_news); }?>
	<!--::::: LOGO AREA START  :::::::-->
	<?php if(isset($brand_logo)){ print_r($brand_logo); }?>
	<!--::::: LOGO AREA END :::::::-->

	
	<!--::::: MENU AREA START  :::::::-->
	<?php if(isset($topmenu)){ print_r($topmenu); }?>
	<!--::::: MENU AREA END :::::::-->
	
	<!--::::: ARCHIVE AREA START :::::::-->
	<div class="archives post post1 padding-top-30">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php $newsSlugarray = explode('-', $newsDetail[0]['slug']);
					       array_pop($newsSlugarray);
					?>
					<div class="bridcrumb">	<a href="<?php echo base_url();?>">Home</a> /<b><?php echo implode(' ',$newsSlugarray); ?></b></div>
				</div>
			</div>
			<div class="space-30"></div>
			<div class="row">
				<div class="col-md-6 col-lg-8">
					<div class="row">
						<!--<div class="col-4 align-self-center">
							<div class="page_category">
								<h4>HEALTH</h4>
							</div>
						</div>
						<div class="col-8 text-right">
							<div class="page_comments">
								<ul class="inline">
									<li><i class="fas fa-comment"></i>563</li>
									<li><i class="fas fa-fire"></i>536</li>
								</ul>
							</div>
						</div> -->
					</div>
					
					<div class="single_post_heading">
						<h1>
							<?php echo $newsDetail[0]['title_hindi']; ?>
						</h1>
						<div class="space-10"></div>
						<?php $img = explode(',', $newsDetail[0]['media_files']); ?>
						<img src="<?php echo base_url('/image_resize.php');?>?path=<?php echo 'news_images/'.$img[0]; ?>&width=730&height=450">
						<?php echo $newsDetail[0]['content']; ?>
					</div>
					
					<div class="space-20"></div>
					<div class="row">
						<div class="col-lg-6 align-self-center">
							<div class="author">
								<div class="author_img">
									<div class="author_img_wrap">
										<img src="<?php echo base_url('users_pic/').$newsDetail[0]['profile_pic']; ?>" alt="">
									</div>
								</div>	<a href="#"><?php echo $newsDetail[0]['name_h']; ?></a>
								<ul>
									<li><a href="#"><?php echo date('F d, Y',strtotime($newsDetail[0]['published_at'])); ?></a>
									</li>
									<li>Updated <?php echo date('H:i A',strtotime($newsDetail[0]['published_at'])); ?></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 align-self-center">
							<div class="author_social inline text-right">
								<ul>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-youtube"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					
					<div class="border_black"></div>
					<div class="space-40"></div>
					<div class="next_prev">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>PREVIOUS NEWS</p>
									<h3><a href="#">Kushner puts himself in middle of white houseâ€™s chaotic coronavirus response.</a></h3>
								</div>
							</div>
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>NEXT NEWS</p>
									<h3><a href="#">C.I.A. Hunts for authentic virus totals in china, dismissing government tallies</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="follow_box widget mb30">
						<h2 class="widget-title">Follow Us</h2>
						<div class="social_shares">
							<a class="single_social social_facebook" href="#">	<span class="follow_icon"><i class="fab fa-facebook-f"></i></span>
								34,456 <span class="icon_text">Fans</span>
							</a>
							<a class="single_social social_twitter" href="#">	<span class="follow_icon"><i class="fab fa-twitter"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_youtube" href="#">	<span class="follow_icon"><i class="fab fa-youtube"></i></span>
								34,456 <span class="icon_text">Subscribers</span>
							</a>
							<a class="single_social social_instagram" href="#">	<span class="follow_icon"><i class="fab fa-instagram"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_vimeo" href="#">	<span class="follow_icon"><i class="fab fa-vimeo-v"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_medium" href="#">	<span class="follow_icon"><i class="fab fa-medium-m"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
						</div>
					</div>
					
					<!--:::::: POST TYPE 3 START :::::::-->
					<div class="carousel_post_type3_wrap mb30">
						<h2 class="widget-title">Trending News</h2>
						<div class="carousel_post_type3 nav_style1 owl-carousel">
							<?php foreach($trending_news as $news){ ?>
							<div class="single_post post_type3">
								<div class="post_img">
									<?php $img = explode(',', $news['media_files']); ?>
                                        <img src="<?php echo base_url('/image_resize.php');?>?path=<?php echo 'news_images/'.$img[0]; ?>&width=350&height=250">	
									<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<h4><a href="post1.html">
										<?php 
    										$pos = strpos($news['title_hindi'],' ',150);
    										echo substr($news['title_hindi'],0,$pos );
                            			?>
									</a></h4>
									<div class="space-3"></div>
									<div class=""><a href="#"></a>
										<a href="#"><small><?php echo $this->my_library->time_elapsed_string($news['created_at']);?></small></a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<!--:::::: POST TYPE 3 END :::::::-->
					
					<div class="banner2 mb30">
						<a href="#">
							<img src="<?php echo base_url('assets/img/bg/sidebar-1.png'); ?>" alt="">
						</a>
					</div>
					
					<!--<div class="box widget news_letter mb30">
						<h2 class="widget-title">News Letter</h2>
						<p>Your email address will not be this published. Required fields are News Today.</p>
						<div class="space-20"></div>
						<div class="signup_form">
							<form action="index.html">
								<input class="signup" type="email" placeholder="Your email address">
								<input type="button" class="cbtn" value="sign up">
							</form>
							<div class="space-10"></div>
							<p>We hate spam as much as you do</p>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: ARCHIVE AREA END :::::::-->
	<div class="space-20"></div>
	<!--::::: LATEST BLOG AREA START :::::::-->
	<div class="fourth_bg padding6030">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Our Latest Blog</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php foreach($latest_news as $news){ ?>
				<div class="col-md-6 col-lg-4">
					<div class="single_post post_type3 mb30">
						<div class="post_img">
							<a href="#">
								<img src="assets/img/bg/video4.jpg" alt="">
							</a>
						</div>
						<div class="single_post_text">
							<h4><a href="<?php echo base_url('news/').$news['slug'];?>">
							<?php
                            	$pos = strpos($news['title_hindi'],' ',150);
                            	echo substr($news['title_hindi'],0,$pos );
	                        ?></a></h4>
							<div class="">
								<small><?php echo $this->my_library->time_elapsed_string($news['created_at']);?></small>
							</div>	
							<div class="space-10"></div>
							<p class="post-p">
							<?php
                            	//$pos = strpos($news['content'],' ',50); 
                            	echo substr($news['content'],0,200 );
	                        ?>
							</p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--::::: LATEST BLOG AREA END :::::::-->
	
	<div class="space-50"></div>
	<!--:::::  COMMENT FORM AREA END :::::::-->
	<!--::::: BANNER AREA START :::::::-->
	<div class="padding2020 fourth_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<div class="banner1">
						<a href="#">
							<img src="<?php echo base_url('assets/img/bg/banner1.png'); ?>" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: BANNER AREA END :::::::-->
	<?php if(isset($footer)){ print_r($footer); }?>
</body>