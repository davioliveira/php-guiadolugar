<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<base href="<?php echo Router::url('/', true); ?>">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('bootstrap');
	echo $this->Html->css('bootstrap-responsive');
	echo $this->Html->css('font-awesome');
	echo $this->Html->css('theme');
	echo $this->Html->css('colors/color-default');
	echo $this->Html->css('main');


	echo $this->Html->script('underscore');
	echo $this->Html->script('jquery');
	echo $this->Html->script('jquery.ui');
	echo $this->Html->script('angular');
	echo $this->Html->script('bootstrap');
	echo $this->Html->script('theme');
	echo $this->Html->script('main');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<?php echo $this->Html->script('html5shiv'); ?>
	<![endif]-->
</head>

<body class="user_img_layout">
<div class="content_wrapper" id="main-container" style="float:none; margin: 0 auto">
	<div>
		<div class="content">
			<div class="span10" style="float:none; margin: 0 auto">
				<div class="center-text">
					<img src="img/logo.png">
				</div>
				<div class="hero-unit">
					<div class="search-letters">
						<a class="arrow arrow-left" href="javascript:;">
							<i class="icon icon-double-angle-left"></i>
						</a>

						<div class="search-letters-wrapper">
							<?php foreach ($search_letters as $letter): ?>
								<a href="#" class="search-letter btn"><?php echo $letter ?></a>
							<?php endforeach ?>
						</div>
						<a class="arrow arrow-right" href="javascript:;">
							<i class="icon icon-double-angle-right"></i>
						</a>
					</div>
					<form class="search">
						<div class="big-search-box">
							<div class="big-search-text-wrapper">
								<input type="text" class="big-search-text">
								<button class="btn btn-primary big-search-button btn-purple">ENCONTRAR</button>
							</div>
						</div>
					</form>
				</div>
				<div style="text-align: left">
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
				</div>
				<hr>
				<footer>
					<p>&copy; Company 2013</p>
				</footer>
			</div>
		</div>
	</div>
</div>
</body>
</html>

