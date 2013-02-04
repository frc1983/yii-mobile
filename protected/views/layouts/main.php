<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" class="modern" lang="en" xml:lang="en"> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Your Name" />

	<link rel="canonical" href="http://yourdomai.com" />
    <meta name="description" content="Creative Web Design, Branding and Illustrations for people just like You." />
  
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=360dpi, initial-scale=1.0">
  
	<!-- Application Framework -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/globals.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/typography.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ui.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/forms.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/orbit.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reveal.css">
	
	<!-- Application Styles -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css">
	
    <!-- Old IE -->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css">
	<![endif]-->

	<!-- ImgSizer -->
	<script src="js/imgsizer.js"></script>
  
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
  
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>

	<!-- iOS -->
	<link rel="apple-touch-icon-precomposed" href="images/icons/apple-touch-icon.png" />
	
	<!--Microsoft -->
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<!--div id="header">
		<div id="logo"><?php /*echo CHtml::encode(Yii::app()->name);*/ ?></div>
	</div--><!-- header -->
	<header class="page-header" id="top">
		<section class="top-bar">
		  <div class="row">
			<div class="four phone-three columns">
				<div id="logo">
					<a class="logo block ir" href="/" title="<?php echo CHtml::encode(Yii::app()->name); ?>" rel="follow">
						<?php echo CHtml::encode(Yii::app()->name); ?>
					</a>
				</div>
			</div>
			
			<div class="eight columns hide-on-phones">
			  <nav class="primary-links">
				  <?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array('class'=>'inline-list text-right'),
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
			  </nav>
			</div>
			
			<div class="phone-one show-on-phones text-right">
			  <a class="mobile-nav block ir right" href="#navi">Navigate</a>
			</div>
		  </div>
		</section>
    </header>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

    <!-- Included JS Files -->
	<!-- Combine and Compress These JS Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.reveal.js"></script>
	<script src="js/jquery.orbit-1.4.0.js"></script>
	<script src="js/forms.jquery.js"></script>
	<script src="js/jquery.customforms.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/jquery.tooltips.js"></script>
	<!-- End Combine and Compress These JS Files -->
	<script src="js/app.js"></script>
	
</body>
</html>
