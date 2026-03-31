<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?php include 'price.php'; echo "$company"; ?> <?= __t('providing') ?> <?php $_GET; $mydentures = $_GET['mydentures']; $mydentures = str_replace("-", " ", $mydentures); echo __t($mydentures); ?> <?= __t('at reasonable price. please call our office at 04-3798747 or request an appointment online.') ?> " />
	<meta name="keywords" content="<?php $_GET; $mydentures = $_GET['mydentures']; $mydentures = str_replace("-", " ", $mydentures); echo __t($mydentures); ?> , <?php include 'price.php'; echo "$company"; ?>, <?= __t('visit, visa, dubai, online, apply, 14, 30, 90 days') ?>," />
	<meta name="description" content="<?= __t('Dr. Lavanya/ Dr Samir and his staff at Cosmocare would be happy to discuss the details about cosmetic dentures with you. To schedule an appointment in Dubai, UAE,') ?>" />
	<meta name="keywords" content="<?= __t('dentures, cosmetic denture, treatment, dubai, treatment, bone grafting dubai, polishing, dental clinic in dubai, cheap dental clinic') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title>[<?php include 'price.php'; echo "$dentaloffer"; ?> ] <?php $_GET; $mydentures = $_GET['mydentures']; $mydentures = str_replace("-", " ", $mydentures); echo __t($mydentures); ?><?= __t(', Dubai, UAE:') ?> <?php include 'price.php'; echo __t("$company"); ?></title>
	<!-- Stylesheets -->
	<link href="../vendor/slick/slick.css" rel="stylesheet">
	<link href="../vendor/animate/animate.min.css" rel="stylesheet">
	<link href="../icons/style.css" rel="stylesheet">
	<link href="../vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="../css/style-color-3.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="../images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
</head>

<body class="shop-page">
	<!--header-->
	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:043536164">04-353 6164</a>
						</div>
						<div class="header-info"><a href="https://maps.app.goo.gl/NZ88cwEgg4BPeYtf8"
								target="_blank"><?= __t('Villa 464, Jumeirah 2, Dubai') ?></a></div>
						<div class="header-info"><i class="icon-black-envelope"></i><a
								href="mailto:info@cosmocaremedicalcenter.com">info@cosmocaremedicalcenter.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="https://www.facebook.com/cosmocaremedicalcenter/" class="hovicon"><i
									class="icon-facebook-logo-circle"></i></a>
							<a href="https://www.youtube.com/@cosmocaremedicalcenterdubai" class="hovicon"><i
									class="icon-twitter-logo-circle"></i></a>
							<a href="https://www.instagram.com/cosmocare_dxb/" class="hovicon"><i
									class="icon-instagram"></i></a>
						</span>
					</div>
				</div>
			</div>
			<!-- Language Switcher -->
			<?php require_once __DIR__ . '/inc/language_switcher.php'; ?>
			<!--// Language Switcher -->
		</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index.html" class="header-logo"><img src="./../images/logo.png" alt=""
								class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="./../about.html"><?= __t('About Us') ?></a>
										</li>
										<li class="nav-item">
											<a href="./../services.html" class="nav-link dropdown-toggle"
												data-toggle="dropdown"><?= __t('Services') ?></a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item"
														href="./prices.html"><?= __t('Prices') ?></a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="./../gallery.html" class="nav-link dropdown-toggle"
												data-toggle="dropdown"><?= __t('Gallery') ?></a>
										</li>
										<li class="nav-item">
											<a href="./../our-specialist.html" class="nav-link dropdown-toggle"
												data-toggle="dropdown"><?= __t('Our Specialists') ?></a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item"
														href="./../our-specialist.html"><?= __t('All Specialists') ?></a>
												</li>
												<li><a class="dropdown-item"
														href="./../schedule.html"><?= __t('Schedule Table') ?></a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link"
												href="./testimonials.html"><?= __t('Testimonials') ?></a>
										</li>
										<li class="nav-item dropdown">
											<a href="./../https://cosmocaremedicalcenter.com/blog/"
												class="nav-link dropdown-toggle"
												data-toggle="dropdown"><?= __t('Blog') ?></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="contact.html"><?= __t('Contacts') ?></a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</header>
	<!--//header-->
	<!--quick links-->
	<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
		<div class="quickLinks js-quickLinks">
			<div class="container">
				<div class="row no-gutters">
					<div class="col">
						<a href="#" class="link">
							<i class="icon-placeholder"></i><span><?= __t('Location') ?></span></a>
						<div class="link-drop p-0">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.026601414888!2d55.276044315430624!3d25.236028983878132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42fc5151fddd%3A0x84e25795f8f7e3d9!2sCosmocare%20Dermatology%20PRP%20Therapy%20%26%20STD%20Clinic%20Dubai!5e0!3m2!1sen!2sae!4v1585744124762!5m2!1sen!2sae"
								width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
								aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-clock"></i><span><?= __t('Working Time') ?></span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-clock"></i><?= __t('Working Time') ?></h5>
							<table class="row-table">
								<tr>
									<td><i><?= __t('Sat-Fri') ?></i></td>
									<td>09:00 - 21:00</td>
								</tr>
								<tr>
									<td><i><?= __t('Friday') ?></i></td>
									<td> <?= __t('Open') ?> </td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-pencil-writing"></i><span><?= __t('Request Form') ?></span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-pencil-writing"></i><?= __t('Request Form') ?>
							</h5>
							<form id="requestForm" method="post" novalidate>
								<div class="successform">
									<p><?= __t('Your message was sent successfully!') ?></p>
								</div>
								<div class="errorform">
									<p><?= __t('Something went wrong, try refreshing and submitting the form again.') ?>
									</p>
								</div>
								<div class="input-group">
									<span>
										<i class="icon-user"></i>
									</span>
									<input name="requestname" type="text" class="form-control"
										placeholder="Your Name" />
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col">
										<div class="input-group">
											<span>
												<i class="icon-email2"></i>
											</span>
											<input name="requestemail" type="text" class="form-control"
												placeholder="Your Email" />
										</div>
									</div>
									<div class="col">
										<div class="input-group">
											<span>
												<i class="icon-smartphone"></i>
											</span>
											<input name="requestphone" type="text" class="form-control"
												placeholder="Your Phone" />
										</div>
									</div>
								</div>
								<div class="selectWrapper input-group mt-1">
									<span>
										<i class="icon-tooth"></i>
									</span>
									<select name="requestservice" class="form-control">
										<option selected="selected" disabled="disabled"><?= __t('Select Service') ?>
										</option>
										<option value="Dermatology"><?= __t('Dermatology') ?></option>
										<option value="General Dentistry"><?= __t('General Dentistry') ?></option>
										<option value="Piles Hernia Surgeon"><?= __t('Piles Hernia Surgeon') ?></option>
										<option value="General Practioner"><?= __t('General Practioner') ?></option>
										<option value="Dental Implants"><?= __t('Dental Implants') ?></option>
										<option value="Laser Hair Removal"><?= __t('Laser Hair Removal') ?></option>
									</select>
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col-sm-6">
										<div class="input-group flex-nowrap">
											<span>
												<i class="icon-calendar2"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requestdate" type="text"
													class="form-control datetimepicker" placeholder="Date" readonly>
											</div>
										</div>
									</div>
									<div class="col-sm-6 mt-1 mt-sm-0">
										<div class="input-group flex-nowrap">
											<span>
												<i class="icon-clock"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requesttime" type="text" class="form-control timepicker"
													placeholder="Time" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="text-right mt-2">
									<button type="submit"
										class="btn btn-sm btn-hover-fill"><?= __t('Request') ?></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-calendar"></i><span><?= __t('Doctors Timetable') ?></span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-calendar"></i><?= __t('Doctors Timetable') ?>
							</h5>
							<p><?= __t('This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor\'s availability before leaving your premises.') ?>
							</p>
							<p class="text-right"><a href="schedule.html"
									class="btn btn-sm btn-hover-fill"><?= __t('Details') ?></a></p>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-price-tag"></i><span><?= __t('Pricing') ?></span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-price-tag"></i><?= __t('Quick Pricing') ?></h5>
							<table class="row-table">
								<tr>
									<td><?= __t('Initial Consultation') ?></td>
									<td>AED 250</td>
								</tr>
								<tr>
									<td><?= __t('PRP Therapy') ?></td>
									<td>AED 750</td>
								</tr>
								<tr>
									<td><?= __t('GP Checkup') ?></td>
									<td>AED 100</td>
								</tr>

							</table>
							<p class="text-right mt-15"><a href="prices.html"
									class="btn btn-sm btn-hover-fill"><?= __t('Details') ?></a></p>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-emergency-call"></i><span><?= __t('Emergency Case') ?></span></a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-emergency-call"></i><?= __t('Emergency Case') ?>
							</h5>
							<p><?= __t('Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth.') ?>
							</p>
							<ul class="icn-list">
								<li><i class="icon-telephone"></i><span class="phone">04 379 8747<br>050 373 4132</span>
								</li>
								<li><i class="icon-black-envelope"></i><a
										href="mailto:info@cosmocaremedicalcenter.com">info@cosmocaremedicalcenter.com</a>
								</li>
							</ul>
							<p class="text-right mt-2"><a href="contact.html"
									class="btn btn-sm btn-hover-fill"><?= __t('Our Contacts') ?></a></p>
						</div>
					</div>
					<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
								data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
				</div>
			</div>
			<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
					title="Open panel">+</span></div>
		</div>
	</div>
	<!--//quick links-->
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
												href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a>
										</li>
										<li class="nav-item"><a class="nav-link active"
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
							<h1 id="page-title">✅ <?php $_GET;
							$mydentures = $_GET['mydentures'];
							$mydentures = str_replace("-", " ", $mydentures);
							echo __t($mydentures); ?>: <?php include 'price.php';
							  echo __t("$company"); ?></h1>
							<p><?= __t('A denture or a complete denture as it is often called, is an appliance that is inserted in the mouth, replaces natural teeth, and provides support for the cheeks and lips.') ?>
							</p>
							<h2><?= __t('Cosmetic Dentures') ?></h2>
							<p><?= __t('Cosmetic dentures are made from high-quality state-of-the-art dental materials that look and function like natural teeth. We custom design partial and full dentures to complement your smile. They can be custom shaped, colored, and fit your specifications for a more comfortable and aesthetic result.') ?>
							</p>
							<div class="service-img">
								<img src="./../images/dentures.svg" width="100%" class="img-fluid"
									alt="cosmetic dentures in Dubai by Cosmocare Medical Center">
							</div>
							<div>
								<p><?= __t('Your dentures may take some time to get used to. The flesh colored base of the dentures is placed over your gums. Some people say that it feels bulky or that they don\'t have enough room for their tongue. Other times the dentures might feel loose. These feelings will affect the way you eat and talk for a little while. Over time, your mouth becomes trained to eat and speak with your dentures and they begin to feel more and more like your natural teeth. They may never feel perfectly comfortable, but it is much better than the alternative of not having teeth.') ?>
								</p>
								<p><?= __t('Even though dentures are not real teeth, you should care for them like they are. You should brush them to remove plaque and food particles before removing your dentures. After they have been removed you should place them directly into room temperature water or a denture cleaning solution. Never use hot water because it could warp the dentures. Your dentures are delicate, so make sure you are careful when handling them so you don\'t drop them. Also, never try to adjust your dentures yourself. You could ruin them, so you should always seek assistance from your dentist if they feel uncomfortable or loose.') ?>
								</p>
								<h2><?= __t('How Can I Get Started?') ?></h2>
								<p><?= __t('Dr. Lavanya/ Dr Samir and his staff at Cosmocare would be happy to discuss the details about cosmetic dentures with you. To schedule an appointment in Dubai, UAE, please call our office at 04-3798747 or request an appointment online.') ?>
								</p>
								<p>
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.017528419026!2d55.275293015010334!3d25.236334583877916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4312168f44c7%3A0xcfbe1870ffa7c4ae!2sCosmocare%20Teeth%20Filling%2C%20Extractions%2C%20Teeth%20Cleaning%2C%20Zoom%20Whitening!5e0!3m2!1sen!2sae!4v1609403808819!5m2!1sen!2sae"
										width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
										aria-hidden="false" tabindex="0"></iframe>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">

			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="./../images/footer-logo.png" alt="" class="img-fluid">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-lg-none"> <a
									href="https://www.facebook.com/cosmocaremedicalcenter/" target="blank"
									class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.youtube.com/@cosmocaremedicalcenterdubai" target="blank"
									class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://www.instagram.com/cosmocare_dxb/" target="blank" class="hovicon"><i
										class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p><?= __t('To receive email releases, simply provide') ?><br><?= __t('us with your email below') ?>
								</p>
								<form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="form-control"
											placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form>
							</div>
							<div class="footer-social d-none d-lg-block"> <a
									href="https://www.facebook.com/cosmocaremedicalcenter/" target="blank"
									class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.youtube.com/@cosmocaremedicalcenterdubai" target="blank"
									class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://www.instagram.com/cosmocare_dxb/" target="blank" class="hovicon"><i
										class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3><?= __t('Blog Posts') ?></h3>
					<div class="h-decor"></div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="./../images/content/footer-post-author-03.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a
									href="piles-hernia-doctor.html"><?= __t('New Doctor On Our Panel') ?></a></div>
							<p><?= __t('April 1, 2020') ?></p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="./../images/content/footer-post-author-01.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a
									href="tooth-colored-fillings.php"><?= __t('Colored Tooth Filling') ?></a></div>
							<p><?= __t('August 22, 2020') ?></p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="./../images/content/footer-post-author-02.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="prp-therapy.html"><?= __t('PRP Therapy...') ?></a>
							</div>
							<p><?= __t('July 25, 2021') ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3><?= __t('Our Contacts') ?></h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><a href="https://maps.app.goo.gl/UnQLdp7uRi85HLP5A"><?= __t('Room# 07-08 1st Floor, Life Pharmacy') ?>
								<br><?= __t('Building 2nd December Street, Al Satwa Roundabout') ?>
								<br><?= __t('P.O Box 126590, Dubai,U.A.E.') ?></a><br>
							<a href="contact.html" class="btn btn-xs btn-gradient"><i
									class="icon-placeholder2"></i><span><?= __t('Get directions on the map') ?></span><i
									class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">04 379
										8747</span>, <span class="text-nowrap">050 373 4132</span></span></b>
							<br>(<?= __t('24/7 General inquiry') ?>)
						</li>
						<li><i class="icon-black-envelope"></i><a
								href="mailto:info@cosmocaremedicalcenter.com">info@cosmocaremedicalcenter.com</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm"><?= __t('Copyright © 2010-2030') ?> <a
							href="/"><?= __t('Cosmocare Medical Center') ?></a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="http://www.dubaistdclinic.com/" target="_blank"
							title="std testing center"><?= __t('STD Clinic in Dubai') ?></a>
					</div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline"><a href="moh-license.pdf"
								target="_blank">MOH License #: RJRUI1TN-110225</a> &nbsp;&nbsp;&nbsp;</span><i
							class="icon-telephone"></i>&nbsp;&nbsp;<b>04 379 8747</b></div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<!-- Vendors -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="vendor/cookie/jquery.cookie.js"></script>
	<script src="vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="vendor/waypoints/sticky.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="vendor/countTo/jquery.countTo.js"></script>
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	<!-- kenyt.ai code-->
	<script src="https://europe.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript"
		data-bot="56676464"></script>
	<!-- End kenyt.ai code-->
	<!-- whatsapp code-->
	<script>
		var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?72573';
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = url;
		var options = {
			"enabled": true,
			"chatButtonSetting": {
				"backgroundColor": "#4dc247",
				"ctaText": "Online",
				"borderRadius": "50",
				"marginLeft": "0",
				"marginBottom": "50",
				"marginRight": "50",
				"position": "right"
			},
			"brandSetting": {
				"brandName": "Cosmocare Medical Center",
				"brandSubTitle": "Typing.......",
				"brandImg": "https://cosmocaremedicalcenter.com/images/content/services-carousel-01.jpg",
				"welcomeText": "Hi there!\nHow can I help you?",
				"messageText": "Hello, I have a question about {{page_link}}",
				"backgroundColor": "#0a90bd",
				"ctaText": "Start Chat",
				"borderRadius": "25",
				"autoShow": false,
				"phoneNumber": "971503734132"
			}
		};
		s.onload = function () {
			CreateWhatsappChatWidget(options);
		};
		var x = document.getElementsByTagName('script')[0];
		x.parentNode.insertBefore(s, x);
	</script>
	<!-- end whatsapp code-->


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56652657-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-56652657-4');
	</script>
</body>

</html>