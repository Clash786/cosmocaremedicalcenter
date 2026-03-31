<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Meso Eyes Treatment') ?> <?php include 'price.php'; echo "$meso"; ?> <?= __t('in our') ?> <?php include 'price.php'; echo "$company"; ?> <?= __t('Dubai, feel free to call us at ') ?><?php include 'price.php'; echo "$contact"; ?> <?= __t('(Satwa) / ') ?><?php include 'price.php'; echo "$contactjumeirah"; ?> <?= __t('(Jumeirah 2) or email at') ?> <?php include 'price.php'; echo "$email"; ?> <?= __t('for BOOK an appointment.') ?>" />
	<meta name="keywords" content="<?php include 'price.php'; echo "$meso_keywords"; ?>, <?= __t('Meso Eyes Treatmentt') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<?php include('meta.php'); ?>
	<title><?php include 'price.php'; echo "$meso"; ?> <?= __t('Meso Eyes Treatment Dubai |') ?> <?php include 'price.php'; echo "$company"; ?> <?= __t('Satwa Jumeirah 2') ?></title>
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
						<a href="services.html"><?= __t('Services') ?></a>
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
						<ul class="services-nav flex-column flex-nowrap">
							<li class="nav-item">
								<a class="nav-link" href="#submenu1" data-toggle="collapse"
									data-target="#submenu1"><?= __t('Dermatology') ?></a>
								<div class="collapse" id="submenu1">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="warts-treatment.html"><?= __t('Warts Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="mole-removal.html"><?= __t('Moles Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="hair-clinic.html"><?= __t('Hair Clinic') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="skin-cancer-screening.html"><?= __t('Skin Cancer Screening') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="acne-treatment.html"><?= __t('Acne Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="fungal-clinic.html"><?= __t('Fungal Clinic') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="pigmentation.html"><?= __t('Pigmentation') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="allergy.html"><?= __t('Allergy') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="rosacea.html"><?= __t('Rosacea') ?> </a></li>
										<li class="nav-item"><a class="nav-link"
												href="vitiligo.html"><?= __t('Vitiligo') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="prp-therapy.html"><?= __t('PRP Therapy') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu2" data-toggle="collapse"
									data-target="#submenu2"><?= __t('Aesthetic Dermatology') ?></a>
								<div class="collapse" id="submenu2">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="botox-fillers.html"><?= __t('Botox & Fillers') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="fractional-laser.html"><?= __t('Fractional Laser') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="q-switch-laser.html"><?= __t('Q Switch laser') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="tattoo-removal.html"><?= __t('Tattoo Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="laser-hair-removal.html"><?= __t('Laser Hair Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="chemical-peeling.html"><?= __t('Chemical peeling') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="excess-sweating.html"><?= __t('Excess Sweating') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="anti-aging.html"><?= __t('Anti Aging') ?> </a></li>
										<li class="nav-item"><a class="nav-link"
												href="ipl.html"><?= __t('IPL ( Intense Pulse Light)') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu3" data-toggle="collapse"
									data-target="#submenu3"><?= __t('Sexual Health Checkup') ?></a>
								<div class="collapse" id="submenu3">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="std-hiv-testing.html"><?= __t('STD HIV Test') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="genital-warts-treatment.html"><?= __t('Genital Warts Treatment') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="herpes-treatment.html"><?= __t('Herpes Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="chlamydia.html"><?= __t('Chlamydia') ?> </a></li>
										<li class="nav-item"><a class="nav-link"
												href="hiv-screening.html"><?= __t('HIV Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="gonorrhea-treatment.html"><?= __t('Gonorrhea Treatment') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="syphilis-treatment.html"><?= __t('Syphilis Treatment') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu4" data-toggle="collapse"
									data-target="#submenu4"><?= __t('Surgery') ?></a>
								<div class="collapse" id="submenu4">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="piles-hernia.html"><?= __t('Piles Hernia') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="hernia-treatment.html"><?= __t('Hernia Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="comprehensive-cancer-screening.html"><?= __t('Comprehensive Cancer Screening') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="circumcision.html"><?= __t('Circumcision') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="varicose.html"><?= __t('Varicose Vein') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="fissure.html"><?= __t('Fissure') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu5" data-toggle="collapse"
									data-target="#submenu5"><?= __t('Gynecology') ?></a>
								<div class="collapse" id="submenu5">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="menstrual-disorders.html"><?= __t('Menstrual Disorders') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="breastcheckups.html"><?= __t('Breast Checkups') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="family-planning-consultation.html"><?= __t('Family Planning Consultation') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="pregnancy.html"><?= __t('Pregnancy') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="cancer-screening.html"><?= __t('Cancer Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="urinary-vaginal-infection.html"><?= __t('Urinary or Vaginal infection') ?></a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu6" data-toggle="collapse"
									data-target="#submenu6"><?= __t('Plastic Surgery') ?></a>
								<div class="collapse" id="submenu6">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="hair-transplant.html"><?= __t('Hair Transplant') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="liposuction.html"><?= __t('Liposuction') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="reconstructive-surgery.html"><?= __t('Reconstructive Surgery') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="scalp-micro-pigmentation.html"><?= __t('Scalp Micro pigmentation') ?></a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu7" data-toggle="collapse"
									data-target="#submenu7"><?= __t('Dentistry') ?></a>
								<div class="collapse show" id="submenu7">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="crown-bridge.html"><?= __t('Crown and Bridge') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="scaling-polishing.html"><?= __t('Scaling and Polishing') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="tooth-extractions.html"><?= __t('Tooth Extractions') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="custom-sports-mouthguard.php"><?= __t('Sport Mouthguards') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="myobrace-treatment.php"><?= __t('Myobrace Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link active"
												href="meso-eyes.php"><?= __t('Meso Eyes') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="sleep-apnea-treatment.php"><?= __t('Sleep Apnea Treatment') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="dentures.php"><?= __t('Dentures') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="bone-grafting.php"><?= __t('Bone Grafting') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="temporomandibular-joint-pain.php"><?= __t('Temporomandibular Joint Pain') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="facial-lacerations.php"><?= __t('Facial Lacerations') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="intraoral-lacerations.php"><?= __t('Intraoral Lacerations') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="fractured-jaws.php"><?= __t('Fractured jaws') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="tumor-of-jaw.php"><?= __t('Tumor of Jaw') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="zirconia-crown.php"><?= __t('Zirconia Crown') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="invisible-aligners.php"><?= __t('Invisible Aligners') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu8" data-toggle="collapse"
									data-target="#submenu8"><?= __t('Family Medicine') ?></a>
								<div class="collapse" id="submenu8">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="general-practitioner.html"><?= __t('General Practitioner') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="immunization.html"><?= __t('Immunization') ?></a></li>
										<li class="nav-item"><a class="nav-link"
												href="school-health.html"><?= __t('School Health') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu9" data-toggle="collapse"
									data-target="#submenu9"><?= __t('Other Facilities') ?></a>
								<div class="collapse" id="submenu9">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="lab-services.html"><?= __t('Lab Services') ?></a></li>
									</ul>
								</div>
							</li>
						</ul>
						<div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-1">
									<h5 class="contact-box-title"><?= __t('Working Time') ?></h5>
									<ul class="icn-list">
										<li><i class="icon-clock"></i>Sat-Thu 08:00 - 21:00
											<br><?= __t('Friday OFF') ?>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-2">
									<h5 class="contact-box-title"><?= __t('Contact Info') ?></h5>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i>
											<div class="d-flex flex-wrap">
												<span><?= __t('Phone:') ?>&nbsp;&nbsp;</span>
												<span>04 379 8747<br>
													050 373 4132</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="question-box mt-3">
							<h5 class="question-box-title"><?= __t('Ask the Experts') ?></h5>
							<form id="questionForm" method="post" novalidate>
								<div class="successform">
									<p><?= __t('Your message was sent successfully!') ?></p>
								</div>
								<div class="errorform">
									<p><?= __t('Something went wrong, try refreshing and submitting the form again.') ?>
									</p>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
								<input type="text" class="form-control" name="email" placeholder="E-mail*">
								<input type="text" class="form-control" name="phone" placeholder="Phone">
								<textarea class="form-control" name="message" placeholder="Question*"></textarea>
								<button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i
										class="icon-right-arrow"></i><span><?= __t('Ask Now') ?></span><i
										class="icon-right-arrow"></i></button>
							</form>
						</div>
					</div>
					<div class="col-md-8 col-lg-9 mt-4 mt-md-0">
						<div class="title-wrap">
							<!-- <h6><?= __t('MESOTHERAPY') ?></h6> -->
							<!-- <h1> <?php include 'price.php';
							echo "$meso"; ?> <?= __t('Best Mesotherapy center in Dubai') ?></h1> -->
							<h1><?= __t('MESO EYES') ?></h1>
							<p><?= __t('Illuminate and Rejuvenate: Meso Eye Treatment at Cosmocare Medical Center') ?>
							</p>
							<div class="service-img">
								<a href="meso-eyes.php"><img src="images/mesoeyes.png"
										alt=" Mesotherapy in Dubai by Cosmocare Medical Center" width="100%" border="0"
										class="img-fluid" /></a>
							</div>
							<p>
								</pack>
							<h3><?= __t('Illuminate and Rejuvenate: Meso Eye Treatment at Cosmocare Medical Center') ?>
							</h3>
							<p><?= __t('At Cosmocare Medical Center, we understand the desire for a bright and youthful eye area. Dark circles and under-eye puffiness can leave you feeling fatigued and affect your overall appearance. Our Meso Eye treatment offers a targeted approach to address these concerns, revealing a refreshed and more radiant look.') ?>
							</p>
							<h3><?= __t('Show a Brighter, More Revitalized You') ?></h3>
							<p><?= __t('Meso Eye treatment offers a multitude of benefits for those seeking to illuminate and rejuvenate the under-eye area:') ?>
							</p>
							<ul>
								<li><?= __t(' Reduced Dark Circles: The treatment involves injecting a personalized cocktail of vitamins and hyaluronic acid directly into the delicate under-eye area. These ingredients can help lighten hyperpigmentation and improve blood circulation, leading to a reduction in the appearance of dark circles.') ?>
								</li>
								<li><?= __t(' Diminished Puffiness: Certain ingredients in the meso cocktail can help reduce fluid buildup and promote lymphatic drainage, minimizing puffiness and creating a smoother under-eye appearance.') ?>
								</li>
								<li><?= __t(' Enhanced Hydration and Elasticity: Hyaluronic acid is a powerful hydrator that plumps and revitalizes the under-eye area, improving overall skin texture and elasticity.') ?>
								</li>
								<li><?= __t(' Brighter, More Youthful Look: By addressing dark circles, puffiness, and dehydration, Meso Eye treatment can leave you with a brighter, more youthful, and well-rested appearance.') ?>
								</li>
							</ul>
							<h3><?= __t('Two Delivery Methods: Tailored to Your Needs') ?></h3>
							<p><?= __t('Cosmocare Medical Center offers two delivery methods for the Meso Eye treatment, ensuring we can tailor the approach to your comfort level:') ?>
							</p>
							<ul>
								<li><?= __t(' Dermapen Microneedling: A specialized Dermapen device creates tiny channels in the skin, allowing for the topical application of the meso cocktail. This minimally invasive method promotes absorption and stimulates collagen production.') ?>
								</li>
								<li><?= __t(' Doctor-administered Injections: For a more targeted approach, a qualified doctor can precisely inject the meso cocktail directly into the desired areas beneath the eyes.') ?>
								</li>
							</ul>
							<h3><?= __t('The Science Behind the Treatment') ?></h3>
							<p><?= __t('Meso Eye treatment works through a combination of targeted ingredients and advanced delivery methods:') ?>
							</p>
							<ul>
								<li><?= __t(' Personalized Meso eye: A customized blend of vitamins, hyaluronic acid, and other potentially beneficial ingredients is formulated to address your specific concerns.') ?>
								</li>
								<li><?= __t(' Enhanced Absorption: Dermapen microneedling or doctor-administered injections ensure the meso cocktail reaches the deeper layers of the skin for optimal results.') ?>
								</li>
								<li><?= __t(' Stimulated Collagen Production: Microneedling with the Dermapen can further enhance results by stimulating collagen production, which improves skin elasticity and reduces the appearance of fine lines.') ?>
								</li>
							</ul>
							<h3><?= __t('Important Precautions') ?></h3>
							<p><?= __t('While generally safe, there are a few precautions to consider with Meso Eye treatment:') ?>
							</p>
							<ul>
								<li><?= __t(' Consultation: A consultation with a qualified dermatologist or skincare expert is crucial to determine if Meso Eye is right for you and discuss potential side effects.') ?>
								</li>
								<li><?= __t(' Not a One-Time Solution: Multiple sessions may be required to achieve optimal results, and maintenance sessions are recommended to sustain the effects.') ?>
								</li>
							</ul>
							<div class="service-img">
								<a href="custom-sports-mouthguard.php"><img src="custom-sports-mouthguard.svg"
										alt="Custom Sports Mouthguards Boxing, Rugby, Sports and Martial Arts in Dubai by Cosmocare Medical Center"
										width="100%" border="0" class="img-fluid" /></a>
							</div>
							<p>
								<?php include 'googlemaps.php'; ?>
							</p>
							<p>
						</div>
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
		['name' => __t('Al Hudaiba'), 'url' => 'https://maps.app.goo.gl/wnttf6oqyQYPP5DM6'],
		['name' => __t('Al Satwa'), 'url' => 'https://maps.app.goo.gl/hfRNjstnoc4G5E2VA'],
		['name' => __t('Al Mankhool'), 'url' => 'https://maps.app.goo.gl/XDc9HvpMBcq5Y9cy6'],
		['name' => __t('Jumeirah 1'), 'url' => 'https://maps.app.goo.gl/paAWgw1oZaH6SKwa8'],
		['name' => __t('Al Jafiliya'), 'url' => 'https://maps.app.goo.gl/wEQaXpeeCN6zNfio8'],
		['name' => __t('Al Raffa'), 'url' => 'https://maps.app.goo.gl/EWx3wM4tMUHpCehM7'],
		['name' => __t('yMaids'), 'url' => 'https://www.ymaids.com/']
	];
	?>
	<?php include_once __DIR__ . '/inc/footer.php'; ?>
	<!--//footer-->
</body>

</html>