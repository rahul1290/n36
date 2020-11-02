<!--::::: FEATURE_POST AREA START :::::::-->
<div class="feature_carousel_area mb40">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Feature News</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="feature_carousel owl-carousel nav_style1">
						<!--CAROUSEL START-->
						<?php foreach($feature_news as $featurenews){ ?>
    						<div class="single_post post_type6 post_type7">
    							<div class="post_img gradient1">
    								<a href="#">
    									<?php $img = explode(',', $featurenews['media_files']); ?>
                                        <img src="<?php echo base_url('/image_resize.php');?>?path=<?php echo 'news_images/'.$img[0]; ?>&width=510&height=640">
    								</a>
    							</div>
    							<div class="single_post_text">
    								<!-- <div class="meta5">	<a href="#">TECHNOLOGY</a>
    									<a href="#">March 26, 2020</a>
    								</div> -->
    								<h4>
    									<a href="<?php echo base_url('news/').$featurenews['slug'];?>">
                                			<?php echo substr($featurenews['title_hindi'],0,200); ?>
                                		</a>
    								</h4>
    								<div class="text-info">
                                		<small><?php echo $this->my_library->time_elapsed_string($featurenews['created_at']);?></small>
                                	</div>
    							</div>
    						</div>
						<?php } ?>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: FEATURE POST AREA END :::::::-->