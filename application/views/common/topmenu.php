<!--::::: MENU AREA START  :::::::-->
<div class="main-menu" id="header">	<a href="#top" class="up_btn up_btn1"><i class="far fa-chevron-double-up"></i></a>
		<div class="main-nav clearfix is-ts-sticky">
			<div class="container">
				<img width="50" style="float: left;" src="<?php echo 'http://news-36.com/assets/img/logo/News-36logo.png'; ?>" alt="news-36.com logo">
				<div class="row justify-content-between">
					<div class="col-6 col-lg-8">
						<div class="newsprk_nav stellarnav">
							<ul id="newsprk_menu">
								<?php foreach($menus as $menu){ ?>
									<li><a href="<?php echo base_url($menu['link']);?>"><?php echo $menu['name_hindi']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
						
					</div>
					<div class="col-6 col-lg-4 align-self-center">
						<div class="menu_right">
							<!--<div class="users_area">
								<ul class="inline">
									<li class="search_btn"><i class="far fa-search"></i>
									</li>
									<li><i class="fal fa-user-circle"></i>
									</li>
								</ul>
							</div>-->
							<div class="lang d-none d-xl-block">
								<ul>
									<li><a href="#">Hindi <i class="far fa-angle-down"></i></a>
										<!--<ul>
											<li><a href="#">Spanish</a>
											</li>
											<li><a href="#">China</a>
											</li>
											<li><a href="#">Hindi</a>
											</li>
											<li><a href="#">Corian</a>
											</li>
										</ul>-->
									</li>
								</ul>
							</div>
							<div class="temp d-none d-lg-block">
								<div class="temp_wap">
									<div class="temp_icon">
										<img src="<?php echo base_url('assets/img/icon/temp.png'); ?>" alt="">
									</div>
									<h3 class="temp_count">23</h3>
									<p>Raipur</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: MENU AREA END :::::::-->