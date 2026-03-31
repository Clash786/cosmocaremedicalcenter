<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Consult the top alopecia specialist in Dubai at Cosmocare Medical Center. Expert treatments for hair loss, scalp conditions, and hair restoration. Get personalized care from our dermatology experts. Call 04 379 8747 or email info@cosmocaremedicalcenter.com.') ?>">
	<meta name="keywords" content="<?= __t('Alopecia specialist Dubai, Hair loss treatment Dubai, Dermatologist Dubai, Hair restoration Dubai, Scalp treatment Dubai, Dermatology clinic Dubai, Hair thinning treatment Dubai') ?>">
	<meta name="author" content="<?= __t('Cosmocare Medical Center, Dubai') ?>" />
	<meta name="format-detection" content="telephone=no">
	<title><?= __t('Alopecia Specialist in Dubai | Hair Loss Treatment at Cosmocare Medical Center') ?></title>
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
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<a href="our-specialist.html"><?= __t('Our Specialists') ?></a>
						<span><?= __t('Dr. Murtuza Bandukwala') ?></span>
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
						<div class="mt-3 mt-md-5"></div>
						<table class="table doctor-page-table">

							<tr>
								<td><?= __t('Speciality') ?></td>
								<td><?= __t('Dermatologist & Alopecia Specialist') ?></td>
							</tr>
							<tr>
								<td><?= __t('Degrees') ?></td>
								<td><?= __t('MD Dermatology, Trichology Certification') ?></td>
							</tr>
							<tr>
								<td><?= __t('Areas of Expertise') ?></td>
								<td>
									<ul class="marker-list-md">
										<li><?= __t('Alopecia Diagnosis and Treatment') ?></li>
										<li><?= __t('PRP Therapy for Hair Regrowth') ?></li>
										<li><?= __t('Mesotherapy for Hair Loss') ?></li>
										<li><?= __t('Scalp and Follicle Health Management') ?></li>
										<li><?= __t('Hair Restoration and Regeneration Therapies') ?></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td><?= __t('Office') ?></td>
								<td><?= __t('Cosmocare Medical Center, Dubai') ?></td>
							</tr>
						</table>

						<!-- Sidebar Related Pages Start -->
						<div class="sidebar mt-4">
							<h3 class="mb-3 theme-color"><?= __t('Explore More Dermatology Specialists in Dubai') ?></h3>
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link" href="dermatologist.php"><?= __t('Dermatologist in Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="best-dermatologist-for-hair-loss.php"><?= __t('Best Dermatologist for Hair Loss in Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="basko-dermatology-dubai.php"><?= __t('Basko Dermatology Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-care-specialist-dubai.php"><?= __t('Skin Care Specialist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="moles-removal-specialist-dubai.php"><?= __t('Moles Removal Specialist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="alopecia-specialist-dubai.php"><?= __t('Alopecia Specialist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-care-doctor-dubai.php"><?= __t('Skin Care Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="dermatology-and-skin-cancer-center-dubai.php"><?= __t('Dermatology & Skin Cancer Center Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="rapid-herpes-test-dubai.php"><?= __t('Rapid Herpes Test Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="dermatologist-hair-specialist-dubai.php"><?= __t('Dermatologist Hair Specialist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="same-day-herpes-test-dubai.php"><?= __t('Same Day Herpes Test Dubai') ?></a></li>

								<li class="nav-item"><a class="nav-link" href="laser-wart-removal.php"><?= __t('Laser Wart Removal Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-cancer-moles-removal.php"><?= __t('Skin Cancer Moles Removal Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="facial-wart-removal.php"><?= __t('Facial Wart Removal Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-care-specialist.php"><?= __t('Skin Care Specialist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="std-lab-testing.php"><?= __t('Std Lab Testing Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="herpes-testing.php"><?= __t('Herpes Testing Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="dermatologist-doctor.php"><?= __t('Dermatologist Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="trichomoniasis-test.php"><?= __t('Trichomoniasis Test Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="cosmetic-skin-clinic.php"><?= __t('Cosmetic Skin Clinic Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="10-panel-std-test.php"><?= __t('10 Panel Std Test Dubai') ?></a></li>

								<li class="nav-item"><a class="nav-link" href="plasma-lift-dubai.php"><?= __t('Plasma Lift Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="large-pores-treatment-dubai.php"><?= __t('Large Pores Treatment Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="test-for-trichomoniasis-dubai.php"><?= __t('Test For Trichomoniasis Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="alopecia-doctor-dubai.php"><?= __t('Alopecia Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-specialist-doctor-dubai.php"><?= __t('Skin Specialist Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="face-skin-doctor-dubai.php"><?= __t('Face Skin Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="std-checkup-dubai.php"><?= __t('STD Checkup Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-specialist-clinic-dubai.php"><?= __t('Skin Specialist Clinic Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="full-std-screening-dubai.php"><?= __t('Full STD Screening Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="rosacea-laser-treatment-dubai.php"><?= __t('Rosacea Laser Treatment Dubai') ?></a></li>

								<li class="nav-item"><a class="nav-link" href="skin-resurfacing-laser-dubai.php"><?= __t('Skin Resurfacing Laser Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="skin-allergy-doctor-dubai.php"><?= __t('Skin Allergy Doctor Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="std-blood-test-panel-dubai.php"><?= __t('STD Blood Test Panel Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="full-std-panel-dubai.php"><?= __t('Full STD Panel Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="rapid-gonorrhea-test-dubai.php"><?= __t('Rapid Gonorrhea Test Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="dermatologist-blackhead-removal-dubai.php"><?= __t('Dermatologist Blackhead Removal Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="dark-lips-treatment-by-dermatologist-dubai.php"><?= __t('Dark Lips Treatment By Dermatologist Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="std-appointment-dubai.php"><?= __t('STD Appointment Dubai') ?></a></li>
								<li class="nav-item"><a class="nav-link" href="keloid-removal-specialist-dubai.php"><?= __t('Keloid Removal Specialist Dubai') ?></a></li>


							</ul>
						</div>

						<!-- Sidebar Related Pages End -->

					</div>


					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="doctor-info mb-3 mb-lg-4">
							<div class="doctor-info-name">
								<h4><?= __t('Dr. Murtuza Bandukwala') ?></h4>
								<h6><?= __t('Alopecia Specialist & Consultant Dermatologist') ?></h6>

							</div>
							<div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a> / <a href="tel:+43536164">04 353 6164</a></div>
							<div class="doctor-info-social">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
							</div>
						</div>
						<p><?= __t('Dr. Murtuza Bandukwala is a board-certified dermatologist and a leading') ?> <b><?= __t('Alopecia Specialist') ?></b> <?= __t('at Cosmocare Medical Center Dubai. With extensive experience in dermatology and hair restoration, he provides advanced solutions for various types of hair loss, including androgenetic alopecia, patchy baldness, and stress-related hair thinning. Dr. Murtuza focuses on personalized, evidence-based treatments such as PRP therapy, mesotherapy, and scalp rejuvenation to promote healthy and natural hair growth.') ?></p>
						<p><?= __t('As part of the expert team at Cosmocare Medical Center, Dr. Murtuza Bandukwala identifies the root causes of hair loss  whether hormonal, nutritional, or genetic  and develops comprehensive treatment plans tailored to each patient. His commitment to medical innovation and patient-centered care ensures the best possible outcomes for those seeking professional alopecia and dermatology treatments in Dubai.') ?></p>
						<div class="mt-4 mt-lg-6"></div>
						<div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab1">
							<h5 class="collapse-title"><?= __t('Alopecia Treatments by') ?> <span class="theme-color text-nowrap"><?= __t('Dr. Murtuza Bandukwala') ?></span></h5>
							<div class="ml-auto"><i class="icon-bottom"></i></div>
						</div>
						<div id="tab1" class="collapse show">
							<div class="pb-4 pb-lg-6">
								<div class="row row-sm-space pt-2">
									<div class="col-sm-4"><img src="images/content/alopecia-specialist-dubai1.jpg" class="img-fluid" alt="Expert Alopecia Treatments in Dubai"></div>
									<div class="col-sm-4"><img src="images/content/alopecia-specialist-dubai2.jpg" class="img-fluid" alt="Expert Alopecia Treatments in Dubai"></div>
									<div class="col-sm-4"><img src="images/content/alopecia-specialist-dubai.jpg" class="img-fluid" alt="Expert Alopecia Treatments in Dubai"></div>

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
									<div class="testimonial-author"><span class="testimonial-name">- Wilmer Stevenson,</span> <span class="testimonial-position"><?= __t('Creative manager') ?></span></div>
								</div>
								<p><?= __t('I was struggling with severe hair thinning, but after consulting Dr. Murtuza Bandukwala at Cosmocare Medical Center, I started seeing noticeable hair regrowth within a few sessions. His expertise in alopecia treatments and personalized approach made a huge difference. I highly recommend him for anyone dealing with hair loss.') ?></p>
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