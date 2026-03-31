<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Circumcision is a surgical procedure to remove the foreskin. Find out here from Cosmocare Medical Center about the general information and conditions of a circumcision surgery.') ?>" />
	<meta name="keywords" content="<?= __t('circumcision surgery in dubai, urology, circumcision surgery, circumcision specialist surgeon in dubai') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Laser Circumcision Surgery | Circumcision Specialist Surgeon in Dubai by Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
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
								<div class="collapse show" id="submenu4">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="piles-hernia.html"><?= __t('Piles Hernia') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="hernia-treatment.html"><?= __t('Hernia Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="comprehensive-cancer-screening.html"><?= __t('Comprehensive Cancer Screening') ?></a></li>
										<li class="nav-item"><a class="nav-link active" href="circumcision.html"><?= __t('Circumcision') ?></a></li>
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
							<h1><?= __t('Circumcision Surgery in Dubai') ?></h1>
						</div>
						<div class="service-img">
							<img src="images/circumcision-surgery.svg" width="100%" class="img-fluid" alt="Laser Circumcision Surgery | Circumcision Specialist Surgeon in Dubai by Cosmocare Medical Center">
						</div>
						<div class="pt-2 pt-md-4">
							<h2><?= __t('What is circumcision?') ?></h2>
							<p><?= __t('Male circumcision is the permanent removal of the foreskin, a retractable fold of skin that covers and protects the tip of the penis. Being circumcised or uncircumcised may be a religious or custom choice. It is also performed for medical reasons when less invasive treatments haven’t worked.') ?></p>
							<p><?= __t('Common medical reasons for circumcision include:') ?></p>
							<p><?= __t('•Phimosis – the foreskin is too tight to pull over the penis head and can cause pain when the penis is erect or passing urine.') ?><br>
								<?= __t('•Paraphimosis – the foreskin won’t return to its original position after being pulled back and can cause the penis to be painful and swollen.') ?><br>
								<?= __t('•Recurrent balanitis – skin irritation of penis head.') ?><br>
								<?= __t('•Balanitis xerotica obliterans (BXO) – skin disease affecting the penis may cause phimosis, inflammation and scarring of the penis head.') ?><br>
								<?= __t('•Penile cancer – rare type of cancer.') ?></p>
							<h2><?= __t('What does the circumcision surgery involve?') ?></h2>
							<p><?= __t('Getting circumcised is normally a day case procedure performed under general or local anaesthetic and takes around half an hour.') ?></p>
							<p><?= __t('A special sterile clamp or plastic ring is placed over the penis head. The most common types are: the Plastibell device, the Gomco clamp and, the Mogen clamp. Most surgeons use the one they are most comfortable with. They will discuss these different options with you.') ?></p>
							<p><?= __t('The foreskin will then be removed just behind the head of your penis using a scalpel or surgical scissors and, any small blood vessels sealed. Your surgeon will remove the foreskin and seal off any small blood vessels. The two edges are then either stitched, using dissolvable stitches, or glued together.') ?></p>
							<h2><?= __t('What complication can happen after the circumcision surgery?') ?></h2>
							<p><?= __t('There are benefits and risks of being circumcised and uncircumcised.') ?></p>
							<p><?= __t('Benefits of being circumcised include: decreased risk of') ?> <a href="https://hivtestingdubai.com/" target="_blank"><?= __t('HIV') ?></a><?= __t(', urinary tract infections and penile cancer, prevention of penile problems and, easier hygiene.') ?> </p>
							<p><?= __t('Complications of a circumcision are rare. Bleeding and infection are the most common complications associated with circumcision.') ?> </p>
							<p><?= __t('Other possible complications of circumcision can include: scar tenderness, sensation reduction in the penis head, or another minor operation required to remove some more skin from around the penis head.') ?></p>
							<h2><?= __t('What is the cost of a circumcision surgery?') ?></h2>
							<p><?= __t('If you decide to pay for your treatment, Cosmocare Medical Center offer an all-inclusive Total Care package, where a single one-off payment at a pre-agreed price, delivering direct access to all the treatment you need for complete reassurance. You can also spread the cost of your treatment with finance options available.') ?><br>
								<br>
								<?= __t('A circumcision surgery may be covered by your medical insurance policy. We advise you to check directly with your insurance provider and get written confirmation before commencing treatment.') ?>
							</p>
							<h2><?= __t('Recovering from a circumcision surgery') ?></h2>
							<p><?= __t('Typically, patients go home the same day as their circumcision surgery.') ?></p>
							<p><?= __t('The penis will probably be swollen for three to four days post-operation.') ?> </p>
							<p><?= __t('It takes at least ten days for the penis to heal after circumcision surgery.') ?> </p>
							<p><?= __t('Patients should follow their surgeon’s advice on driving, time off work and should avoid having sex for at least four weeks after a circumcision operation.') ?></p>
							<h2><?= __t('Circumcision surgery with Cosmocare Medical Center') ?> </h2>
							<p><?= __t('Here at Cosmocare Medical Center, our skilled and experienced surgeons regularly perform male circumcisions.') ?> </p>
							<p><a href="/contact.html"><?= __t('Contact us') ?></a> <?= __t('to book an appointment now.') ?> </p>
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