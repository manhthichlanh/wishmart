
<?php
	if (isset($_SESSION['user'])) {
		$user_name = $_SESSION['user']['ten_kh'];
		$image = $CONTENT_URL."/images/users/".$_SESSION['user']['hinh'];
	} 
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="overflow: hidden;">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?=$image?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?=$user_name?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Tìm Kiếm">
			</div>
		</form>
		<ul class="nav menu">
            <?php

                $nav_menu = array(
                    '><a href='.$ADMIN_URL.'/trang-chinh><em class="bi bi-house-door">&nbsp;</em> Trang Chủ</a></li>',
					'><a href='.$ADMIN_URL.'/thong-ke><em class="bi bi-bar-chart-line">&nbsp;</em> Thống Kê</a></li>',
                    '><a href="'.$ADMIN_URL.'/danh-muc"><em class="bi bi-card-list">&nbsp;</em> Danh Mục</a></li>',
					'><a href="'.$ADMIN_URL.'/thuong-hieu"><em class="bi bi-tags">&nbsp;</em> Thương Hiệu</a></li>',
                    '><a href="'.$ADMIN_URL.'/san-pham"><em class="bi bi-box2-heart">&nbsp;</em> Sản Phẩm</a></li>',
                    '><a href="'.$ADMIN_URL.'/khach-hang"><em class="bi bi-person-square">&nbsp;</em> Khách Hàng</a></li>',
                    '><a href="'.$ADMIN_URL.'/don-hang"><em class="bi bi-receipt">&nbsp;</em> Đơn Hàng</a></li>',
                    '><a href="'.$ADMIN_URL.'/index.php?act=dangxuat"><em class="fa fa-power-off">&nbsp;</em> Đăng Xuất</a></li>'
                );
                for ($i=0; $i < count($nav_menu); $i++) { 
                    if ($PAGE_INDEX==$i) {
                        echo "<li class='active'".$nav_menu[$i];
                    } else {
                        echo "<li".$nav_menu[$i];
                    }
                }
             
            ?>

		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><?=$PAGE_NAME?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?=$PAGE_NAME?></h1>
			</div>
		</div><!--/.row-->