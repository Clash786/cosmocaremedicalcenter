<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Testimonials Cosmocare Medical Center & Dermatology Clinic') ?>">
	<meta name="author" content="<?= __t('Testimonials, Cosmocare Medical Center') ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Testimonials - Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
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
						<span><?= __t('Testimonials') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('What People Says') ?></div>
					<h1><?= __t('Testimonials') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="rating-box">
					<div class="rating-number">5</div>
					<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
					<div><?= __t('Average customer rating') ?></div>
				</div>
				<div class="text-center mb-3 mb-md-4 max-900">
					<p><?= __t('Please take a look below at some of the recent testimonials we have received from our patients. We welcome patient feedback to let us know how we can improve – please send us details of your experience.') ?></p>
					<p><a href="#writeReview" class="btn btn-hover-fill js-wrire-review"><i class="icon-right-arrow"></i><span><?= __t('Write Your Review') ?></span><i class="icon-right-arrow"></i></a></p>
				</div>
				<div class="row">
					<div class="col-sm">
						<div class="testimonial-wrap">
							<div class="testimonial text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-1-1.jpg" alt="">
									<img src="images/content/testimonials-author-1-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I\'d been avoiding the dentist for years due to bad experiences. Then due to a gum infection I had to make an emergency appointment at Cosmocare Medical Center. I have been a patient ever since. My dentist is very reassuring and very helpful.') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('– Gerald Blunt,') ?></span> <span class="testimonial-position"><?= __t('Development specialist') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial testimonial-bg1 text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-2-1.jpg" alt="">
									<img src="images/content/testimonials-author-2-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I am so grateful for the opportunity to come to the Cosmocare Medical Center. The prices are more than fair and my mouth is already doing much better. Everyone is helpful') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Tee Ragland,') ?></span> <span class="testimonial-position"><?= __t('Mechanic') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial testimonial-bg2 text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-3-1.jpg" alt="">
									<img src="images/content/testimonials-author-3-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Invisible Braces') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I am so grateful for the opportunity to come to the Cosmocare Medical Center. The prices are more than fair and my mouth is already doing much better. Everyone is helpful') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Susan Weidner,') ?></span> <span class="testimonial-position"><?= __t('Beautician') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial testimonial-bg1 text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-4-1.jpg" alt="">
									<img src="images/content/testimonials-author-4-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I am writing to thank you for solving my recent dental problems. When my dentist retired I was not having any luck in finding a suitable replacement dentist with whom I felt comfortable. Over a period of time, one of my crowns disintegrated and I was very delinquent in taking action to have it replaced. Your took your time to encourage me to visit you and even saw me on a Saturday. I am delighted with the work you carried out, and after a visit to your lovely hygienist Yulli my pearlies are now sparkling again I would be delighted to recommend you to anyone who is looking for a super dentist.') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Sheila Walls,') ?></span> <span class="testimonial-position"><?= __t('Analyst') ?></span></div>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="testimonial-wrap">
							<div class="testimonial testimonial-bg2 text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-5-1.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Skin Dots') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I came to Dr. Murtuza several months ago with a lot of anxiety because of some skin dots. Initially, I was thinking about terrible things. The doctor was very reassuring, he helped me to calm down and prescribed a medicine that eased my condition a lot.') ?></p>
									<p><?= __t('Many thanks to Dr. Murtuza for both his professionalism and compassion!') ?></p>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Alex Igonin,') ?></span> <span class="testimonial-position"><?= __t('Palm Jumeirah') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-6-1.jpg" alt="">
									<img src="images/content/testimonials-author-6-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('My treatment was wonderful. I had no more than a moment of discomfort, and absolutely no pain. It was most reassuring to overhear comments to by the professors about her proficiency. It felt like we were all on a team together and we were victorious.') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Amanda Butcher,') ?></span> <span class="testimonial-position"><?= __t('Dealer') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial testimonial-bg1 text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-7-1.jpg" alt="">
									<img src="images/content/testimonials-author-7-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I would like to thank you for your remarkable skills over the past few years in truly giving me a ‘smile to last a century’ ! As you know, my teeth could have been in better shape when you first saw them, but the care, skill and patience with which you have dealt with them has been extraordinary – for which I am sincerely grateful! It goes without saying there is no one I would not') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Elizabeth Watkins,') ?></span> <span class="testimonial-position"> <?= __t('Editor') ?></span></div>
							</div>
						</div>
						<div class="testimonial-wrap">
							<div class="testimonial text-center">
								<div class="testimonial-photo">
									<img src="images/content/testimonials-author-8-1.jpg" alt="">
									<img src="images/content/testimonials-author-8-2.jpg" alt="">
								</div>
								<div class="testimonial-title"><?= __t('Porcelain Veneers') ?></div>
								<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
								<div class="testimonial-text">
									<p>
										<?= __t('I am dental-phobic. This is the BEST dental experience I have ever had') ?>
									</p>
								</div>
								<div class="testimonial-author"><span class="testimonial-name"><?= __t('Marian Mathis,') ?></span> <span class="testimonial-position"><?= __t('Actor') ?></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-5 mt-md-8" id="writeReview">
					<h3><?= __t('Write a Review') ?></h3>
					<div class="review-form-wrap opened mt-lg-3">
						<form class="contact-form pb-0" id="reviewForm" method="post" novalidate="novalidate">
							<div class="row align-items-center">
								<div class="col-auto">
									<label><?= __t('Click For Rating') ?></label>
								</div>
								<fieldset class="review-rating">
									<input type="radio" id="star5" name="rating" value="5">
									<label class="full" for="star5" title="5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half">
									<label class="half" for="star4half" title="4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4">
									<label class="full" for="star4" title="4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half">
									<label class="half" for="star3half" title="3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3">
									<label class="full" for="star3" title="3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half">
									<label class="half" for="star2half" title="2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2">
									<label class="full" for="star2" title="2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half">
									<label class="half" for="star1half" title="1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1">
									<label class="full" for="star1" title="1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half">
									<label class="half" for="starhalf" title="0.5 stars"></label>
								</fieldset>
							</div>
							<div class="row mt-1">
								<div class="col-lg-8">
									<input type="text" class="form-control" name="name" placeholder="Your name*">
									<div class="mt-15">
										<input type="text" class="form-control" placeholder="Month of Arrival">
									</div>
									<div class="mt-15">
										<textarea class="form-control" name="review" placeholder="Review"></textarea>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span><?= __t('Send Review') ?></span><i class="icon-right-arrow"></i></button>
									</div>
								</div>
							</div>
						</form>
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