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
            						
    			</div>
    			<div class="space-30"></div>
    			<div class="row">
    				<p>About Us</p>
    				<p>एक सम्मानित विश्वस्तरीय सूचना स्रोत बनने के साथ-साथ पत्रकारिता के क्षेत्र में नैतिक मानकों पर पाठकों का विश्वास बनाए रखना है। जो नम्य और ज्ञानार्जन की समर्थक हो। परिवर्तन के प्रति दूरदर्शी एवं सकारात्मक सोच हासिल करना।</p>	
    				
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