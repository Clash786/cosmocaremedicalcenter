<?php require_once __DIR__ . '/inc/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Derma Aesthetics PRP STD Services - Cosmocare Medical Services') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Derma Aesthetics PRP STD Services - Cosmocare Medical Services') ?></title>
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
	<!--page-content-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<span><?= __t('Services') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('What We Offer') ?></div>
					<h1><?= __t('Our Services') ?></h1>
					<div class="h-decor"></div>
					<div class="text-center mt-4">
						<p><?= __t('Patients receive comprehensive care from expert medical teams that focus not only on specific diseases and disorders,') ?><br>
							<?= __t('but also on caring for the whole person') ?></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-01.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Dermatology') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('Dermatology Services') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="warts-treatment.html"><?= __t('Warts Treatment') ?></a></li>
								<li class="nav-item"><a href="mole-removal.html"><?= __t('Moles Removal') ?></a></li>
								<li class="nav-item"><a href="hair-clinic.html"><?= __t('Hair Clinic') ?></a></li>
								<li class="nav-item"><a href="skin-cancer-screening.html"><?= __t('Skin Cancer Screening') ?></a></li>
								<li class="nav-item"><a href="acne-treatment.html"><?= __t('Acne Treatment') ?></a></li>
								<li class="nav-item"><a href="fungal-clinic.html"><?= __t('Fungal Clinic') ?></a></li>
								<li class="nav-item"><a href="pigmentation.html"><?= __t('Pigmentation') ?></a></li>
								<li class="nav-item"><a href="allergy.html"><?= __t('Allergy') ?></a></li>
								<li class="nav-item"><a href="rosacea.html"><?= __t('Rosacea') ?> </a></li>
								<li class="nav-item"><a href="vitiligo.html"><?= __t('Vitiligo') ?></a></li>
								<li class="nav-item"><a href="prp-therapy.html"><?= __t('PRP Therapy') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-02.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Aesthetic Dermatology &amp; Laser') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('Aesthetic Dermatology  & Laser Services') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="botox-fillers.html"><?= __t('Botox & Fillers') ?></a></li>
								<li class="nav-item"><a href="chemical-peeling.html"><?= __t('Chemical peeling') ?></a></li>
								<li class="nav-item"><a href="ha-meso.php"><?= __t('Mesotherapy') ?></a></li>
								<li class="nav-item"><a href="laser-hair-removal.html"><?= __t('Laser Hair Removal') ?></a></li>
								<li class="nav-item"><a href="q-switch-laser.html"><?= __t('Q Switch laser') ?></a></li>
								<li class="nav-item"><a href="tattoo-removal.html"><?= __t('Tattoo Removal') ?></a></li>
								<li class="nav-item"><a href="fractional-laser.html"><?= __t('Fractional Laser') ?></a></li>
								<li class="nav-item"><a href="excess-sweating.html"><?= __t('Excess Sweating') ?></a></li>
								<li class="nav-item"><a href="anti-aging.html"><?= __t('Anti Aging') ?> </a></li>
								<li class="nav-item"><a href="ipl.html"><?= __t('IPL ( Intense Pulse Light)') ?></a></li>
								<li class="nav-item"><a href="microneedling-fractional-radiofrequency-treatment.php"><?= __t('MNRF (Micro Needling Radio Frequency)') ?></a></li>
								<li class="nav-item"><a href="hifu-treatment-.php"><?= __t('HIFU') ?></a></li>
								<li class="nav-item"><a href="services-new.html"><?= __t('New Services') ?></a></li>
								<li class="nav-item"><a href="fat-freezing-coolsculpting.php"><?= __t('Fat Freezing') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-03.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Venereology & Sexual Health Checkup') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('Venereology & Sexual Health Checkup services') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="std-hiv-testing.html"><?= __t('STD HIV Test') ?></a></li>
								<li class="nav-item"><a href="genital-warts-treatment.html"><?= __t('Genital Warts Treatment') ?></a></li>
								<li class="nav-item"><a href="herpes-treatment.html"><?= __t('Herpes Treatment') ?></a></li>
								<li class="nav-item"><a href="chlamydia.html"> <?= __t('Chlamydia') ?> </a></li>
								<li class="nav-item"><a href="hiv-screening.html"><?= __t('HIV Screening') ?></a></li>
								<li class="nav-item"><a href="gonorrhea-treatment.html"><?= __t('Gonorrhea Treatment') ?></a></li>
								<li class="nav-item"><a href="syphilis-treatment.html"><?= __t('Syphilis Treatment') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-04.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Surgery') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('Piles & Hernia') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="piles-hernia.html"><?= __t('Piles Hernia') ?></a></li>
								<li class="nav-item"><a href="hernia-treatment.html"><?= __t('Hernia Treatment') ?></a></li>
								<li class="nav-item"><a href="comprehensive-cancer-screening.html"><?= __t('Comprehensive Cancer Screening') ?></a></li>
								<li class="nav-item"><a href="circumcision.html"><?= __t('Circumcision') ?></a></li>
								<li class="nav-item"><a href="varicose.html"><?= __t('Varicose Vein') ?></a></li>
								<li class="nav-item"><a href="fissure.html"><?= __t('Fissure') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-05.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Gynecology') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('OB Gyne') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="pelvic-pain-treatment.php"><?= __t('Pelvic Pain Treatment') ?></a></li>
								<li class="nav-item"><a href="breastcheckups.html"><?= __t('Breast Checkups') ?></a></li>
								<li class="nav-item"><a href="recurrent-implantation-failures.php"><?= __t('Recurrent Implantation Failures') ?></a></li>
								<li class="nav-item"><a href="pregnancy.html"><?= __t('Pregnancy') ?></a></li>
								<li class="nav-item"><a href="gynaecological-laparoscopy.php"><?= __t('Gynaecological Laparoscopy') ?></a></li>
								<li class="nav-item"><a href="menopause-treatment.php"><?= __t('Menopause Treatment') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-06.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Plastic Surgery') ?></a></h5>
							<div class="h-decor"></div>
							<p><?= __t('Plastic Surgery') ?></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="hair-transplant.html"><?= __t('Hair Transplant') ?></a></li>
								<li class="nav-item"><a href="liposuction.html"><?= __t('Liposuction') ?></a></li>
								<li class="nav-item"><a href="reconstructive-surgery.html"><?= __t('Reconstructive Surgery') ?></a></li>
								<li class="nav-item"><a href="scalp-micro-pigmentation.html"><?= __t('Scalp Micro pigmentation') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-07.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="dentistry.html"><?= __t('Dentistry') ?></a></h5>
							<div class="h-decor"></div>
							<p></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="crown-bridge.html"><?= __t('Crown and Bridge') ?></a></li>
								<li class="nav-item"><a href="scaling-polishing.html"><?= __t('Scaling and Polishing') ?></a></li>
								<li class="nav-item"><a href="tooth-extractions.html"><?= __t('Tooth Extractions') ?></a></li>
								<li class="nav-item"><a href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a></li>
								<li class="nav-item"><a href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a></li>
								<li class="nav-item"><a href="dentures.php"><?= __t('Dentures') ?></a></li>
								<li class="nav-item"><a href="braces.php"><?= __t('Braces') ?></a></li>
								<li class="nav-item"><a href="teeth-whitening.html"><?= __t('Teeth Whitening') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-08.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Family Medicine') ?></a></h5>
							<div class="h-decor"></div>
							<p></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="general-practitioner.html"><?= __t('General Practitioner') ?></a></li>
								<li class="nav-item"><a href="immunization.html"><?= __t('Immunization') ?></a></li>
								<li class="nav-item"><a href="school-health.html"><?= __t('School Health') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="dermatologist.html"><img src="images/content/services-09.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="#"><?= __t('Other Facilities') ?></a></h5>
							<div class="h-decor"></div>
							<p></p>
							<ul class="marker-list-md-line">
								<li class="nav-item"><a href="physiotherapy.html"><?= __t('Physiotherapy') ?></a></li>
								<li class="nav-item"><a href="preventive-health-packages.html"><?= __t('Preventive Health packages') ?></a></li>
								<li class="nav-item"><a href="lab-services.html"><?= __t('Lab Services') ?></a></li>
								<li class="nav-item"><a href="intravenous-therapy.html"><?= __t('Intravenous Therapy') ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<!--footer-->
	<?php include_once 'inc/footer.php'; ?>
	<!--//footer-->
</body>

</html>