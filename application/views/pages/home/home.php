<body class="theme-1">
	<?php if(isset($tranding_news)){ print_r($tranding_news); }?>
	<!--::::: LOGO AREA START  :::::::-->
	<?php if(isset($brand_logo)){ print_r($brand_logo); }?>
	<!--::::: LOGO AREA END :::::::-->
	<?php if(isset($topmenu)){ print_r($topmenu); }?>
	<?php if(isset($top_sliding_news)){ print_r($top_sliding_news); }?>
	<!--::::: POST GALLARY AREA START :::::::-->
	<div class="post_gallary_area fifth_bg mb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-xl-8">
							<div class="slider_demo2">
								<?php $c=0; foreach($today_story as $news){ if($c == 0){?>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<?php $img = explode(',', $news['media_files']); ?>										
										<img src="<?php echo $this->config->item('image_url').'news_images/'.$img[0]; ?>"/>
									</div>
									<div class="single_post_text">
										<h4>
    										<a class="play_btn1" href="<?php echo base_url('news/').$news['slug']; ?>">
    											<?php echo mb_substr($news['title_hindi'],0,200); ?>
    										</a>
										</h4>
										<div class="space-8"></div>
										<div class="text-info">
                                    		<small><?php echo $this->my_library->time_elapsed_string($news['created_at']);?></small>
                                    	</div>
									</div>
								</div>
								<?php } $c++; } ?>
							</div>
						</div>

						<?php if(isset($rightnav_news)){ print_r($rightnav_news); }?>

					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<?php if(isset($feature_news)){ print_r($feature_news); }?>
	<?php if(isset($trandings_news)){ print_r($trandings_news); }?>
	<!--::::: MIX CAROUSEL AREA START :::::::-->
	<div class="half_bg1 mix_area">
		<div class="space-60"></div>
	</div>
	<!--::::: MIX CAROUSEL AREA END :::::::-->

	<!--::::: VIDEO POST AREA START :::::::-->
	<?php if(isset($video_news)){ print_r($video_news); }?>
	<!--::::: VIDEO POST AREA END :::::::-->
	<!--::::: ENTERTAINMENT AREA START :::::::-->
	<div class="entertrainments">
		<div class="container">
			<div class="row">
				<?php if(isset($entertainment_news)){ print_r($entertainment_news); }?>
				<?php if(isset($most_share_news)){ print_r($most_share_news); }?>
				<?php if(isset($upcoming_match)){ print_r($upcoming_match); }?>
				<?php if(isset($news_letter)){ print_r($news_letter); }?>
						
						<!--<div class="col-lg-6 col-lg-12">
							<div class="banner2 mb30">
								<a href="#">
									<img src="assets/img/bg/sidebar-1.png" alt="">
								</a>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: ENTERTAINMENT AREA END :::::::-->
    <div class="space-70"></div>
    
    <?php if(isset($footer)){ print_r($footer);}?>
</body>