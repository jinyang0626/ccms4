<div id="header">

		<!-- Logo -->
	<div class="eight columns">
		<div id="logo" >
			<a href="#"><img src="<?php echo VIEWPATH; ?>/home/images/logo.png" alt="logo" /></a>
			<div id="tagline" class="clearfix">九华阁 - 品质保证，值得信赖！</div>
		</div>
	</div>

	<!-- Social / Contact -->
	<div class="eight columns">
		
		<!-- Contact Details -->
		<div id="contact-details">
			<ul>
				<?php if($this->session->userdata('user_id')){ ?>
					<li><i class="mini-ico-user"></i><a href="<?php echo site_url('home/my'); ?>">我的账户</a> </li>
					<li><i class="mini-ico-th-list"></i> <a href="<?php echo site_url('home/shoppingcart'); ?>">查看询价单</a></li>
                    <li><i class="mini-ico-off"></i> <a href="<?php echo site_url('home/logout'); ?>">退出登录</a></li>
				<?php } else { ?>
					<li><i class="mini-ico-user"></i><a href="<?php echo site_url('home/login'); ?>">登录 / 注册</a> </li>
					<li><i class="mini-ico-th-list"></i> <a href="<?php echo site_url('home/login'); ?>">查看询价单</a></li>
				<?php } ?>
			</ul>
		</div>

	</div>

</div>