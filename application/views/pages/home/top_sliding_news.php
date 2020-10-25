<!--::::: POST CAROUSEL AREA START  :::::::-->
<div class="fifth_bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="carousel_posts1 owl-carousel nav_style2 mb40 mt30">
						<!--CAROUSEL START-->
						<?php foreach($random_news as $randomnews){?>

							<div class="single_post widgets_small post_type5">
								<div class="post_img">
									<div class="img_wrap">
										<a href="<?php echo base_url('category/other/').$randomnews['slug'];?>">
											<img src="<?php echo base_url('news_images/').$randomnews['media_name'];?>" alt="">
										</a>
									</div>
								</div>
								<div class="single_post_text">
									<h4><a href="<?php echo base_url('category/other/').$randomnews['slug'];?>">U.S. Response subash says he will label regions by risk of…</a></h4>
									<p>People have been infected</p>
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