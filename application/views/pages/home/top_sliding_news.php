<!--::::: POST CAROUSEL AREA START  :::::::-->
<div class="fifth_bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="carousel_posts1 owl-carousel nav_style2 mb40 mt30">
						<!--CAROUSEL START-->
						<?php foreach($trending_news as $news){?>
							<div class="single_post widgets_small post_type5">
								<div class="post_img">
									<div class="img_wrap">
										<a href="<?php echo base_url('category/other/').$news['slug'];?>">
											<?php $img = explode(',', $news['media_files']); ?>
											<img src="<?php echo base_url('/image_resize.php');?>?path=<?php echo 'news_images/'.$img[0]; ?>&width=80&height=70">
										</a>
									</div>
								</div>
								<div class="single_post_text">
									<h4>
										<a href="<?php echo base_url('news/').$news['slug'];?>">
											<?php 
    											 //$pos = strpos($news['title_hindi'],' ',190);
    											 echo substr($news['title_hindi'],0,200);
											?>
										</a>
									</h4>
									<p>
										<small><?php echo $this->my_library->time_elapsed_string($news['created_at']);?></small>
									</p>
								</div>
							</div>
						<?php } ?>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: POST CAREOUSEL AREA END :::::::-->