<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?php include 'price.php'; echo "$tmj_disorder_treatment_options"; ?> <?= __t('TMJ Disorder Treatment Options | If you have any further questions, feel free to call us at ') ?><?php include 'price.php'; echo "$contact"; ?> <?= __t('(Satwa) / ') ?><?php include 'price.php'; echo "$contactjumeirah"; ?> <?= __t('(Jumeirah 2) or email at') ?> <?php include 'price.php'; echo "$email"; ?> <?= __t('for BOOK an appointment.') ?>" />
	<meta name="keywords" content="<?php include 'price.php'; echo "$dental_keywords"; ?>, <?= __t('TMJ Disorder Treatment Options') ?> " />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<?php include('meta.php'); ?>
	<title><?php include 'price.php'; echo "$tmj_disorder_treatment_options"; ?> <?= __t('TMJ Disorder Treatment Options |') ?> <?php include 'price.php'; echo "$company"; ?> <?= __t('Satwa Jumeirah 2') ?></title>
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
										<li class="nav-item"><a class="nav-link active"
												href="tmj-disorder-treatment-options.php"><?= __t('TMJ Disorder Treatment Options') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link"
												href="myobrace-treatment.php"><?= __t('Myobrace Treatment') ?></a></li>
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
							<h1><?php include 'price.php';
							echo "$tmj_disorder_treatment_options"; ?> <?= __t('TMJ Disorder Treatment Options') ?> </h1><br>
							<h1> <?= __t('TMJ Disorder Treatment Options') ?> </h1>
							<div class="service-img">
								<a href="tmj-disorder-treatment-options.php"><img
										src="images/tmj-disorder-treatment-options.png"
										alt="TMJ Disorder Treatment Options in Dubai by Cosmocare Medical Center"
										width="100%" border="0" class="img-fluid" /></a>
							</div>
							<br>
							<h2><?= __t('TMJ Disorder Treatment') ?></h2>
							<p><?= __t('If you experience pain or a popping sound when opening your mouth or chewing, you may have a TMJ disorder. What exactly is a TMJ disorder? How do you treat it? We\'re here to walk you through what these disorders are exactly, what diagnosis entails, and what the pros recommend for treatment.') ?>
							</p>
							<h3><?= __t('TMJ Disorder Overview') ?></h3>
							<p><?= __t('To understand TMJ disorders, it\'s best to break down some of the associated terms that can otherwise confuse. TMJ refers to your temporomandibular joints that enable your ability to move your jaw, chew, speak, and swallow.') ?>
							</p>
							<p><?= __t('TMJ disorders are a specific type of temporomandibular disorder (TMD) in which the joints are affected. This can include dysfunction to the joint itself (a disc, ball, and socket) or the associated ligaments, muscles, and bone.') ?>
							</p>
							<p><?= __t('The Cleveland Clinic notes that TMJ can be temporary or a chronic problem. Men are more likely to have this condition than women, and you\'re most likely to develop it between 20 and 40.') ?>
							</p>
							<h3><?= __t('TMJ disorders are caused by:') ?></h3>
							<ul>
								<li><?= __t('Chronic grinding of your teeth (often from stress)') ?></li>
								<li><?= __t('Problems with alignment of your jaw or teeth') ?></li>
								<li><?= __t('Connective tissue disease') ?></li>
								<li><?= __t('Injury or dislocation') ?></li>
								<li><?= __t('Inherited genetics') ?></li>
								<li><?= __t('Arthritis') ?></li>
							</ul>
							<p><strong><?= __t('Helpful Tips:') ?>
								</strong><?= __t('The cause of TMJ disorders is often the result of a combination of risk factors, and that the cause for many is unknown.') ?>
							</p>
							<h3><?= __t('Symptoms and Diagnosis') ?></h3>
							<p><?= __t('It\'s essential to receive professional diagnosis and treatment recommendations for any medical problem, especially TMJ disorders. Many of the symptoms of these disorders can overlap with those of other conditions, so it can be difficult to diagnose accurately.') ?>
							</p>
							<p><?= __t('TMJ disorder symptoms may include:') ?></p>
							<ul>
								<li><?= __t('Pain, discomfort, or sensitivity around your ears, jaw, or temporomandibular joints (TMJ)') ?>
								</li>
								<li><?= __t('Aches in your head, neck, or teeth') ?></li>
								<li><?= __t('Problems or discomfort while eating and chewing') ?></li>
								<li><?= __t('Difficulty opening and closing your mouth due to locking of your temporomandibular joints (TMJ)') ?>
								</li>
								<li><?= __t('Clicking, popping, or grating sounds when opening your mouth or chewing') ?>
								</li>
								<li><?= __t('Fatigue, swelling, or pain in your face') ?></li>
								<li><?= __t('Limited range of motion of your jaw or mouth') ?></li>
								<li><?= __t('Earaches and hearing problems') ?></li>
								<li><?= __t('Dizziness') ?></li>
							</ul>
							<p><?= __t('It\'s a great idea to visit your dental or medical professional for expert diagnosis and treatment advice. According to the Mayo Clinic, to help determine the source of the problem, they may:') ?>
							</p>
							<ul>
								<li><?= __t('Perform an examination to determine your jaw\'s range of motion, identify the areas causing discomfort, and observe your jaw as it opens and closes.') ?>
								</li>
								<li><?= __t('Recommend dental x-rays, CT scans, or an MRI to see the structure of your jaw and teeth.') ?>
								</li>
							</ul>
							<h3><?= __t('Treatment Options') ?></h3>
							<p><?= __t('Research on TMJ treatment is still emerging. Because of this, it\'s wise first to consider the safest approaches possible that don\'t have associated risks or cause permanent changes to your body.') ?>
							</p>
							<p><?= __t('There\'s a wealth of options available to try before resorting to more extreme measures like surgery and other procedures. In fact, some of the best treatments at your disposal include simply doing less to irritate your TMJ! Those without associated pain likely don\'t require treatment.') ?>
							</p>
							<h3><?= __t('Conservative Treatments') ?></h3>
							<p><?= __t('There are great starting places to help treat your TMJ disorder and reduce your symptoms:') ?>
							</p>
							<ul>
								<li><?= __t('Avoid gum, biting your nails, and difficult-to-chew foods in favor of soft foods') ?>
								</li>
								<li><?= __t('Skip out on large movements to your jaw like yelling and loud singing') ?>
								</li>
								<li><?= __t('Practice proper posture, especially when seated at a computer') ?></li>
								<li><?= __t('Perform exercises recommended by your dental or medical professional to strengthen or relax your jaw') ?>
								</li>
								<li><?= __t('Build a routine of stress reduction and relaxation, especially before bed if you grind your teeth') ?>
								</li>
								<li><?= __t('Wear a mouthguard (also called a night guard) for sleep to reduce the effects of grinding') ?>
								</li>
								<li><?= __t('Apply heat (for 5 minutes) or cold (for 10 minutes) to the side of your face multiple times a day') ?>
								</li>
								<li><?= __t('Consider prescription or over-the-counter medication to manage pain, swelling, or anxiety') ?>
								</li>
							</ul>
							<p><strong><?= __t('Important:') ?>
								</strong><?= __t('It\'s vital to follow the recommendation of your dental or medical professional. Only take medications as instructed on the packaging and as prescribed.') ?>
							</p>
							<h3><?= __t('Other Treatments') ?></h3>
							<p><?= __t('Because many of the more aggressive treatments are not reversible, it\'s a good idea to seek a second or third opinion from another medical or dental professional. There are various other treatment options available when more conservative approaches have proven ineffective.') ?>
							</p>
							<p><?= __t('Other treatment options for TMJ disorders may include:') ?></p>
							<ul>
								<li><?= __t('Therapy using radio wave therapy, trigger-point injections, ultrasound, or electrical currents.') ?>
								</li>
								<li><?= __t('Procedures such as open-joint surgery, arthrocentesis, arthroscopy, or dental restoration to fix your bite.') ?>
								</li>
							</ul>
							<p><?= __t('TMJ disorders can be unpleasant and stressful, but rest assured that they are a wide range of treatment options. Your best bets are avoiding jaw irritation in the first place, stress reduction, and checking in with your dental or medical professional for their expert opinion. You\'re now more prepared and informed than ever to manage your symptoms.') ?>
							</p>
							<p><?= __t('This article is intended to promote understanding of and knowledge about general oral health topics. It is not intended to be a substitute for professional advice, diagnosis or treatment. Always seek the advice of your dentist or other qualified healthcare provider with any questions you may have regarding a medical condition or treatment.') ?>
							</p>
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