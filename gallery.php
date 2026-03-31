<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Gallery Cosmocare Medical Center & Dermatology Clinic') ?>">
	<meta name="author" content="<?= __t('Gallery Cosmocare Medical Center') ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Gallery - Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="vendor/twentytwenty/twentytwenty.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/style-color-3.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
</head>

<body class="shop-page">
	<!--header-->
	<?php require_once __DIR__ . '/inc/header2.php'; ?>
	<!--//header-->
	<!--page-title-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<span><?= __t('Smiles Gallery') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('Our Clients Stories') ?></div>
					<h1><?= __t('Smiles Gallery') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-3 mb-md-4 max-900">
					<p><?= __t('We love to see our patients smile! Here are some of our best before-and-after pictures,') ?><br><?= __t('all in one fantastic Smile Gallery') ?></p>
				</div>
				<div class="filters-by-category mb-2 mb-lg-4">
					<ul class="option-set justify-content-center" data-option-key="filter">
						<li><a href="#filter" data-option-value="*" class="selected"><?= __t('All') ?></a></li>
						<li><a href="#filter" data-option-value=".category1"><?= __t('Crowns') ?></a></li>
						<li><a href="#filter" data-option-value=".category2"><?= __t('Bridges') ?></a></li>
						<li><a href="#filter" data-option-value=".category3"><?= __t('Dental Implants') ?></a></li>
						<li><a href="#filter" data-option-value=".category4"><?= __t('Cosmetic Filling') ?></a></li>
						<li><a href="#filter" data-option-value=".category5"><?= __t('Lumineers') ?></a></li>
						<li><a href="#filter" data-option-value=".category6"><?= __t('Dentures') ?></a></li>
						<li><a href="#filter" data-option-value=".category7"><?= __t('Porcelain Veneers') ?></a></li>
						<li><a href="#filter" data-option-value=".category8"><?= __t('Diamond Polish') ?></a></li>
					</ul>
				</div>
				<div class="gallery-wrap">
					<div class="loading-content">
						<div class="inner-circles-loader"></div>
					</div>
					<div class="gallery-smiles gallery-isotope" id="gallery">
						<div class="gallery-item category2 category7">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-1-1.jpg" alt="" />
								<img src="images/content/gallery/smile-1-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category1 category5 category8">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-2-1.jpg" alt="" />
								<img src="images/content/gallery/smile-2-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category2 category4 category3">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-3-1.jpg" alt="" />
								<img src="images/content/gallery/smile-3-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category4 category8 category6">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-4-1.jpg" alt="" />
								<img src="images/content/gallery/smile-4-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category3 category7">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-5-1.jpg" alt="" />
								<img src="images/content/gallery/smile-5-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category4 category7 category3">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-6-1.jpg" alt="" />
								<img src="images/content/gallery/smile-6-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category1 category8">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-7-1.jpg" alt="" />
								<img src="images/content/gallery/smile-7-2.jpg" alt="" />
							</div>
						</div>
						<div class="gallery-item category2 category6">
							<div class="twentytwenty-container">
								<img src="images/content/gallery/smile-8-1.jpg" alt="" />
								<img src="images/content/gallery/smile-8-2.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//section-->
		<!--section call us-->
		<div class="section mt-5">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-md-7 d-flex align-items-center">
							<div class="text-center w-100">
								<h2><?= __t('Want the Same') ?> <span class="theme-color"><?= __t('Wonderful Smile?') ?></span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center"><?= __t('We provide advanced, trusted dental care delivered by a dedicated team in our modern practice.') ?></p>
								<div class="mt-2 mt-lg-4 text-center">
									<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>04 379 8747</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 mt-3 mt-md-0 text-center text-lg-left">
							<img src="images/content/banner-callus-2.jpg" alt="" class="shift-right">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--section call us-->
	</div>
	<!--footer-->
	<?php
	$footer_blogs = [
		[
			'img' => 'images/content/footer-post-author-03.jpg',
			'title' => __t('New Doctor On Our Panel'),
			'link' => 'piles-hernia-doctor.html',
			'date' => 'April 1, 2020'
		],
		[
			'img' => 'images/content/footer-post-author-01.jpg',
			'title' => __t('Colored Tooth Filling'),
			'link' => 'tooth-colored-fillings.php',
			'date' => 'August 22, 2020'
		],
		[
			'img' => 'images/content/footer-post-author-02.jpg',
			'title' => __t('PRP Therapy...'),
			'link' => 'prp-therapy.html',
			'date' => 'July 25, 2021'
		],
	];
	$footer_nearby_areas = [
		['name' => __t('Al Hudaiba'),   'url' => 'https://maps.app.goo.gl/wnttf6oqyQYPP5DM6'],
		['name' => __t('Al Satwa'),     'url' => 'https://maps.app.goo.gl/hfRNjstnoc4G5E2VA'],
		['name' => __t('Al Mankhool'),  'url' => 'https://maps.app.goo.gl/XDc9HvpMBcq5Y9cy6'],
		['name' => __t('Jumeirah 1'),   'url' => 'https://maps.app.goo.gl/paAWgw1oZaH6SKwa8'],
		['name' => __t('Al Jafiliya'),  'url' => 'https://maps.app.goo.gl/wEQaXpeeCN6zNfio8'],
		['name' => __t('Al Raffa'),     'url' => 'https://maps.app.goo.gl/EWx3wM4tMUHpCehM7'],
		['name' => __t('yMaids'),       'url' => 'https://www.ymaids.com/']
	];
	?>
	<?php include_once __DIR__ . '/inc/footer.php'; ?>
	<!--//footer-->
</body>

</html>