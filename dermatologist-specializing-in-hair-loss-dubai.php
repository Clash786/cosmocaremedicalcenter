<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?php include 'price.php'; ?><?= __t('Consult a Dermatologist Specializing in Hair Loss in Dubai at') ?> <?php echo $company; ?> <?= __t('expert in hair restoration, scalp care, and advanced treatments for men and women. For appointments, call ') ?><?php echo $contact; ?> <?= __t('(Satwa) / ') ?><?php echo $contactjumeirah; ?> <?= __t('(Jumeirah 2) or email') ?> <?php echo $email; ?>." />
	<meta name="keywords" content="<?php include 'price.php'; ?><?= __t(', dermatologist-specializing-in-hair-loss-dubai, hair-loss-treatment, hair-regrowth, scalp-treatment, dermatologist-dubai, trichology-specialist, hair-fall-solution,') ?> <?php echo $company; ?>" />
	<meta name="format-detection" content="telephone=no">
	<?php include('meta.php'); ?>
	<title><?php include 'price.php';echo "$company"; ?> <?= __t('| Dermatologist Specializing in Hair Loss in Dubai Satwa & Jumeirah 2') ?></title>
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
								<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><?= __t('Dermatology') ?></a>
								<div class="collapse" id="submenu1">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="warts-treatment.html"><?= __t('Warts Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="mole-removal.html"><?= __t('Moles Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="hair-clinic.html"><?= __t('Hair Clinic') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="skin-cancer-screening.html"><?= __t('Skin Cancer Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="acne-treatment.html"><?= __t('Acne Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="fungal-clinic.html"><?= __t('Fungal Clinic') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="pigmentation.html"><?= __t('Pigmentation') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="allergy.html"><?= __t('Allergy') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="rosacea.html"><?= __t('Rosacea') ?> </a></li>
										<li class="nav-item"><a class="nav-link" href="vitiligo.html"><?= __t('Vitiligo') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="prp-therapy.html"><?= __t('PRP Therapy') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><?= __t('Aesthetic Dermatology') ?></a>
								<div class="collapse" id="submenu2">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="botox-fillers.html"><?= __t('Botox & Fillers') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="fractional-laser.html"><?= __t('Fractional Laser') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="q-switch-laser.html"><?= __t('Q Switch laser') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tattoo-removal.html"><?= __t('Tattoo Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="laser-hair-removal.html"><?= __t('Laser Hair Removal') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="chemical-peeling.html"><?= __t('Chemical peeling') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="excess-sweating.html"><?= __t('Excess Sweating') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="anti-aging.html"><?= __t('Anti Aging') ?> </a></li>
										<li class="nav-item"><a class="nav-link" href="ipl.html"><?= __t('IPL ( Intense Pulse Light)') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><?= __t('Sexual Health Checkup') ?></a>
								<div class="collapse" id="submenu3">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="std-hiv-testing.html"><?= __t('STD HIV Test') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="genital-warts-treatment.html"><?= __t('Genital Warts Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="herpes-treatment.html"><?= __t('Herpes Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="chlamydia.html"><?= __t('Chlamydia') ?> </a></li>
										<li class="nav-item"><a class="nav-link" href="hiv-screening.html"><?= __t('HIV Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="gonorrhea-treatment.html"><?= __t('Gonorrhea Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="syphilis-treatment.html"><?= __t('Syphilis Treatment') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><?= __t('Surgery') ?></a>
								<div class="collapse" id="submenu4">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="piles-hernia.html"><?= __t('Piles Hernia') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="hernia-treatment.html"><?= __t('Hernia Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="comprehensive-cancer-screening.html"><?= __t('Comprehensive Cancer Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="circumcision.html"><?= __t('Circumcision') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="varicose.html"><?= __t('Varicose Vein') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="fissure.html"><?= __t('Fissure') ?></a></li>

									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu5" data-toggle="collapse" data-target="#submenu5"><?= __t('Gynecology') ?></a>
								<div class="collapse" id="submenu5">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="menstrual-disorders.html"><?= __t('Menstrual Disorders') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="breastcheckups.html"><?= __t('Breast Checkups') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="family-planning-consultation.html"><?= __t('Family Planning Consultation') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="pregnancy.html"><?= __t('Pregnancy') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="cancer-screening.html"><?= __t('Cancer Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="urinary-vaginal-infection.html"><?= __t('Urinary or Vaginal infection') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu6" data-toggle="collapse" data-target="#submenu6"><?= __t('Plastic Surgery') ?></a>
								<div class="collapse" id="submenu6">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="hair-transplant.html"><?= __t('Hair Transplant') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="liposuction.html"><?= __t('Liposuction') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="reconstructive-surgery.html"><?= __t('Reconstructive Surgery') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="scalp-micro-pigmentation.html"><?= __t('Scalp Micro pigmentation') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu7" data-toggle="collapse" data-target="#submenu7"><?= __t('Dentistry') ?></a>
								<div class="collapse show" id="submenu7">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="crown-bridge.html"><?= __t('Crown and Bridge') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="scaling-polishing.html"><?= __t('Scaling and Polishing') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-extractions.html"><?= __t('Tooth Extractions') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a></li>
										<li class="nav-item"><a class="nav-link active" href="custom-sports-guards.php"><?= __t('Custom Sports Guards') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="skin-specialist-doctor.php"><?= __t('Skin Specialist Doctor') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="hair-loss-specialist-dubai.php"><?= __t('Hair Loss Specialist Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="psoriasis-doctor.php"><?= __t('Psoriasis Doctor') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="dermatologist-treatment-for-dark-spots-on-face-dubai.php"><?= __t('Dermatologist Treatment for Dark Spots on Face Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="actinic-keratosis-treatment-dubai.php"><?= __t('Actinic Keratosis Treatment Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="specialist-dermatologist-jumeirah-2.php"><?= __t('Specialist Dermatologist Jumeirah 2') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="laser-skin-rejuvenation-dubai.php"><?= __t('Laser Skin Rejuvenation Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="eczema-doctor-dubai.php"><?= __t('Eczema Doctor Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="std-check-up-dubai.php"><?= __t('STD Check-up Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="cosmetic-dermatology-dubai.php"><?= __t('Cosmetic Dermatology Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="laser-skin-resurfacing-dubai.php"><?= __t('Laser Skin Resurfacing Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="best-dermatologist-for-hair-loss-dubai.php"><?= __t('Best Dermatologist For Hair Loss Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="same-day-chlamydia-test-dubai.php"><?= __t('Same Day Chlamydia Test Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="full-std-test-dubai.php"><?= __t('Full STD Test Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="dermatologist-specializing-in-hair-loss-dubai.php"><?= __t('Dermatologist Specializing In Hair Loss Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="dermatologist-laser-hair-removal-dubai.php"><?= __t('Dermatologist Laser Hair Removal Dubai') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="rejuvenation-dermatology-dubai.php"><?= __t('Rejuvenation Dermatology Dubai') ?></a></li>

										<li class="nav-item"><a class="nav-link" href="myobrace-treatment.php"><?= __t('Myobrace Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="sleep-apnea-treatment.php"><?= __t('Sleep Apnea Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="dentures.php"><?= __t('Dentures') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="bone-grafting.php"><?= __t('Bone Grafting') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="temporomandibular-joint-pain.php"><?= __t('Temporomandibular Joint Pain') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="facial-lacerations.php"><?= __t('Facial Lacerations') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="intraoral-lacerations.php"><?= __t('Intraoral Lacerations') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="fractured-jaws.php"><?= __t('Fractured jaws') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tumor-of-jaw.php"><?= __t('Tumor of Jaw') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="zirconia-crown.php"><?= __t('Zirconia Crown') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="invisible-aligners.php"><?= __t('Invisible Aligners') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu8" data-toggle="collapse" data-target="#submenu8"><?= __t('Family Medicine') ?></a>
								<div class="collapse" id="submenu8">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="general-practitioner.html"><?= __t('General Practitioner') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="immunization.html"><?= __t('Immunization') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="school-health.html"><?= __t('School Health') ?></a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu9" data-toggle="collapse" data-target="#submenu9"><?= __t('Other Facilities') ?></a>
								<div class="collapse" id="submenu9">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="lab-services.html"><?= __t('Lab Services') ?></a></li>

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
									<p><?= __t('Something went wrong, try refreshing and submitting the form again.') ?></p>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
								<input type="text" class="form-control" name="email" placeholder="E-mail*">
								<input type="text" class="form-control" name="phone" placeholder="Phone">
								<textarea class="form-control" name="message" placeholder="Question*"></textarea>
								<button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span><?= __t('Ask Now') ?></span><i class="icon-right-arrow"></i></button>
							</form>
						</div>
					</div>

					<div class="col-md-8 col-lg-9 mt-4 mt-md-0">
						<div class="title-wrap">
							<h3><?= __t('Dermatologist Specializing in Hair Loss in Dubai') ?></h3>
							<h1><?= __t('Expert Hair Loss Treatment & Scalp Care') ?></h1>
							<p><?= __t('At') ?> <strong><?= __t('Cosmocare Medical Center') ?></strong><?= __t(', our') ?> <strong><?= __t('dermatologists specializing in hair loss') ?></strong><?= __t(' provide advanced diagnosis and personalized treatments to restore healthy, strong hair.') ?>
								<?= __t('Whether you are experiencing hair thinning, bald patches, or scalp irritation, our specialists use the latest techniques and medical-grade products to target the root cause and promote natural regrowth.') ?></p>

							<h1><?= __t('Personalized Hair Restoration for Men & Women') ?></h1>
							<p><?= __t('Our dermatology experts design') ?> <strong><?= __t('customized treatment plans') ?></strong> <?= __t('based on your scalp condition and lifestyle. From PRP therapy and mesotherapy to medical hair care solutions, we ensure effective, safe, and long-lasting results.') ?>
								<?= __t('Visit our conveniently located clinics in ') ?><strong><?= __t('Satwa') ?></strong> <?= __t('and') ?> <strong><?= __t('Jumeirah 2') ?></strong> <?= __t('for professional, confidential, and affordable hair loss treatments in Dubai.') ?></p>






							<br>

							<h1><?= __t('Dermatologist Specializing in Hair Loss in Dubai') ?></h1>
							<p><?= __t('At') ?> <strong><?= __t('Cosmocare Medical Center') ?></strong><?= __t(', we provide') ?> <strong><?= __t('comprehensive hair loss diagnosis and treatment') ?></strong> <?= __t('in Dubai. Our experienced dermatologists deliver personalized care to restore healthy hair, improve scalp conditions, and boost confidence for both men and women.') ?></p>

							<p><strong><?= __t(' Why Choose Cosmocare for Hair Loss Treatment?') ?></strong></p>
							<ul>
								<li><strong><?= __t(' Complete Hair Loss Solutions:') ?></strong> <?= __t('Covers hair thinning, bald patches, scalp disorders, and hormonal hair loss with tailored treatments.') ?></li>
								<li><strong><?= __t(' Personalized Care:') ?></strong> <?= __t('Each patient receives a customized treatment plan based on their hair and scalp condition.') ?></li>
								<li><strong><?= __t(' Advanced Diagnostic Techniques:') ?></strong> <?= __t('Using modern dermoscopy, PRP therapy, mesotherapy, and medical-grade hair care solutions.') ?></li>
								<li><strong><?= __t(' Proven Results:') ?></strong> <?= __t('Safe, effective, and long-lasting treatments backed by years of dermatology experience.') ?></li>
								<li><strong><?= __t(' Convenient Locations:') ?></strong> <?= __t('Available at both') ?> <strong><?= __t('Satwa') ?></strong> <?= __t('and') ?> <strong><?= __t('Jumeirah 2') ?></strong> <?= __t('clinics in Dubai.') ?></li>
							</ul>

							<p><?= __t('At') ?> <strong><?= __t('Cosmocare Medical Center') ?></strong><?= __t(', your privacy and well-being come first. Our expert doctors guide you through every step  from consultation to results  with compassion and care.') ?></p>





							<p><?= __t(' Book your appointment today with') ?> <strong><?= __t('Dr. Murtaza') ?></strong> <?= __t('at') ?> <strong><?= __t('Cosmocare Medical Center') ?></strong> <?= __t('for clearer, healthier, and more confident skin.') ?></p>

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
			'title' => __t('Best Dermatologist for Hair Loss in Dubai...'),
			'link' => 'dermatologist-specializing-in-hair-loss-dubai.php',
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