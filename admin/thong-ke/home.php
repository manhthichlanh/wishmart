		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>

							

							<div class="large danh_muc"><?=tong_thanh_phan("don_hang","","","")?></div>
							<div class="text-muted">Tổng đơn hàng</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check color-orange"></em>
							<div class="large thuong_hieu"><?=tong_thanh_phan("don_hang","trang_thai"," ","Hoàn thành")?></div>
							<div class="text-muted">Tổng đơn hàng hoàn thành</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-rocket color-teal"></em>
							<div class="large san_pham"><?=tong_thanh_phan("don_hang","trang_thai","not","Hoàn thành")?></div>
							<div class="text-muted">Tổng đơn hàng đang xử lý</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-money color-red"></em>
							<?php 
								$dt = floatval(tong_doanh_thu()) ;
								echo '<div class="large don_hang">'.number_format($dt, 0 , "," ,".").'</div>';
							?>
							<div class="text-muted">Tổng doanh thu</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Thống kê doanh theo thời gian
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="<?=$ADMIN_URL?>/thong-ke/index.php?thoi_gian=now">
												<em class="fa fa-cog"></em> Theo ngày gần nhất.
											</a></li>
											<li class="divider"></li>
											<li><a href="<?=$ADMIN_URL?>/thong-ke/index.php?thoi_gian=7">
												<em class="fa fa-cog"></em> Theo 7 ngày gần nhất.
											</a></li>
											<li class="divider"></li>
											<li><a href="<?=$ADMIN_URL?>/thong-ke/index.php?thoi_gian=30">
												<em class="fa fa-cog"></em> Theo 30 ngày gần nhất.
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Biểu Đồ Tròn
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="<?=$ADMIN_URL?>/thong-ke/index.php?list_dm_sp">
												<em class="fa fa-cog"></em> Chi tiết
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Biểu Đồ Bánh Donut
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="<?=$ADMIN_URL?>/thong-ke/index.php?list_th_sp">
												<em class="fa fa-cog"></em> Chi tiết
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="doughnut-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->