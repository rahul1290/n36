	<!--::::: TOP BAR START :::::::-->
	<div class="topbar white_bg" id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-8 align-self-center">
					<div class="trancarousel_area">
						<p class="trand">Tranding</p>
						<div class="trancarousel owl-carousel nav_style1">
							<?php foreach($trending_news as $news){ ?>
								<div class="trancarousel_item">
    								<p>
    									<a href="<?php echo base_url('news/').$news['slug']; ?>">
    										<?php 
    										echo substr($news['title_hindi'],0,200);
    										?>
    									</a>
    								</p>
    							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 align-self-center">
					<div class="top_date_social text-right">
						<div class="paper_date">
							<p><?php echo date('l, F d, Y'); ?></p>
						</div>
						<div class="social1">
							<ul class="inline">
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a target="_blank" href="https://www.youtube.com/channel/UClf0kewyW6qo6rTVqEbrwdg"><i class="fab fa-youtube"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: TOP BAR END :::::::-->
	<div class="border_black"></div>