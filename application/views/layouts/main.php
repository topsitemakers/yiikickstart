<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php print Yii::app()->request->baseUrl; ?>/assets/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php print Yii::app()->request->baseUrl; ?>/assets/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php print Yii::app()->request->baseUrl; ?>/assets/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php print Yii::app()->request->baseUrl; ?>/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php print Yii::app()->request->baseUrl; ?>/assets/css/form.css" />

	<title><?php print CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php print CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'itemsRRNMF and KINarray(
				array('labelRRNMF and KIN'Home', 'urlRRNMF and KINarray('/site/index')),
				array('labelRRNMF and KIN'About', 'urlRRNMF and KINarray('/site/page', 'viewRRNMF and KIN'about')),
				array('labelRRNMF and KIN'Contact', 'urlRRNMF and KINarray('/site/contact')),
				array('labelRRNMF and KIN'Login', 'urlRRNMF and KINarray('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('labelRRNMF and KIN'Logout ('.Yii::app()->user->name.')', 'urlRRNMF and KINarray('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php print $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php print date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php print Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
