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
						<a href="our-specialist.html"><?= __t('Our Specialists') ?></a>
						<span><?= __t('Dr. Frank Bigham') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row">
					<div class="col-md">
						<div class="doctor-page-photo text-center">
							<img src="images/content/doctor-page-photo.jpg" class="img-fluid" alt="">
						</div>
						<div class="mt-3 mt-md-5"></div>
						<table class="table doctor-page-table">
							<tr>
								<td><?= __t('Speciality') ?></td>
								<td><?= __t('Dentist') ?></td>
							</tr>
							<tr>
								<td><?= __t('Degrees') ?></td>
								<td><?= __t('College of Surgeons') ?></td>
							</tr>
							<tr>
								<td><?= __t('Areas of Expertise') ?></td>
								<td>
									<ul class="marker-list-md">
										<li><?= __t('Gygienology') ?></li>
										<li><?= __t('Immunology') ?></li>
										<li><?= __t('Internal Medicine') ?></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td><?= __t('Office') ?></td>
								<td><?= __t('12 General Office') ?></td>
							</tr>
							<tr>
							</tr>
						</table>
					</div>
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="doctor-info mb-3 mb-lg-4">
							<div class="doctor-info-name">
								<h3><?= __t('Dr. Frank Bigham') ?></h3>
								<h6><?= __t('Associate Dentist') ?></h6>
							</div>
							<div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a> / <a href="tel:+43536164">04 353 6164</a></div>
							<div class="doctor-info-social">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
							</div>
						</div>
						<p><?= __t('Dr. Frank Bigham received his Doctorate in Medical Dentistry from Hospital, USA in 2003. Following his professional qualification, he practiced maxillofacial surgery at Hospital and the Royal Hospital. Dr. Bigham gained membership of the College of Surgeons of USA in 2007. He has over 10 years of experience working as a general dental practitioner in both Surrey and central. Dr. Bigham enjoys all aspects of his field especially cosmetic dentistry and prosthetics. Passionate in learning languages, he is fluent in both English and Arabic, and also speaks French and some Italian. His interests include sports and history.') ?></p>
						<p><?= __t('When asked what makes dentistry so rewarding, he said "My job is rewarding because sometimes even the simplest treatment can change the patient\'s confidence in himself/herself and I feel that I am part of a larger global healthcare promotion program."') ?></p>
						<ul class="marker-list-md">
							<li><i><?= __t('Member of the Royal College of Surgeons of USA') ?></i></li>
							<li><i><?= __t('Member of the General Dental Council (USA)') ?></i></li>
						</ul>
						<div class="mt-4 mt-lg-6"></div>
						<div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab1">
							<h5 class="collapse-title"><?= __t('Dental Treatments of') ?> <span class="theme-color text-nowrap"><?= __t('Dr. Bigham') ?></span></h5>
							<div class="ml-auto"><i class="icon-bottom"></i></div>
						</div>
						<div id="tab1" class="collapse show">
							<div class="pb-4 pb-lg-6">
								<div class="row row-sm-space pt-2">
									<div class="col-sm-4"><img src="images/content/doctor-page-portfolio-1.jpg" class="img-fluid" alt=""></div>
									<div class="col-sm-4"><img src="images/content/doctor-page-portfolio-2.jpg" class="img-fluid" alt=""></div>
									<div class="col-sm-4"><img src="images/content/doctor-page-portfolio-3.jpg" class="img-fluid" alt=""></div>
								</div>
							</div>
						</div>
						<div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab2">
							<h5 class="collapse-title"><?= __t('What Patients Say') ?></h5>
							<div class="ml-auto"><i class="icon-bottom"></i></div>
						</div>
						<div id="tab2" class="collapse show">
							<div class="pb-4">
								<div class="doctor-review-row mb-1">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<div class="testimonial-author"><span class="testimonial-name"><?= __t('- Wilmer Stevenson,') ?></span> <span class="testimonial-position"><?= __t('Creative manager') ?></span></div>
								</div>
								<p><?= __t('When asked what makes dentistry so rewarding, he said "My job is rewarding because sometimes even the simplest treatment can change the patient\'s confidence in himself/herself and I feel that I am part of a larger global healthcare promotion program."') ?></p>
							</div>
						</div>
						<div class="d-flex flex-column flex-sm-row mt-lg-2">
							<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span><?= __t('Book Consultation') ?></span><i class="icon-right-arrow"></i></a>
							<a href="schedule.html" class="btn "><i class="icon-right-arrow"></i><span><?= __t('Timetable') ?></span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1"><?= __t('Our Specialists') ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row specialist-carousel js-specialist-carousel">
					<div class="col-sm-6 col-md-4">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-07.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html"><?= __t('Dr. William Gardner') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Implantologist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr William Gardner completed her undergraduate dental degree at the University of Western Australia in 2003') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:04 3798747">04 3798747</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="dentist.html"><img src="images/content/doctor-08.jpg" class="img-fluid" alt="General Dentist Dr. Lavanya George in Dubai, UAE"></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html"><?= __t('Dr. Mayra Hastings') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Orthodontist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('With years of experience she prides herself on providing minimally invasive periodontal care for patients') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:04 3798747">04 3798747</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="general-dentist.html"><img src="images/content/doctor-09.jpg" class="img-fluid" alt="general dentist in satwa dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html"><?= __t('Dr. Billy Logan') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Cosmetic Dentist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Working over the past 18 years in both private practice and teaching at the universities inspired an interest in Oral Medicine') ?> </p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:04 3798747">04 3798747</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="cosmetic-dentist.html"><img src="images/content/doctor-06.jpg" class="img-fluid" alt="General & Cosmetic Dentist in Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html"><?= __t('Dr. Jennifer Foster') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Oral Health Therapist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr. Jennifer Foster has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+04 3798747">04 3798747</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
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