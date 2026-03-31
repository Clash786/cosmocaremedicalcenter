<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Piles and Hernia specialist surgeon in Dubai by Cosmocare Medical Center & Dermatology Clinic') ?>">
	<meta name="author" content="<?= __t('Cosmocare Medical Center') ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Piles and Hernia Specialist in Dubai - Cosmocare Medical Center') ?></title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
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
	<?php require_once __DIR__ . '/inc/header.php'; ?>
	<!--//header-->
	<!--page-title-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<span><?= __t('Blog') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 aside">
						<div class="blog-posts">
							<div class="blog-post">
								<div class="blog-post-info">
									<div class="post-date">1<span><?= __t('April') ?></span></div>
									<div>
										<h2 class="post-title"><a href="blog-post-page.html"><?= __t('New Doctor On Our Panel') ?></a></h2>
										<div class="post-meta">
											<div class="post-meta-author"><?= __t('by') ?> <a href="#"><i><?= __t('admin') ?></i></a></div>
											<div class="post-meta-social">
											</div>
										</div>
									</div>
								</div>
								<div class="post-image">
									<a href="piles-hernia-doctor.html"><img src="http://pilesherniacenter.com/img/piles_hemorrhoid_treatment.svg" width="100%" alt="piles hernia doctor in Dubai"></a>
								</div>
								<div class="post-teaser"><?= __t('Dr. Murtaza is a Post graduate from the prestigious Kasturba Hospital, Manipal. He has worked under one of the doyens and founders of Laparoscopic Surgery in India, Padmashri Dr. P.K. Chowbey at Sir Ganga Ram Hospital, New Delhi, where he performed a wide array of advanced laparoscopic surgery including advanced Bariatric surgery. He is excellent in all basic and advanced laparoscopic procedures. Over the last 8 years, Dr. Murtaza has been practicing at a highly reputed private hospital in Dubai where he has further honed and perfected his surgical skills. He has developed special interest in the practice of proctology and has been offering various different modalities of treatment for all proctology disorders including piles, fissures and fistula. Besides this, he has been specifically trained to perform all kinds of Laparoscopic Hernia surgeries. He has also trained in surgical Gastroenterology at the prestigious KEM Hospital, Mumbai where he has mastered his upper and lower GI Endoscopy skills.') ?></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 aside-left mt-5 mt-lg-0">
						<div class="side-block">
							<form action="#" class="content-search d-flex">
								<div class="input-wrap">
									<input type="text" class="form-control" placeholder="Keywords">
								</div>
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
						<div class="side-block">
							<h3 class="side-block-title"><?= __t('Categories') ?></h3>
							<ul class="categories-list">
								<li><a href="#"><?= __t('Cosmetic Dentistry') ?></a></li>
								<li><a href="#"><?= __t('General Dentistry') ?></a></li>
								<li><a href="#"><?= __t('Children`s Dentistry') ?></a></li>
								<li><a href="#"><?= __t('Dental Implants') ?></a></li>
								<li><a href="#"><?= __t('Orthodontics') ?></a></li>
								<li><a href="#"><?= __t('Dental Emergency') ?></a></li>
								<li><a href="#"><?= __t('Periodontics') ?></a></li>
								<li><a href="#"><?= __t('Dental Surgery') ?></a></li>
								<li><a href="#"><?= __t('Dental Crowns & Bridges') ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
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
			'title' => __t('Genital Warts Removal'),
			'link' => 'genital-warts-treatment.php',
			'date' => 'August 22, 2020'
		],
		[
			'img' => 'images/content/footer-post-author-02.jpg',
			'title' => __t('Tooth Fairy Traditions...'),
			'link' => '/',
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