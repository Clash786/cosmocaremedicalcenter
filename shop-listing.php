<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Dermatology, Warts Removal, Fractional Laser, Botox Fillers, Laser hair Removal, Mole Removal Dental Clinic in Dubai. Call at 04 379 8747 or mail at info@cosmocaremeidcalcenter.com. Cosmocare Medical Center & Dermatology Clinic') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Medin - Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="vendor/nouislider/nouislider.css" rel="stylesheet">
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
	<?php require_once __DIR__ . '/inc/header1.php'; ?>
	<!--//header-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<span><?= __t('Online Shop') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1><?= __t('Online Shop') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container mt-3 mt-lg-5">
				<div class="row">
					<div class="col-md-4 col-lg-3 column-filters">
						<div class="column-filters-inside">
							<div class="side-block">
								<h3 class="side-block-title"><?= __t('Categories') ?></h3>
								<ul class="category-list">
									<li><a href="#"><?= __t('Restoratives') ?></a></li>
									<li><a href="#"><?= __t('Bonding agents') ?></a></li>
									<li><a href="#"><?= __t('Dental cements') ?></a></li>
									<li class="active"><?= __t('Impression materials') ?></li>
									<li><a href="#"><?= __t('Preventive') ?></a></li>
									<li><a href="#"><?= __t('Crown & Bridge') ?></a></li>
									<li><a href="#"><?= __t('Esthetic & Cosmetic') ?></a></li>
									<li><a href="#"><?= __t('X-Rays') ?></a></li>
								</ul>
							</div>
							<div class="side-block">
								<h3 class="side-block-title"><?= __t('Price') ?></h3>
								<div class="range">
									<div id="rangeSlider1"></div>
									<p><?= __t('Price: ') ?><span id="number-1-2"></span> - <span id="number-1-1"></span></p>
								</div>
							</div>
							<div class="side-block">
								<h3 class="side-block-title"><?= __t('Popular') ?></h3>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html"><?= __t('Active Wow Teeth Whitening Charcoal Powder') ?></a></h3>
										<div class="price"><?= __t('$38.88') ?></div>
									</div>
								</div>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html"><?= __t('Electric Toothbrush') ?></a></h3>
										<div class="price"><?= __t('$39.97') ?></div>
									</div>
								</div>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-3.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html"><?= __t('Oral B Replacement Brush Heads') ?><br><?= __t('(5 Pack)') ?></a></h3>
										<div class="price"><?= __t('$19.99') ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-9">
						<div class="filters-row align-items-center">
							<div class="filters-row-left"><span><?= __t('Showing 1–9 of 18 results') ?></span>
								<div class="form-inline">
									<div class="select-wrapper">
										<select name="sorting">
											<option value=""><?= __t('Default Sorting') ?></option>
											<option value=""><?= __t('Sort By Price') ?></option>
											<option value=""><?= __t('Sort By Name') ?></option>
										</select>
									</div>
								</div>
							</div>
							<div class="filters-row-right d-flex align-items-center">
								<span><?= __t('Pages:') ?></span>
								<ul class="pagination justify-content-center pl-1">
									<li class="page-item active"><a class="page-link" href="#"><?= __t('1') ?></a></li>
									<li class="page-item"><a class="page-link" href="#"><?= __t('2') ?></a></li>
								</ul>
							</div>
						</div>
						<div class="prd-grid">
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-1.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Oral B Replacement Brush Heads (5 Pack)') ?></a></h3>
									<div class="price"><?= __t('$39.97') ?></div>
									<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div> <a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-2.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Active Wow Teeth Whitening Charcoal Powder') ?></a></h3>
									<div class="price"><?= __t('$38.88') ?></div>
									<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-3.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Electric Toothbrush') ?></a></h3>
									<div class="price"><?= __t('$49.97') ?></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-4.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('GUM Special Go-betweens Proxabrush Refills') ?></a></h3>
									<div class="price"><?= __t('$19.97') ?></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-5.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Waterpik ADA Accepted WP-660 Aquarius Water Flosser') ?></a></h3>
									<div class="price"><?= __t('$59.98') ?></div>
									<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-6.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('5 Pack Charcoal Toothbrush') ?></a></h3>
									<div class="price"><?= __t('$5.26') ?></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-7.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Oral-B  Glide Pro-Health Comfort Plus Mint Flavor Floss') ?></a></h3>
									<div class="price"><?= __t('$5.79') ?></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-8.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('Cool Mint Listerine Antiseptic Mouthwash') ?></a></h3>
									<div class="price"><?= __t('$5.98') ?></div>
									<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="shop-product.html"><img src="images/product/prd-9.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="shop-product.html"><?= __t('5 Pack Charcoal Toothbrush') ?></a></h3>
									<div class="price"><?= __t('$11.62') ?></div>
									<a href="#" class="btn"><i class="icon-cart"></i><?= __t('Add To Cart') ?><i class="icon-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<ul class="mt-5 pagination justify-content-center">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><span class="page-link"><?= __t('...') ?></span></li>
							<li class="page-item"><a class="page-link" href="#">15</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
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