<?php 
//print_r($today_story); die;
$todayNews = $today_story[0]['id'];
?>
<div class="col-xl-4">
    <div class="widget_tab md-mt-30">
        <div class="tab-content">
            <div id="post1" class="tab-pane fade show in active">
                <div class="widget tab_widgets mb20">
                    
                    <?php $c=0; foreach($latest_news as $latestnews){
						if($latestnews['id'] == $todayNews){
							continue;
						}
						?>
                    	<div class="single_post widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="<?php echo base_url('news/').$latestnews['slug'];?>">
                                    	<?php $img = explode(',', $latestnews['media_files']); 
											if(file_get_contents($this->config->item('image_url').'news_images/200X154/'.$img[0])){
												$src = $this->config->item('image_url').'news_images/200X154/'.$img[0];
											} else {
												$src = $this->config->item('image_url').'assets/img/logo/news-36logo_blur.png';
											}
										?>
										<img src="<?php echo $src; ?>" />
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                            	<h4>
                            		<a href="<?php echo base_url('news/').$latestnews['slug'];?>">
                            			<?php echo mb_substr($latestnews['title_hindi'],0,200); ?>
                            		</a>
                            	</h4>
                            	<div class="text-info">
                            		<small><?php echo $this->my_library->time_elapsed_string($latestnews['created_at']);?></small>
                            	</div>
                            </div>
                        </div>
                        <div class="space-10"></div>
                        <div class="border_black"></div>
                        <div class="space-5"></div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</div>