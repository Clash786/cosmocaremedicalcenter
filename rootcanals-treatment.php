<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Our dentists in Dubai are specialists in root canal treatment / procedures. Their gentle touch and use of advanced technology ensure that your dental treatments are pain-free. Yes, even your root canal. To schedule an appointment in Dubai, UAE, please call our office at 04-3798747 or request an appointment online.') ?>" />
	<meta name="keywords" content="<?= __t('root canal treatment, dubai, treatment, bone grafting dubai, polishing, dental clinic in dubai, cheap dental clinic') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Root Canal Treatment in Dubai | Specialist Root Canal Treatment | Dental Cosmocare Medical Center') ?></title>
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
										<li class="nav-item"><a class="nav-link active" href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a></li>
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
							<h1><?= __t('Root Canal Treatment in Dubai') ?></h1>
							<p><?= __t('If you are experiencing discomfort in your mouth or tooth, don\'t let fear keep you from getting it treated. Our dentists in Dubai are specialists in root canal treatment / procedures. Their gentle touch and use of advanced technology ensure that your dental treatments are pain-free. Yes, even your root canal.') ?></p>
							<h2><?= __t('Can You Save My Tooth?') ?></h2>
							<p><?= __t('Yes! A root canal will save the structure of your tooth, and enable you to eat, speak and smile normally. Our doctors will determine if a root canal is a right treatment for you after an oral exam of your teeth and gums.') ?> </p>
							<p><?= __t('If Doctor determines that your tooth damage is too severe, he may recommend other treatment options. The best and most effective option is to extract the tooth and replace it with a dental implant. A dental implant procedure replaces a damaged or missing tooth with a natural-looking permanent restoration.') ?></p>
							<p><?= __t('Your tooth is made up of several layers. The outer protective enamel, a sensitive layer of dentin, and an inner pulp that contains the components referred to as the œnerve.') ?></p>
							<p><?= __t('Bacteria-causing germs can easily make their way to the pulp and dentin layers when a tooth is damaged in some way. This damage can be caused by a cavity, crack, or injury that will create a direct path to the delicate inner layers.') ?></p>
							<p><?= __t('This pathway will expose the pulp making it susceptible to an infection from the bacteria. If infection occurs, blood flow to the tooth increases, creating pressure, discomfort, and a problem that needs immediate attention.') ?></p>
							<p><?= __t('Most patients can easily figure out if they suffer from an infection due to the pain it creates. Root canal therapy has a bad reputation because of the pain related to the infection and inflammation.') ?></p>
							<p><?= __t('The only way to get relief from the pain is to have a root canal procedure done. The procedure itself is no more painful than a dental filling. Most patients will feel a sense of relief once the infection and diseased tissue are removed.') ?></p>
							<div class="service-img">
								<img src="images/root-canal-treatment-dubai.svg" width="100%" class="img-fluid" alt="Facial Trauma Surgery in Dubai by Cosmocare Medical Center">
							</div>
							<div>
								<h2><?= __t('How Can I Get Started?') ?></h2>
								<p><?= __t('Dr. Lavanya/ Dr Samir and his staff at Cosmocare would be happy to discuss the details about root canal with you. To schedule an appointment in Dubai, UAE, please call our office at 04-3798747 or request an appointment online.') ?></p>
								<p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.017528419026!2d55.275293015010334!3d25.236334583877916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4312168f44c7%3A0xcfbe1870ffa7c4ae!2sCosmocare%20Teeth%20Filling%2C%20Extractions%2C%20Teeth%20Cleaning%2C%20Zoom%20Whitening!5e0!3m2!1sen!2sae!4v1609403808819!5m2!1sen!2sae" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</p>
								<p>
									<a target="_blank" href="root/Root-Canal.html"> <?= __t('Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment.html"> <?= __t('Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Endodontics.html"> <?= __t('Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cost.html"> <?= __t('Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Cost.html"> <?= __t('Root Canal Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Do-Root-Canals-Hurt.html"> <?= __t('Do Root Canals Hurt') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Therapy.html"> <?= __t('Root Canal Therapy') ?> </a> <br />
									<a target="_blank" href="root/Rct-Dental.html"> <?= __t('Rct Dental') ?> </a> <br />
									<a target="_blank" href="root/Rct-Treatment.html"> <?= __t('Rct Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-And-Crown.html"> <?= __t('Root Canal And Crown') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Treatment.html"> <?= __t('Endodontic Treatment') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Root.html"> <?= __t('Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Rct-Of-Teeth.html"> <?= __t('Rct Of Teeth') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Near-Me.html"> <?= __t('Root Canal Near Me') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Surgery.html"> <?= __t('Root Canal Surgery') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Crown.html"> <?= __t('Root Canal Crown') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal.html"> <?= __t('Failed Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Emergency-Root-Canal.html"> <?= __t('Emergency Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Infected-Root-Canal.html"> <?= __t('Infected Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Front-Tooth.html"> <?= __t('Root Canal Front Tooth') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Therapy.html"> <?= __t('Endodontic Therapy') ?> </a> <br />
									<a target="_blank" href="root/Teeth-Root-Canal.html"> <?= __t('Teeth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-And-Crown-Cost.html"> <?= __t('Root Canal And Crown Cost') ?> </a> <br />
									<a target="_blank" href="root/Average-Cost-Of-Root-Canal.html"> <?= __t('Average Cost Of Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Endodont.html"> <?= __t('Endodont') ?> </a> <br />
									<a target="_blank" href="root/Molar-Root-Canal.html"> <?= __t('Molar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-First-Premolar.html"> <?= __t('Mandibular First Premolar') ?> </a> <br />
									<a target="_blank" href="root/C-Shaped-Canal.html"> <?= __t('C Shaped Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Without-Crown.html"> <?= __t('Root Canal Without Crown') ?> </a> <br />
									<a target="_blank" href="root/Nhs-Root-Canal-Cost.html"> <?= __t('Nhs Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Sealer.html"> <?= __t('Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Endoseal.html"> <?= __t('Endoseal') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Second-Premolar.html"> <?= __t('Maxillary Second Premolar') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Surgery.html"> <?= __t('Endodontic Surgery') ?> </a> <br />
									<a target="_blank" href="root/Rct-Cost.html"> <?= __t('Rct Cost') ?> </a> <br />
									<a target="_blank" href="root/Average-Cost-Of-Root-Canal-And-Crown.html"> <?= __t('Average Cost Of Root Canal And Crown') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Canal.html"> <?= __t('Tooth Canal') ?> </a> <br />
									<a target="_blank" href="root/Mb2-Canal.html"> <?= __t('Mb2 Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-While-Pregnant.html"> <?= __t('Root Canal While Pregnant') ?> </a> <br />
									<a target="_blank" href="root/Rotary-Endodontics.html"> <?= __t('Rotary Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Crown-Without-Root-Canal.html"> <?= __t('Crown Without Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Reddit.html"> <?= __t('Root Canal Reddit') ?> </a> <br />
									<a target="_blank" href="root/Edta-Dental.html"> <?= __t('Edta Dental') ?> </a> <br />
									<a target="_blank" href="root/Dental-Root-Canal-Treatment.html"> <?= __t('Dental Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/A-Root-Canal.html"> <?= __t('A Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Weeping-Canal.html"> <?= __t('Weeping Canal') ?> </a> <br />
									<a target="_blank" href="root/Teeth-Root-Canal-Treatment.html"> <?= __t('Teeth Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Extraction.html"> <?= __t('Root Canal Extraction') ?> </a> <br />
									<a target="_blank" href="root/Obturation-Of-Root-Canal.html"> <?= __t('Obturation Of Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Root-Canal.html"> <?= __t('Calcified Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Bioroot-Rcs.html"> <?= __t('Bioroot Rcs') ?> </a> <br />
									<a target="_blank" href="root/Rct-Treatment-Cost.html"> <?= __t('Rct Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Crown.html"> <?= __t('Root Canal Through Crown') ?> </a> <br />
									<a target="_blank" href="root/Greater-Endodontics.html"> <?= __t('Greater Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Gentle-Wave.html"> <?= __t('Gentle Wave') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Removal.html"> <?= __t('Root Canal Removal') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Nerve-Removal.html"> <?= __t('Tooth Nerve Removal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Crown-Cost.html"> <?= __t('Root Canal Crown Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Nhs.html"> <?= __t('Root Canal Nhs') ?> </a> <br />
									<a target="_blank" href="root/Re-Root-Canal.html"> <?= __t('Re Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Second-Premolar-Canals.html"> <?= __t('Maxillary Second Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Therapy-Cost.html"> <?= __t('Root Canal Therapy Cost') ?> </a> <br />
									<a target="_blank" href="root/Dental-Endodontics.html"> <?= __t('Dental Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Nhs.html"> <?= __t('Root Canal Treatment Nhs') ?> </a> <br />
									<a target="_blank" href="root/Ruth-Canal.html"> <?= __t('Ruth Canal') ?> </a> <br />
									<a target="_blank" href="root/Partial-Root-Canal.html"> <?= __t('Partial Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-X-Ray.html"> <?= __t('Root Canal X Ray') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Tooth.html"> <?= __t('Calcified Tooth') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Canal-Treatment.html"> <?= __t('Tooth Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Affordable-Root-Canal.html"> <?= __t('Affordable Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Cracked-Root-Canal-Tooth.html"> <?= __t('Cracked Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Cheap-Root-Canal.html"> <?= __t('Cheap Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal-Extraction.html"> <?= __t('Failed Root Canal Extraction') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Hurt.html"> <?= __t('Root Canal Hurt') ?> </a> <br />
									<a target="_blank" href="root/Tooth-That-Needs-Root-Canal.html"> <?= __t('Tooth That Needs Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Molar-Roots.html"> <?= __t('Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Prices.html"> <?= __t('Root Canal Prices') ?> </a> <br />
									<a target="_blank" href="root/Tubliseal.html"> <?= __t('Tubliseal') ?> </a> <br />
									<a target="_blank" href="root/Root-Dental.html"> <?= __t('Root Dental') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-And-Capping-Cost.html"> <?= __t('Root Canal Treatment And Capping Cost') ?> </a> <br />
									<a target="_blank" href="root/Adseal-Root-Canal-Sealer.html"> <?= __t('Adseal Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cost-Private.html"> <?= __t('Root Canal Cost Private') ?> </a> <br />
									<a target="_blank" href="root/Molar-Root-Canal-Cost.html"> <?= __t('Molar Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Broken-Root-Canal-Tooth.html"> <?= __t('Broken Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Upper-Second-Premolar-Canals.html"> <?= __t('Upper Second Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-First-Molar-Canals.html"> <?= __t('Mandibular First Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Infected-Tooth-Pulp.html"> <?= __t('Infected Tooth Pulp') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Second-Molar-Canals.html"> <?= __t('Mandibular Second Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Laser-Root-Canal.html"> <?= __t('Laser Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Second-Root-Canal-On-Same-Tooth-With-Crown.html"> <?= __t('Second Root Canal On Same Tooth With Crown') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Decay-Under-Crown-With-Root-Canal.html"> <?= __t('Tooth Decay Under Crown With Root Canal') ?> </a> <br />
									<a target="_blank" href="root/The-Endodontic-Office.html"> <?= __t('The Endodontic Office') ?> </a> <br />
									<a target="_blank" href="root/Rucanal-Dental.html"> <?= __t('Rucanal Dental') ?> </a> <br />
									<a target="_blank" href="root/Emergency-Endodontist.html"> <?= __t('Emergency Endodontist') ?> </a> <br />
									<a target="_blank" href="root/Premolar-Root-Canal.html"> <?= __t('Premolar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Nhs.html"> <?= __t('Root Canal Treatment Nhs') ?> </a> <br />
									<a target="_blank" href="root/Dental-Root-Canal-Cost.html"> <?= __t('Dental Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Tooth-Extraction.html"> <?= __t('Root Canal Tooth Extraction') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-First-Premolar-Canals.html"> <?= __t('Maxillary First Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Wisdom-Tooth-Root-Canal.html"> <?= __t('Wisdom Tooth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-On-Crowned-Tooth.html"> <?= __t('Root Canal On Crowned Tooth') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Services.html"> <?= __t('Endodontic Services') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Molar-Roots.html"> <?= __t('Mandibular Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/One-Endodontics.html"> <?= __t('One Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Gentle-Wave-Endodontics.html"> <?= __t('Gentle Wave Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-No-Crown.html"> <?= __t('Root Canal No Crown') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Molar-Roots.html"> <?= __t('Maxillary Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Fractured-Tooth-Root.html"> <?= __t('Fractured Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Endodontist-Root-Canal.html"> <?= __t('Endodontist Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-First-Molar-Canals.html"> <?= __t('Maxillary First Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Canal.html"> <?= __t('Calcified Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cavity.html"> <?= __t('Root Canal Cavity') ?> </a> <br />
									<a target="_blank" href="root/Untreated-Calcified-Canal.html"> <?= __t('Untreated Calcified Canal') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Therapy-Molar-Tooth.html"> <?= __t('Endodontic Therapy Molar Tooth') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Toothache.html"> <?= __t('Root Canal Toothache') ?> </a> <br />
									<a target="_blank" href="root/Re-Root-Canal-Treatment.html"> <?= __t('Re Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Upper-First-Premolar-Canals.html"> <?= __t('Upper First Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Endorez.html"> <?= __t('Endorez') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cost-For-One-Tooth.html"> <?= __t('Root Canal Cost For One Tooth') ?> </a> <br />
									<a target="_blank" href="root/Painless-Root-Canal.html"> <?= __t('Painless Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Pregnant.html"> <?= __t('Root Canal Pregnant') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-First-Premolar-Roots.html"> <?= __t('Maxillary First Premolar Roots') ?> </a> <br />
									<a target="_blank" href="root/Emergency-Root-Canal-Cost.html"> <?= __t('Emergency Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Fractured-Root-Canal.html"> <?= __t('Fractured Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Second-Premolar-Canals.html"> <?= __t('Mandibular Second Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Ceraseal-Bioceramic-Sealer.html"> <?= __t('Ceraseal Bioceramic Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Slideshare.html"> <?= __t('Root Canal Treatment Slideshare') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Nerve.html"> <?= __t('Root Canal Nerve') ?> </a> <br />
									<a target="_blank" href="root/Tooth-With-4-Roots.html"> <?= __t('Tooth With 4 Roots') ?> </a> <br />
									<a target="_blank" href="root/Single-Visit-Endodontics.html"> <?= __t('Single Visit Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Premolar-Roots.html"> <?= __t('Maxillary Premolar Roots') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Second-Molar-Roots.html"> <?= __t('Maxillary Second Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Operation.html"> <?= __t('Root Canal Operation') ?> </a> <br />
									<a target="_blank" href="root/Double-Root-Canal.html"> <?= __t('Double Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cleaning.html"> <?= __t('Root Canal Cleaning') ?> </a> <br />
									<a target="_blank" href="root/Painless-Root-Canal-Treatment.html"> <?= __t('Painless Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Bonita-Endodontics.html"> <?= __t('Bonita Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Tan-Endodontic.html"> <?= __t('Tan Endodontic') ?> </a> <br />
									<a target="_blank" href="root/Care-Endodontics.html"> <?= __t('Care Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Untreated-Root-Canal.html"> <?= __t('Untreated Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Precio.html"> <?= __t('Root Canal Precio') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Tooth-Sensitive.html"> <?= __t('Root Canal Tooth Sensitive') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Care.html"> <?= __t('Endodontic Care') ?> </a> <br />
									<a target="_blank" href="root/Surgical-Endodontics.html"> <?= __t('Surgical Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Same-Day-Root-Canal.html"> <?= __t('Same Day Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Reddit-Root-Canal.html"> <?= __t('Reddit Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Tooth-Extraction.html"> <?= __t('Root Canal Tooth Extraction') ?> </a> <br />
									<a target="_blank" href="root/Re-Rct.html"> <?= __t('Re Rct') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Medisave.html"> <?= __t('Root Canal Medisave') ?> </a> <br />
									<a target="_blank" href="root/C-Shaped-Root-Canal.html"> <?= __t('C Shaped Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Infected-Pulp.html"> <?= __t('Infected Pulp') ?> </a> <br />
									<a target="_blank" href="root/Unfinished-Root-Canal.html"> <?= __t('Unfinished Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Crown-Cost.html"> <?= __t('Root Canal Through Crown Cost') ?> </a> <br />
									<a target="_blank" href="root/Jc-Endodontics.html"> <?= __t('Jc Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Cheap-Root-Canal-Dentist-Near-Me.html"> <?= __t('Cheap Root Canal Dentist Near Me') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal-Treatment.html"> <?= __t('Failed Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Re-Root-Canal-Treatment-Cost.html"> <?= __t('Re Root Canal Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Curved-Tooth-Root.html"> <?= __t('Curved Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Route-Kanal-Teeth.html"> <?= __t('Route Kanal Teeth') ?> </a> <br />
									<a target="_blank" href="root/Adseal-Sealer.html"> <?= __t('Adseal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-On-Front-Tooth-With-Crown.html"> <?= __t('Root Canal On Front Tooth With Crown') ?> </a> <br />
									<a target="_blank" href="root/Rc-Endodontics.html"> <?= __t('Rc Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Sedation.html"> <?= __t('Root Canal Sedation') ?> </a> <br />
									<a target="_blank" href="root/Cracked-Tooth-Root.html"> <?= __t('Cracked Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Molar-Canals.html"> <?= __t('Mandibular Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Teeth-Root-Canal-Cost.html"> <?= __t('Teeth Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Rct-Dental-Treatment.html"> <?= __t('Rct Dental Treatment') ?> </a> <br />
									<a target="_blank" href="root/Low-Cost-Root-Canal.html"> <?= __t('Low Cost Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Crown-Over-Root-Canal.html"> <?= __t('Crown Over Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-Teeth-Treatment.html"> <?= __t('Rct Teeth Treatment') ?> </a> <br />
									<a target="_blank" href="root/Fractured-Root-Canal-Tooth-Extraction.html"> <?= __t('Fractured Root Canal Tooth Extraction') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Surgery-Cost.html"> <?= __t('Root Canal Surgery Cost') ?> </a> <br />
									<a target="_blank" href="root/Pediatric-Root-Canal.html"> <?= __t('Pediatric Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Expert-Endodontics.html"> <?= __t('Expert Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Incomplete-Root-Canal.html"> <?= __t('Incomplete Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Sensitive-To-Cold.html"> <?= __t('Root Canal Sensitive To Cold') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-Second-Molar-Canals.html"> <?= __t('Maxillary Second Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Sealer.html"> <?= __t('Endodontic Sealer') ?> </a> <br />
									<a target="_blank" href="root/Do-Endodontists-Pull-Teeth.html"> <?= __t('Do Endodontists Pull Teeth') ?> </a> <br />
									<a target="_blank" href="root/Second-Root-Canal-On-Same-Tooth.html"> <?= __t('Second Root Canal On Same Tooth') ?> </a> <br />
									<a target="_blank" href="root/Murang-Root-Canal.html"> <?= __t('Murang Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Gentle-Wave-Root-Canal.html"> <?= __t('Gentle Wave Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Magkano-Magpa-Root-Canal.html"> <?= __t('Magkano Magpa Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-X-Ray.html"> <?= __t('Rct X Ray') ?> </a> <br />
									<a target="_blank" href="root/Cracked-Tooth-Under-Crown-With-Root-Canal.html"> <?= __t('Cracked Tooth Under Crown With Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Roots-Endodontics.html"> <?= __t('Roots Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Under-Crown.html"> <?= __t('Root Canal Under Crown') ?> </a> <br />
									<a target="_blank" href="root/Edta-Root-Canal.html"> <?= __t('Edta Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Dentist-Endodontist-Near-Me.html"> <?= __t('Dentist Endodontist Near Me') ?> </a> <br />
									<a target="_blank" href="root/Loose-Crown-On-Root-Canal-Tooth.html"> <?= __t('Loose Crown On Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Upper-Second-Molar-Canals.html"> <?= __t('Upper Second Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Tooth-With-3-Roots.html"> <?= __t('Tooth With 3 Roots') ?> </a> <br />
									<a target="_blank" href="root/Pediatric-Endodontics.html"> <?= __t('Pediatric Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Incisor-Root-Canal.html"> <?= __t('Incisor Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Dentist-That-Do-Root-Canals.html"> <?= __t('Dentist That Do Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Dentist-Root-Canal-Specialist.html"> <?= __t('Dentist Root Canal Specialist') ?> </a> <br />
									<a target="_blank" href="root/Deep-Root-Canal.html"> <?= __t('Deep Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Central-Endodontics.html"> <?= __t('Central Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Pulp-Removal.html"> <?= __t('Tooth Pulp Removal') ?> </a> <br />
									<a target="_blank" href="root/Edta-Endodontics.html"> <?= __t('Edta Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-First-Molar-Roots.html"> <?= __t('Mandibular First Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Curved-Root-Canal.html"> <?= __t('Curved Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-Molar.html"> <?= __t('Rct Molar') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Second-Visit.html"> <?= __t('Root Canal Second Visit') ?> </a> <br />
									<a target="_blank" href="root/Cheap-Root-Canal-Treatment.html"> <?= __t('Cheap Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-In-Spanish-Dental.html"> <?= __t('Root Canal In Spanish Dental') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-2Nd-Molar-Canals.html"> <?= __t('Mandibular 2Nd Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Wave-Endodontics.html"> <?= __t('Wave Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Clinic.html"> <?= __t('Root Canal Clinic') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Extraction-Cost.html"> <?= __t('Root Canal Extraction Cost') ?> </a> <br />
									<a target="_blank" href="root/Endodoncia-Root-Canal.html"> <?= __t('Endodoncia Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Reverse-Root-Canal.html"> <?= __t('Reverse Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-On-Front-Tooth-With-Veneer.html"> <?= __t('Root Canal On Front Tooth With Veneer') ?> </a> <br />
									<a target="_blank" href="root/Rct-In-Teeth-Cost.html"> <?= __t('Rct In Teeth Cost') ?> </a> <br />
									<a target="_blank" href="root/Bioceramic-Root-Canal-Sealer.html"> <?= __t('Bioceramic Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Cheap-Endodontist-Near-Me.html"> <?= __t('Cheap Endodontist Near Me') ?> </a> <br />
									<a target="_blank" href="root/Endodontist-Cost.html"> <?= __t('Endodontist Cost') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-First-Premolar-Canals.html"> <?= __t('Mandibular First Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Bicuspid-Root-Canal.html"> <?= __t('Bicuspid Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Best-Root-Canal-Sealer.html"> <?= __t('Best Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Maxillary-2Nd-Molar-Roots.html"> <?= __t('Maxillary 2Nd Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/The-Root-Canal-Specialist.html"> <?= __t('The Root Canal Specialist') ?> </a> <br />
									<a target="_blank" href="root/Root-Dental-Specialists.html"> <?= __t('Root Dental Specialists') ?> </a> <br />
									<a target="_blank" href="root/Glendale-Endodontics.html"> <?= __t('Glendale Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Temporary-Crown.html"> <?= __t('Root Canal Temporary Crown') ?> </a> <br />
									<a target="_blank" href="root/Dental-Root-Canal-Treatment-Cost.html"> <?= __t('Dental Root Canal Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Rut-Canal-Dental.html"> <?= __t('Rut Canal Dental') ?> </a> <br />
									<a target="_blank" href="root/Cost-Of-Root-Canal-Ontario.html"> <?= __t('Cost Of Root Canal Ontario') ?> </a> <br />
									<a target="_blank" href="root/Broken-Tooth-Root.html"> <?= __t('Broken Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Emergency-Root-Canal-Treatment.html"> <?= __t('Emergency Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Premolar-Roots.html"> <?= __t('Mandibular Premolar Roots') ?> </a> <br />
									<a target="_blank" href="root/Elite-Root-Canal-Specialties.html"> <?= __t('Elite Root Canal Specialties') ?> </a> <br />
									<a target="_blank" href="root/Enhanced-Endodontics.html"> <?= __t('Enhanced Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Nerve-Removal.html"> <?= __t('Root Canal Nerve Removal') ?> </a> <br />
									<a target="_blank" href="root/Unnecessary-Root-Canal.html"> <?= __t('Unnecessary Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Manhattan-Endodontics.html"> <?= __t('Manhattan Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Front-Tooth-Root.html"> <?= __t('Front Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Ah-Sealer.html"> <?= __t('Ah Sealer') ?> </a> <br />
									<a target="_blank" href="root/Adseal-Meta-Biomed.html"> <?= __t('Adseal Meta Biomed') ?> </a> <br />
									<a target="_blank" href="root/Lipkin-Root-Canals.html"> <?= __t('Lipkin Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Microscopic-Endodontics.html"> <?= __t('Microscopic Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Multiple-Root-Canals.html"> <?= __t('Multiple Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Infected-Tooth-Root-Canal.html"> <?= __t('Infected Tooth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Premolar-Canals.html"> <?= __t('Mandibular Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal-Cracked-Tooth.html"> <?= __t('Failed Root Canal Cracked Tooth') ?> </a> <br />
									<a target="_blank" href="root/Lasers-In-Endodontics.html"> <?= __t('Lasers In Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Removal-Cost.html"> <?= __t('Root Canal Removal Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Inflammation.html"> <?= __t('Root Canal Inflammation') ?> </a> <br />
									<a target="_blank" href="root/Endodontists-In-My-Area.html"> <?= __t('Endodontists In My Area') ?> </a> <br />
									<a target="_blank" href="root/Teeth-Root-Canal-Treatment-Cost.html"> <?= __t('Teeth Root Canal Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Pulp.html"> <?= __t('Root Canal Pulp') ?> </a> <br />
									<a target="_blank" href="root/Dentist-That-Specializes-In-Root-Canals.html"> <?= __t('Dentist That Specializes In Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal-Nhs.html"> <?= __t('Failed Root Canal Nhs') ?> </a> <br />
									<a target="_blank" href="root/Upper-Molar-Root-Canal.html"> <?= __t('Upper Molar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Cracked-Root-Canal.html"> <?= __t('Cracked Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Endoflas-Fs.html"> <?= __t('Endoflas Fs') ?> </a> <br />
									<a target="_blank" href="root/Need-A-Root-Canal.html"> <?= __t('Need A Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Prices-Near-Me.html"> <?= __t('Root Canal Prices Near Me') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-2Nd-Premolar-Canals.html"> <?= __t('Mandibular 2Nd Premolar Canals') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Care.html"> <?= __t('Root Canal Care') ?> </a> <br />
									<a target="_blank" href="root/Endoseal-Sealer.html"> <?= __t('Endoseal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Premolar-Root-Canal-Cost.html"> <?= __t('Premolar Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Broken-Root-Canal-Tooth-Removal.html"> <?= __t('Broken Root Canal Tooth Removal') ?> </a> <br />
									<a target="_blank" href="root/Re-Rct-Treatment.html"> <?= __t('Re Rct Treatment') ?> </a> <br />
									<a target="_blank" href="root/Redoing-A-Root-Canal.html"> <?= __t('Redoing A Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Laser-Root-Canal-Treatment.html"> <?= __t('Laser Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Tooth-Sensitive-To-Cold.html"> <?= __t('Root Canal Tooth Sensitive To Cold') ?> </a> <br />
									<a target="_blank" href="root/Removing-Root-Canal-Tooth.html"> <?= __t('Removing Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cost-In-Aster-Clinic.html"> <?= __t('Root Canal Cost In Aster Clinic') ?> </a> <br />
									<a target="_blank" href="root/Broken-Root-Canal.html"> <?= __t('Broken Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-Root-Canal.html"> <?= __t('Rct Root Canal') ?> </a> <br />
									<a target="_blank" href="root/X-Ray-Of-Tooth-That-Needs-Root-Canal.html"> <?= __t('X Ray Of Tooth That Needs Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Endodontist-Day.html"> <?= __t('Endodontist Day') ?> </a> <br />
									<a target="_blank" href="root/Broken-Crown-Tooth-Root-Canal.html"> <?= __t('Broken Crown Tooth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Single-Visit-Root-Canal-Treatment.html"> <?= __t('Single Visit Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Dental-Clinic.html"> <?= __t('Root Dental Clinic') ?> </a> <br />
									<a target="_blank" href="root/Safe-Endodontics.html"> <?= __t('Safe Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Roekoseal.html"> <?= __t('Roekoseal') ?> </a> <br />
									<a target="_blank" href="root/Centerville-Endodontics.html"> <?= __t('Centerville Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Tooth-Root-Canal.html"> <?= __t('Calcified Tooth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Implant.html"> <?= __t('Root Canal Implant') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-On-Front-Tooth-Cost.html"> <?= __t('Root Canal On Front Tooth Cost') ?> </a> <br />
									<a target="_blank" href="root/Harga-Root-Canal-Treatment.html"> <?= __t('Harga Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Nhs-Endodontist-Near-Me.html"> <?= __t('Nhs Endodontist Near Me') ?> </a> <br />
									<a target="_blank" href="root/Non-Surgical-Endodontic-Treatment.html"> <?= __t('Non Surgical Endodontic Treatment') ?> </a> <br />
									<a target="_blank" href="root/Endomotor-Rct.html"> <?= __t('Endomotor Rct') ?> </a> <br />
									<a target="_blank" href="root/Upper-Molar-Canals.html"> <?= __t('Upper Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Second-Molar-Roots.html"> <?= __t('Mandibular Second Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Specialist.html"> <?= __t('Root Canal Treatment Specialist') ?> </a> <br />
									<a target="_blank" href="root/Over-Obturation.html"> <?= __t('Over Obturation') ?> </a> <br />
									<a target="_blank" href="root/Chipped-Root-Canal-Tooth.html"> <?= __t('Chipped Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Tooth-Root.html"> <?= __t('Calcified Tooth Root') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Fillings.html"> <?= __t('Root Canal Fillings') ?> </a> <br />
									<a target="_blank" href="root/Overfilled-Root-Canal.html"> <?= __t('Overfilled Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Perforated-Root-Canal.html"> <?= __t('Perforated Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Canal-In-Tooth.html"> <?= __t('Calcified Canal In Tooth') ?> </a> <br />
									<a target="_blank" href="root/Holistic-Root-Canal.html"> <?= __t('Holistic Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Apexit-Sealer.html"> <?= __t('Apexit Sealer') ?> </a> <br />
									<a target="_blank" href="root/Two-Root-Canals-At-Once.html"> <?= __t('Two Root Canals At Once') ?> </a> <br />
									<a target="_blank" href="root/Whitening-Root-Canal-Tooth.html"> <?= __t('Whitening Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Infected-Root-Canal-Treatment.html"> <?= __t('Infected Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Molar-Teeth-Roots.html"> <?= __t('Molar Teeth Roots') ?> </a> <br />
									<a target="_blank" href="root/Rct-Obturation.html"> <?= __t('Rct Obturation') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Clinic.html"> <?= __t('Endodontic Clinic') ?> </a> <br />
									<a target="_blank" href="root/Exposed-Root-Canal.html"> <?= __t('Exposed Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Laser-Root.html"> <?= __t('Laser Root') ?> </a> <br />
									<a target="_blank" href="root/Tooth-And-Root.html"> <?= __t('Tooth And Root') ?> </a> <br />
									<a target="_blank" href="root/Apa-Itu-Root-Canal.html"> <?= __t('Apa Itu Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Premolar-Root.html"> <?= __t('Premolar Root') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-And-Crown-Same-Day.html"> <?= __t('Root Canal And Crown Same Day') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Still-Sensitive.html"> <?= __t('Root Canal Still Sensitive') ?> </a> <br />
									<a target="_blank" href="root/Cracked-Root.html"> <?= __t('Cracked Root') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-In-Tagalog.html"> <?= __t('Root Canal In Tagalog') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Near-Me-Cheap.html"> <?= __t('Root Canal Near Me Cheap') ?> </a> <br />
									<a target="_blank" href="root/Non-Surgical-Root-Canal.html"> <?= __t('Non Surgical Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Infected-Root-Canal-Extraction.html"> <?= __t('Infected Root Canal Extraction') ?> </a> <br />
									<a target="_blank" href="root/Ah+-Sealer.html"> <?= __t('Ah+ Sealer') ?> </a> <br />
									<a target="_blank" href="root/Assured-Endodontics.html"> <?= __t('Assured Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Endofill-Sealer.html"> <?= __t('Endofill Sealer') ?> </a> <br />
									<a target="_blank" href="root/Laser-Root-Canal-Treatment-Cost.html"> <?= __t('Laser Root Canal Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Pulp-Chamber-And-Pulp-Canal.html"> <?= __t('Pulp Chamber And Pulp Canal') ?> </a> <br />
									<a target="_blank" href="root/Second-Root-Canal.html"> <?= __t('Second Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Then-Crown.html"> <?= __t('Root Canal Then Crown') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Replacement.html"> <?= __t('Root Canal Replacement') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Appointment.html"> <?= __t('Root Canal Appointment') ?> </a> <br />
									<a target="_blank" href="root/Surgical-Root-Canal.html"> <?= __t('Surgical Root Canal') ?> </a> <br />
									<a target="_blank" href="root/The-Root-Canal-Guys.html"> <?= __t('The Root Canal Guys') ?> </a> <br />
									<a target="_blank" href="root/Hyperemic-Pulp-Root-Canal.html"> <?= __t('Hyperemic Pulp Root Canal') ?> </a> <br />
									<a target="_blank" href="root/No-Of-Roots-In-Teeth.html"> <?= __t('No Of Roots In Teeth') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-In-Telugu.html"> <?= __t('Root Canal Treatment In Telugu') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-In-Chinese.html"> <?= __t('Root Canal Treatment In Chinese') ?> </a> <br />
									<a target="_blank" href="root/Superior-Endodontics.html"> <?= __t('Superior Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Tooth-Loose.html"> <?= __t('Root Canal Tooth Loose') ?> </a> <br />
									<a target="_blank" href="root/Rct-Root-Canal-Treatment.html"> <?= __t('Rct Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Weeping-Canals-In-Endodontics.html"> <?= __t('Weeping Canals In Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Local-Endodontist.html"> <?= __t('Local Endodontist') ?> </a> <br />
									<a target="_blank" href="root/Zical-Sealer.html"> <?= __t('Zical Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-And-Pregnancy.html"> <?= __t('Root Canal And Pregnancy') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Without-Root.html"> <?= __t('Tooth Without Root') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Decay.html"> <?= __t('Root Canal Decay') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Crown.html"> <?= __t('Root Canal Treatment Crown') ?> </a> <br />
									<a target="_blank" href="root/Toothache-In-Root-Canal-Tooth.html"> <?= __t('Toothache In Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Rct-Specialist.html"> <?= __t('Rct Specialist') ?> </a> <br />
									<a target="_blank" href="root/Rct-And-Capping-Of-Teeth-Cost.html"> <?= __t('Rct And Capping Of Teeth Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Restoration.html"> <?= __t('Root Canal Restoration') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-And-Crown.html"> <?= __t('Root Canal Treatment And Crown') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Root-Inflammation.html"> <?= __t('Tooth Root Inflammation') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Permanent-Bridge.html"> <?= __t('Root Canal Through Permanent Bridge') ?> </a> <br />
									<a target="_blank" href="root/Third-Root-Canal-On-Same-Tooth.html"> <?= __t('Third Root Canal On Same Tooth') ?> </a> <br />
									<a target="_blank" href="root/Nhs-Endodontist.html"> <?= __t('Nhs Endodontist') ?> </a> <br />
									<a target="_blank" href="root/Root-Fillings.html"> <?= __t('Root Fillings') ?> </a> <br />
									<a target="_blank" href="root/Grossman-Sealer.html"> <?= __t('Grossman Sealer') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Obturation.html"> <?= __t('Endodontic Obturation') ?> </a> <br />
									<a target="_blank" href="root/3-Root-Canals.html"> <?= __t('3 Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Holistic-Dentistry-Root-Canal.html"> <?= __t('Holistic Dentistry Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Private-Dentist-Root-Canal-Cost.html"> <?= __t('Private Dentist Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Rucanal-Tooth.html"> <?= __t('Rucanal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Typical-Root-Canal-Cost.html"> <?= __t('Typical Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Inflamed-Root-Canal.html"> <?= __t('Inflamed Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Infected-Root.html"> <?= __t('Infected Root') ?> </a> <br />
									<a target="_blank" href="root/Temporary-Root-Canal.html"> <?= __t('Temporary Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Nitrous-Oxide-For-Root-Canal.html"> <?= __t('Nitrous Oxide For Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-Specialist-Near-Me.html"> <?= __t('Rct Specialist Near Me') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Centre.html"> <?= __t('Endodontic Centre') ?> </a> <br />
									<a target="_blank" href="root/Cavity-In-Root-Canal-Tooth.html"> <?= __t('Cavity In Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Microscopic-Root-Canal.html"> <?= __t('Microscopic Root Canal') ?> </a> <br />
									<a target="_blank" href="root/External-Bleaching-Root-Canal-Tooth.html"> <?= __t('External Bleaching Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Township-Endodontics.html"> <?= __t('Township Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Laser-Rct.html"> <?= __t('Laser Rct') ?> </a> <br />
									<a target="_blank" href="root/Orthodontist-Root-Canal.html"> <?= __t('Orthodontist Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Molar-With-4-Roots.html"> <?= __t('Molar With 4 Roots') ?> </a> <br />
									<a target="_blank" href="root/Zoe-Sealer.html"> <?= __t('Zoe Sealer') ?> </a> <br />
									<a target="_blank" href="root/Endoseal-Root-Canal-Sealer.html"> <?= __t('Endoseal Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Air-Emphysema-Root-Canal.html"> <?= __t('Air Emphysema Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Guys.html"> <?= __t('Root Canal Guys') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Treatment-Cost.html"> <?= __t('Endodontic Treatment Cost') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Under-Bridge.html"> <?= __t('Root Canal Under Bridge') ?> </a> <br />
									<a target="_blank" href="root/Rct-Treated-Tooth.html"> <?= __t('Rct Treated Tooth') ?> </a> <br />
									<a target="_blank" href="root/Bioroot-Sealer.html"> <?= __t('Bioroot Sealer') ?> </a> <br />
									<a target="_blank" href="root/The-Root-Canal.html"> <?= __t('The Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Qc-Endodontics.html"> <?= __t('Qc Endodontics') ?> </a> <br />
									<a target="_blank" href="root/C-Shaped-Canal-Obturation.html"> <?= __t('C Shaped Canal Obturation') ?> </a> <br />
									<a target="_blank" href="root/Molar-Root-Canal-Treatment.html"> <?= __t('Molar Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/First-Molar-Root-Canal.html"> <?= __t('First Molar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Decay-Under-Crown-With-Root-Canal.html"> <?= __t('Decay Under Crown With Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Therapy-Molar.html"> <?= __t('Root Canal Therapy Molar') ?> </a> <br />
									<a target="_blank" href="root/Teeth-Canal-Treatment.html"> <?= __t('Teeth Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Lateral-Canals-In-Endodontics.html"> <?= __t('Lateral Canals In Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Nhs-Dentist-Root-Canal-Cost.html"> <?= __t('Nhs Dentist Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/2-Root-Canals-In-One-Day.html"> <?= __t('2 Root Canals In One Day') ?> </a> <br />
									<a target="_blank" href="root/Tooth-Decay-Root-Canal.html"> <?= __t('Tooth Decay Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Safe.html"> <?= __t('Root Canal Safe') ?> </a> <br />
									<a target="_blank" href="root/Re-Rct-Cost.html"> <?= __t('Re Rct Cost') ?> </a> <br />
									<a target="_blank" href="root/Palatal-Canal.html"> <?= __t('Palatal Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canals-In-Mandibular-First-Molar.html"> <?= __t('Root Canals In Mandibular First Molar') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Second-Premolar-Roots.html"> <?= __t('Mandibular Second Premolar Roots') ?> </a> <br />
									<a target="_blank" href="root/Dentist-For-Root-Canal-Specialist.html"> <?= __t('Dentist For Root Canal Specialist') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Without-Crown-Reddit.html"> <?= __t('Root Canal Without Crown Reddit') ?> </a> <br />
									<a target="_blank" href="root/Ribbon-Root-Canal-Sealer.html"> <?= __t('Ribbon Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Dentist-Near-Me-That-Do-Root-Canals.html"> <?= __t('Dentist Near Me That Do Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Having-A-Root-Canal.html"> <?= __t('Having A Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Pulpdent-Root-Canal-Sealer.html"> <?= __t('Pulpdent Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Tooth-14-Root-Canal.html"> <?= __t('Tooth 14 Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Centre.html"> <?= __t('Root Canal Centre') ?> </a> <br />
									<a target="_blank" href="root/Canal-Dentist.html"> <?= __t('Canal Dentist') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Front-Tooth.html"> <?= __t('Root Canal Treatment Front Tooth') ?> </a> <br />
									<a target="_blank" href="root/Rc-Sealer.html"> <?= __t('Rc Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Pulp.html"> <?= __t('Root Pulp') ?> </a> <br />
									<a target="_blank" href="root/Rotten-Root-Canal.html"> <?= __t('Rotten Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Cost-For-One-Teeth.html"> <?= __t('Root Canal Treatment Cost For One Teeth') ?> </a> <br />
									<a target="_blank" href="root/Curved-Root.html"> <?= __t('Curved Root') ?> </a> <br />
									<a target="_blank" href="root/Molar-Tooth-Root-Canal.html"> <?= __t('Molar Tooth Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Dental-Crown.html"> <?= __t('Root Canal Dental Crown') ?> </a> <br />
									<a target="_blank" href="root/Specialist-Root-Canal-Cost.html"> <?= __t('Specialist Root Canal Cost') ?> </a> <br />
									<a target="_blank" href="root/Pulp-Capping-Near-Me.html"> <?= __t('Pulp Capping Near Me') ?> </a> <br />
									<a target="_blank" href="root/Meta-Adseal.html"> <?= __t('Meta Adseal') ?> </a> <br />
									<a target="_blank" href="root/3-Root-Molar.html"> <?= __t('3 Root Molar') ?> </a> <br />
									<a target="_blank" href="root/Route-Kanal-Teeth-Cost.html"> <?= __t('Route Kanal Teeth Cost') ?> </a> <br />
									<a target="_blank" href="root/Calcified-Root-Canal-Treatment.html"> <?= __t('Calcified Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Look-Like.html"> <?= __t('Root Canal Look Like') ?> </a> <br />
									<a target="_blank" href="root/Mb2-Canal-In-Maxillary-First-Molar.html"> <?= __t('Mb2 Canal In Maxillary First Molar') ?> </a> <br />
									<a target="_blank" href="root/4-Root-Canals.html"> <?= __t('4 Root Canals') ?> </a> <br />
									<a target="_blank" href="root/Tooth-With-5-Roots.html"> <?= __t('Tooth With 5 Roots') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Fractured-Tooth.html"> <?= __t('Root Canal Fractured Tooth') ?> </a> <br />
									<a target="_blank" href="root/Best-Dentist-For-Root-Canal.html"> <?= __t('Best Dentist For Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Bleaching.html"> <?= __t('Endodontic Bleaching') ?> </a> <br />
									<a target="_blank" href="root/Obturation-Rct.html"> <?= __t('Obturation Rct') ?> </a> <br />
									<a target="_blank" href="root/Endodontic-Therapy-Premolar-Tooth.html"> <?= __t('Endodontic Therapy Premolar Tooth') ?> </a> <br />
									<a target="_blank" href="root/Pulling-A-Root-Canal-Tooth.html"> <?= __t('Pulling A Root Canal Tooth') ?> </a> <br />
									<a target="_blank" href="root/Missed-Canals-In-Endodontics.html"> <?= __t('Missed Canals In Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Removing-Root-Canal-Treated-Tooth.html"> <?= __t('Removing Root Canal Treated Tooth') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-2Nd-Molar-Roots.html"> <?= __t('Mandibular 2Nd Molar Roots') ?> </a> <br />
									<a target="_blank" href="root/Orthodontics-And-Endodontics.html"> <?= __t('Orthodontics And Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Molar-Canals.html"> <?= __t('Molar Canals') ?> </a> <br />
									<a target="_blank" href="root/Bjm-Root-Canal-Sealer.html"> <?= __t('Bjm Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Bridge.html"> <?= __t('Root Canal Bridge') ?> </a> <br />
									<a target="_blank" href="root/Saratoga-Endodontic-Care.html"> <?= __t('Saratoga Endodontic Care') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-In-Pregnancy.html"> <?= __t('Root Canal Treatment In Pregnancy') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Zirconia-Crown.html"> <?= __t('Root Canal Through Zirconia Crown') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-Molar-Root-Canal.html"> <?= __t('Mandibular Molar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Best-Root-Canal-Specialist.html"> <?= __t('Best Root Canal Specialist') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Bridge.html"> <?= __t('Root Canal Through Bridge') ?> </a> <br />
									<a target="_blank" href="root/The-Cost-Of-A-Root-Canal.html"> <?= __t('The Cost Of A Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rct-Premolar.html"> <?= __t('Rct Premolar') ?> </a> <br />
									<a target="_blank" href="root/Root-Specialist.html"> <?= __t('Root Specialist') ?> </a> <br />
									<a target="_blank" href="root/Failed-Root-Canal-Reddit.html"> <?= __t('Failed Root Canal Reddit') ?> </a> <br />
									<a target="_blank" href="root/Lateral-Incisor-Root-Canal.html"> <?= __t('Lateral Incisor Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Consultation.html"> <?= __t('Root Canal Consultation') ?> </a> <br />
									<a target="_blank" href="root/Failed-Rct.html"> <?= __t('Failed Rct') ?> </a> <br />
									<a target="_blank" href="root/Front-Tooth-Root-Canal-Without-Crown.html"> <?= __t('Front Tooth Root Canal Without Crown') ?> </a> <br />
									<a target="_blank" href="root/Dental-Route-Kanal.html"> <?= __t('Dental Route Kanal') ?> </a> <br />
									<a target="_blank" href="root/Endodontics-On.html"> <?= __t('Endodontics On') ?> </a> <br />
									<a target="_blank" href="root/Berg-Endodontics.html"> <?= __t('Berg Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Emergency-Dentist-Root-Canal.html"> <?= __t('Emergency Dentist Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-Medisave.html"> <?= __t('Root Canal Treatment Medisave') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Through-Gum.html"> <?= __t('Root Canal Through Gum') ?> </a> <br />
									<a target="_blank" href="root/Unsuccessful-Root-Canal.html"> <?= __t('Unsuccessful Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Best-Dentist-For-Root-Canal-Treatment.html"> <?= __t('Best Dentist For Root Canal Treatment') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-2Nd-Visit.html"> <?= __t('Root Canal 2Nd Visit') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-For-Milk-Teeth.html"> <?= __t('Root Canal For Milk Teeth') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Treatment-X-Ray.html"> <?= __t('Root Canal Treatment X Ray') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-And-Dental-Trauma-Center.html"> <?= __t('Root Canal And Dental Trauma Center') ?> </a> <br />
									<a target="_blank" href="root/Zical-Root-Canal-Sealer.html"> <?= __t('Zical Root Canal Sealer') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Of-Wisdom-Tooth.html"> <?= __t('Root Canal Of Wisdom Tooth') ?> </a> <br />
									<a target="_blank" href="root/Short-Obturation-Of-Root-Canal.html"> <?= __t('Short Obturation Of Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Rotary-Rct.html"> <?= __t('Rotary Rct') ?> </a> <br />
									<a target="_blank" href="root/Adseal-Meta.html"> <?= __t('Adseal Meta') ?> </a> <br />
									<a target="_blank" href="root/Center-Of-Endodontics.html"> <?= __t('Center Of Endodontics') ?> </a> <br />
									<a target="_blank" href="root/Second-Molar-Root-Canal.html"> <?= __t('Second Molar Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Missed-Canal-In-Root-Canal.html"> <?= __t('Missed Canal In Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Canal-Cost-Reddit.html"> <?= __t('Root Canal Cost Reddit') ?> </a> <br />
									<a target="_blank" href="root/Best-Dentist-Near-Me-For-Root-Canal.html"> <?= __t('Best Dentist Near Me For Root Canal') ?> </a> <br />
									<a target="_blank" href="root/Root-Treatment-Of-Teeth.html"> <?= __t('Root Treatment Of Teeth') ?> </a> <br />
									<a target="_blank" href="root/Mandibular-2Nd-Molar-Roots.html"> <?= __t('Mandibular 2Nd Molar Roots') ?> </a> <br />
									<a target="_blank" href="rootcanal.php"><?= __t('Root Canal') ?></a> <br />
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