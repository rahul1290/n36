<div class="col-xl-4">
    <div class="widget_tab md-mt-30">
        <div class="tab-content">
            <div id="post1" class="tab-pane fade show in active">
                <div class="widget tab_widgets mb30">
                    
                    <?php $c=0; foreach($latest_news as $latestnews){ ?>
                    	<div class="single_post widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                    	<?php $img = explode(',', $latestnews['media_files']); ?>
                                        <img src="<?php echo base_url('/image_resize.php');?>?path=<?php echo 'news_images/'.$img[0]; ?>&width=200&height=154">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                            	<h4>
                            		<a href="<?php echo base_url('news/').$latestnews['slug'];?>">
                            			<?php
                            			$pos = strpos($latestnews['title_hindi'],' ',200);
                            			echo substr($latestnews['title_hindi'],0,$pos );
	                            		 ?>
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