<div class="video_posts pt30 half_bg60">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading white">
						<h2 class="widget-title">Video News</h2>
					</div>
				</div>
			</div>
			<div class="space-50"></div>
			<div class="viceo_posts_wrap">
				<div class="row">
					<?php $c=1; foreach($video_news as $vnews){ if($c == 1){ ?>
					<div class="col-lg-8">
						<div class="single_post post_type3 post_type11 margintop-60- xs-mb30" id="youtube_playlist">							<iframe id="youtube_frame" width="730" height="411" src="<?php echo 'https://www.youtube.com/embed/'.$vnews['video_id']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>							<div class="single_post_text padding30 fourth_bg">
								<h4><a href="javascript:void(0);">
									<span id="video_title"><?php echo substr($vnews['video_title'],0,200); ?></span>
									</a>
								</h4>
								<div class="">
									<small id="video_date"><?php echo date('F d, Y',strtotime($vnews['created_at'])); ?></small>
								</div>
							</div>
						</div>
					</div>
					<?php $c++; } else { break; } } ?>
					<div class="col-lg-4">
						<div class="popular_carousel_area mb30 md-mt-30">
							<h2 class="widget-title">Popular Posts</h2>
							<div class="popular_carousel owl-carousel nav_style1">
								<!--CAROUSEL START-->
								<div class="popular_items">
									<?php $c=1; foreach($video_news as $vnews){ ?>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="javscript:void(0);" class="youtubeClick" data-link="<?php echo 'https://www.youtube.com/embed/'.$vnews['video_id']; ?>" data-title="<?php echo substr($vnews['video_title'],0,200); ?>" data-date="<?php echo date('F d, Y',strtotime($vnews['created_at'])); ?>">
													<img width="100" height="57" src="https://img.youtube.com/vi/<?php echo $vnews['video_id']; ?>/0.jpg" title="<?php echo substr($vnews['video_title'],0,200); ?>" alt="<?php echo substr($vnews['video_title'],0,200); ?>" /></td>
												</a>
											</div>	<span class="tranding tranding_border">
												<?php echo $c++; ?>
											</span>
										</div>
										<div class="single_post_text">
											<h4>
												<a href="javascript:void(0);" class="youtubeClick" data-link="<?php echo 'https://www.youtube.com/embed/'.$vnews['video_id']; ?>" data-title="<?php echo substr($vnews['video_title'],0,200); ?>" data-date="<?php echo date('F d, Y',strtotime($vnews['created_at'])); ?>">
													<?php echo substr($vnews['video_title'],0,200); ?>
												</a>
											</h4>
											<div class="meta4">	
												<small><?php echo date('F d, Y',strtotime($vnews['created_at'])); ?></small>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<!--CAROUSEL END-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			<script>	var baseUrl = $('#baseUrl').val();	$(document).on('click','.youtubeClick',function(){		$('#video_title').html($(this).data('title'));		$('#video_date').html($(this).data('date'));		$('#youtube_frame').attr('src',$(this).data('link'));	});	</script>