<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Vitiligo Treatment by Specialist Doctor in Dubai. Vitiligo (vit-ih-LIE-go is a disease that causes loss of skin color in patches. The discolored areas usually get bigger with time. The condition can affect the skin on any part of the body. It can also affect hair and the inside of the mouth.') ?>" />
	<meta name="keywords" content="<?= __t('fractional laser treatment, hair clinic') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('fractional laser treatment by Specialist Doctor in Dubai| Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
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
										<li class="nav-item"><a class="nav-link active" href="skin-cancer-screening.html"><?= __t('Skin Cancer Screening') ?></a></li>
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
								<div class="collapse show" id="submenu2">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="botox-fillers.html"><?= __t('Botox & Fillers') ?></a></li>
										<li class="nav-item"><a class="nav-link active" href="fractional-laser.html"><?= __t('Fractional Laser') ?></a></li>
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
								<div class="collapse" id="submenu7">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="crown-bridge.html"><?= __t('Crown and Bridge') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="scaling-polishing.html"><?= __t('Scaling and Polishing') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-extractions.html"><?= __t('Tooth Extractions') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a></li>
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
							<h1><?= __t('Fractional Laser Treatment') ?></h1>
						</div>
						<div class="service-img">
							<img src="images/fractional.jpg" class="img-fluid" alt="fractional laser dubai">
						</div>
						<div class="pt-2 pt-md-4">
							<p><strong><?= __t('What is fractional laser treatment?') ?></strong><br>
								<?= __t('Fractional laser treatment is a non-invasive treatment that uses a device  to deliver a laser beam divided into thousands of microscopic treatment zones  that target a fraction of the skin at a time, analogous to a photographic image  being enhanced or altered pixel by pixel.') ?><br>
								<img src="images/fractional-laser_clip_image002.jpg" alt="1" width="318" height="159"> <br>
								<img src="images/fractional-laser_clip_image004.jpg" alt="2" width="500" height="434">
							</p>
							<p><?= __t('Fractional laser treatment has bridged the gap between the ablative and  non-ablative laser techniques used to treat sun-damaged and ageing skin. While  ablative laser treatments work mainly on the epidermis (surface skin cells) and  non-ablative treatments work solely on dermal collagen (mid-layer of skin)  only, fractional laser treatment works at both the epidermal and dermal layers  of the skin.') ?></p>
							<p><?= __t('There are now some machines available that use fractional technology, based  on erbium:YAG lasers for superficial treatments and CO2 lasers for deeper  ablative treatments (eg Fraxel Repair [Solta Medical], Active and Deep FX  [Lumenis], Quadralase [Candela] and Pearl Fractional [Cutera]). We have at our  center Quanta youlaser which use both Er:Yag and CO2 laser to work on both  epidermis and dermis level.') ?><br>
								<img src="images/fractional-laser_clip_image006.jpg" alt="4" width="550" height="320"> <br>
								<img src="images/fractional-laser_clip_image008.jpg" alt="3" width="550" height="320"> <br>
								<img src="images/fractional-laser_clip_image010.jpg" alt="5" width="550" height="320"> <br>
								<img src="images/fractional-laser_clip_image012.jpg" alt="6" width="550" height="320">
							</p>
							<p><strong><?= __t('What is fractional laser treatment used to treat?') ?></strong></p>
							<ul>
								<li><?= __t('Fractional laser treatment is used for the treatment of:') ?></li>
								<li><?= __t('Facial lines and wrinkles (rhytides)') ?></li>
								<li><?= __t('Sun damage') ?></li>
								<li><?= __t('Skin pigmentation associated with photoageing') ?></li>
								<li><?= __t('Surgical and acne scarring.') ?></li>
								<li><?= __t('Fractional laser treatment can be used on any part of the body but is  particularly useful on the neck, chest and hands when compared to traditional  ablative modalities.') ?></li>
								<li><?= __t('Fractional laser treatment may also be of benefit for poikiloderma of  Civatte and stretch marks.') ?></li>
							</ul>
							<p><strong><?= __t('How does fractional laser treatment work?') ?></strong><br>
								<?= __t('To understand how fractional laser treatment works a basic understanding of  skin structure is required. Briefly, skin consists of 3 layers, the epidermis  (uppermost layer), dermis (mid-layer) and subcutis (lower fat layer). The  epidermis contains pigment-producing cells called melanocytes, which are  responsible for skin colouring. The dermis is made up of collagen and elastin  fibres that provide skin with strength, toughness, elasticity and pliability') ?><br>
								<?= __t('As the body ages, the appearance and characteristics of the skin alter. The  epidermis becomes thinner, so blemishes become more visible, and collagen in  the dermis is gradually lost which contributes to the formation of facial  lines, sagging skin and wrinkles.') ?><br>
								<br>
								<?= __t('Fractional laser treatment works by targeting both the epidermis and  dermis. It does this by delivering a laser beam that is divided into thousands of  tiny but deep columns of treatment into the skin. These are called microthermal  treatment zones (MTZs). Within each MTZ old epidermal pigmented cells are  expelled, and the penetration of collagen in the dermis causes a reaction that  leads to collagen remodeling and new collagen formation. By using MTZs, the  laser targets and treats intensively within the zone while surrounding healthy  tissue remain intact and unaffected and helps heal the wound. This fractional  treatment results in a faster healing process than if all tissue in the  treatment area was exposed to the laser.') ?><br>
								<strong><?= __t('What does fractional laser treatment involve?') ?></strong><br>
								<?= __t('The following is an outline of the CO2 Fractional laser procedure:') ?><br>
								<strong><?= __t('Pre-treatment assessment/preparation') ?></strong>
							</p>
							<ul>
								<li><?= __t('Define problem areas and tailor a treatment pattern to target the areas for  correction.') ?></li>
								<li><?= __t('Take pre-treatment photographs.') ?></li>
								<li><?= __t('Pre-treatment with bleaching cream (eg, hydroquinone) or chemical peel may  be necessary for patients with darker skin or pigmentation problems.') ?></li>
								<li><?= __t('Consider aciclovir or valaciclovir prophylaxis against herpes simplex  infections (cold sores)') ?></li>
								<li><?= __t('The patient needs to remove all jewellery and makeup. Wash face with soap  and water before treatment.') ?></li>
								<li><?= __t('An anaesthetic cream is applied to the treatment area. It takes about 45-60  minutes for the anaesthetic to take full effect.') ?></li>
								<li><?= __t('The anaesthetic cream is removed') ?></li>
								<li><?= __t('Treatment time will depend on the areas being treated, but a full face will  take around 30 minutes.') ?></li>
								<li><?= __t('The pain associated with the procedure is dependent on the energy delivered  to the treatment site') ?></li>
								<li><?= __t('A cooling device, called a Zimmer™ machine, is used to reduce the  discomfort during the procedure.') ?></li>
							</ul>
							<p><strong><?= __t('Post-treatment and recovery') ?></strong></p>
							<ul>
								<li><?= __t('Patients may experience a mild sunburn sensation for about an hour after  the procedure.') ?></li>
								<li><?= __t('Swelling is usually minimal and should resolve in 2–3 days.') ?></li>
								<li><?= __t('The skin will have a pinkish tone for 3–5 days.') ?></li>
								<li><?= __t('Within 24 hours new epidermal skin develops and the skin will have a bronze  appearance that can last 3–14 days. Flaking of the skin may also occur as new  skin replaces dead skin tissue, which can be treated with a moisturising cream.') ?></li>
								<li><?= __t('Skin peeling can be pronounced after ablative therapy when the skin should  be gently removed with tap water, petrolatum and gauze once or twice daily.') ?></li>
								<li><?= __t('During the healing phase and for several months after treatment, it is  recommended that the treatment area is protected using a moisturising sunscreen  with an SPF of at least 50+. Protective clothing and wide-brimmed hats should  also be used to protect the skin from sun exposure.') ?></li>
								<li><?= __t('Four to five treatments with CO2  fractional laser are required, depending on the energy level used and the condition of the  treated skin. These are spaced one month apart. The results are not immediate  and are slowly progressive, with optimal improvement visible over a three to  four month period. This timeframe and treatment regimen allows for complete  healing and replacement of damaged tissue with new collagen and elastin, and  viable, healthy skin cell growth.') ?></li>
							</ul>
							<p><strong><?= __t('What are the side effects and complications of fractional laser treatment?') ?></strong><br>
								<?= __t('Fractional laser treatment appears to be well tolerated by most patients.  Shaving or application of mineral make-up can be done soon after treatment. In  most cases, patients can return to work directly after treatments or the  following day, depending upon their skin condition and treatment.') ?></p>
							<ul>
								<ul>
									<li><?= __t('Some of the side effects and complications that may occur after aggressive  or ablative fractional laser treatments, particularly on neck skin, include:') ?></li>
									<li><?= __t('Excessive desquamation (scaling, peeling) and some crusting') ?></li>
									<li><?= __t('Swelling for up to one week after treatment – this can be helped by  applying an ice pack at 10-minute intervals for the first 24 hours.') ?></li>
									<li><?= __t('Postinflammatory pigmentation – occurs more commonly in patients with a  history of melasma or postinflammatory hyperpigmentation (more common in  patients of darker skin types)') ?></li>
									<li><?= __t('Acneform eruptions, herpes simplex, bacterial and candida infections') ?></li>
									<li><?= __t('Contact dermatitis') ?></li>
								</ul>
								<p></p>
						</div>
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