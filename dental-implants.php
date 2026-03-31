<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Cosmocare implant clinic offers the best dental implants in dubai at low cost. Dental implants price start from') ?> <?php include 'price.php'; echo "$implants"; ?> <?= __t('in our implant clinic Dubai, feel free to call us at ') ?><?php include 'price.php'; echo "$contact"; ?> <?= __t('(Satwa) / ') ?><?php include 'price.php'; echo "$contactjumeirah"; ?> <?= __t('(Jumeirah 2) or email at ') ?> <?php include 'price.php'; echo "$email"; ?> for BOOK an appointment." />
	<meta name="keywords" content="<?= __t('dental implants dubai, braces in Dubai, Satwa Jumeirah 2, Tooth Extraction, polishing, dental clinic in dubai, cheap dental clinic') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<?php include('meta.php'); ?>
	<title><?php include 'price.php'; echo "$dentaloffer"; ?> <?php include 'price.php'; echo "$implants"; ?> <?= __t('Dental Implants in Dubai? Myobrace for Kids |') ?> <?php include 'price.php'; echo "$company"; ?> <?= __t('Satwa Jumeirah 2') ?></title>
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
												href="dental-implants.php"><?= __t('Dental Implants') ?></a></li>
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
							<h6><?= __t('Dental Implant Cost & Dental Clinic Offers') ?></h6>
							<h1><?php include 'price.php';
							echo "$implants"; ?> <?= __t('Best Dental implants center in Dubai') ?></h1>
							<p><?= __t('Cosmocare implant clinic offers the best dental implants in dubai at low cost. Our services include full mouth dental implants and same day dental implants, delivered with expert care and a high success rate.') ?>
							</p>
							<h3><?= __t('What is a dental implant?') ?></h3>
							<p><?= __t('Dental implants are artificial teeth that are placed into your jaw to hold a replacement tooth or bridge. Dental implants may be an option for people who have lost a tooth or teeth due to periodontal disease, an injury, or some other reason. With good oral hygiene maintenance, dental implants can last a lifetime. They are completely secure and will allow you to smile, speak and eat again with comfort and confidence. Dental implants price start from') ?>
								<?php include 'price.php';
								echo "$implants"; ?> in our implant clinic Dubai.
							<div class="service-img">
								<a href="dental-implants.php"><img src="images/dental-implants.svg"
										alt=" Dental Implants in Dubai by Cosmocare Medical Center" width="100%"
										border="0" class="img-fluid" /></a>
							</div>
							<h3><?= __t('When to consider Dental Implants?') ?></h3>
							<ul>
								<li><?= __t('Missing single tooth or multiple teeth.') ?></li>
								<li><?= __t('Anyone with good gum health and the jaw has finished growing.') ?></li>
								<li><?= __t('When cutting or filing down good teeth for a œbridge or fixed partial denture has to be avoided.') ?>
								</li>
							</ul>
							<p><?= __t('Some things that your dentist will look for during the initial dental examination are:') ?>
							</p>
							<ul>
								<li><?= __t('Jaw bone density') ?></li>
								<li><?= __t('The health of your gums') ?></li>
								<li><?= __t('The angle of bite') ?></li>
								<li><?= __t('Any possible infection that may be present in adjoining teeth') ?></li>
								<li><?= __t('The patient\'s ability to heal') ?></li>
								<li><?= __t('Tolerance or acceptance of local anesthesia') ?></li>
							</ul>
							<h3><?= __t('What are the benefits of dental implants?') ?></h3>
							<ul>
								<li><?= __t(' Youthful appearance of the face due to maintaining the structure of your face and creating a beautiful smile.') ?>
								</li>
								<li><?= __t(' Improves self confidence and freedom from removable prosthesis.') ?></li>
								<li><?= __t(' No need to grind good teeth, as in making fixed partial dentures (FPD).') ?>
								</li>
								<li><?= __t(' You will be able to speak clearly.') ?></li>
								<li><?= __t(' Improves the chewing ability due to restoration of function.') ?></li>
								<li><?= __t(' Help in reducing the possibility of gum disease and infection.') ?></li>
								<li><?= __t(' Ensure longevity of your remaining teeth.') ?></li>
							</ul>
							<h2><?= __t('What can I expect after implant treatment?') ?></h2>
							<p><?= __t('Dental implants require the same care as that of natural teeth. Good brushing habits and regular mouth wash is required to maintain good gum health around your dental implants. Periodic visits to your dentist will be needed to monitor the health of your implants.You can use your œimplant teeth in the same way as natural teeth for your regular functions like grinding and chewing.') ?>
							</p>
							<h2><?= __t('What are dental implants made of?') ?></h2>
							<p><?= __t('Dental implants are normally constructed from titanium, which is a biocompatible material that is approved by the body as well as works as a solid foundation to replace teeth. We only use implants which have been approved by FDA. Various suppliers make extremely various implants for numerous clinical problems. Some dental implants are brief and fat, other are narrow since they have to fit in between front teeth, and some incorporate extremely promptly or can be filled instantly.') ?>
							</p>
							<h2><?= __t('How to choose an implant specialist?') ?></h2>
							<p><?= __t('Always remember that there is a substantial difference in between œdental professionals who do implants and œdental implant specialists. Your teeth are as one-of-a-kind as you are. It takes a competent oral professional to place a high quality dental implant in your mouth and ensure long term survival of the implant.') ?>
							</p>
							<p><?= __t('Your dental implant dentist must have education specific to dental implants. This means they have 300 or more hours of postdoctoral or proceeding education and learning pertaining to dental implant dentistry.Dental implants are not œone size fits all. They are complicated, advanced dental devices, and also you must expect your dental implant specialist to have one or more years of experience in the method of implant dentistry.') ?>
							</p>
							<p><?= __t('Ensure that the dental implant specialist you choose, should be verified as well as proficient. At a minimum, this suggests they have shown expertise in dental implant dentistry through an independent, peer-evaluated, bonafide procedure. The dental implant specialist ought to have executed a range of therapies ranging from a replacing tooth to replacing multiple teeth on a variety of various patients.') ?>
							</p>
							<p><?= __t('Ask for recommendation from your dentist to direct you to a good implant specialist in Dubai, if you are confused in deciding your implantologist for replacement of your missing tooth.') ?>
							</p>
							<h2><?= __t('What is computer guided implant Surgery?') ?></h2>
							<p><?= __t('At our dental practice, we use computer-guided surgery to ensure maximum effectiveness of dental implant placement. Guided surgery is a process of planning the implant surgery using a computer, a CT image and surgical guide technology.Surgical guides are the latest advancement in dental implant technology. The use of surgical guides allows us to place the dental implant accurately, precisely and in the ideal position in the bone to increase aesthetics and functionality of your new implants. The benefits of this latest implant technology are precision, higher implant survival rates and ensuring the best aesthetic outcome.') ?>
							</p>
							<p><strong><em><?= __t('Precise and accurate dental implant placement.') ?></em></strong><?= __t(' CT scans are taken of the jaw and used to create 3D images. A specialized computer software uses these images to create a perfect surgical template, which we use to determine the optimal locations and angle for dental implant placement. This helps in allowing us to position the implants to ensure stability and withstand the occlusal force while chewing.') ?>
							</p>
							<p><strong><em><?= __t('Reducing the risks') ?></em>.</strong><?= __t('Because we can see the entire structure of the jaw, teeth and bone computer-guided implant surgery allows us to assess exactly where the dental implant should be placed. We can see and avoid any important structures like nerves and blood vessels during the implant placement procedure.') ?>
							</p>
							<p><strong><em><?= __t('Eliminating the need for sutures.') ?></em><?= __t('') ?></strong><?= __t('With computer-guided surgery, we can do implants without surgical flaps which are small incisions in the gum tissue. With this new technology, we do not need to see the bone specifically to give us the correct placement for the dental implant.') ?>
							</p>
							<p><strong><em><?= __t('Reducing actual surgical time.') ?></em></strong><?= __t('The procedure can be completed faster than traditional dental implant surgery because we create a surgical template on the computer and we can have all the information we need right in front of us.') ?>
							</p>
							<p><strong><em><?= __t('Better patient understanding.') ?></em></strong><?= __t('The images that we create with the computer-guided technology allow us to easily explain the process to you and allow you to follow the procedure from start to finish.') ?>
							</p>
							<p><strong><em><?= __t('Restoring dental function sooner.') ?></em><?= __t('') ?></strong><?= __t('With computer-guided implant surgery, we place the implant right away and many patients are able to receive permanent restorations during this same appointment. This ensures the longevity of the implants.') ?>
							</p>
							<p><a
									href="contact.html"><?= __t('Contact us') ?></a><?= __t('for a FREE complimentary consultation in our Cosmocare Medical Center Dubai, UAE!') ?>
							</p>
							<p><?= __t('&nbsp;') ?></p>
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