<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('At Cosmocare we provide a safe and result oriented treatment for removal of warts. After the consultation, our renowned dermatologist  will decides upon the kind of treatment and therapy to be used  for the wart removal.') ?>" />
	<meta name="keywords" content="<?= __t('genital warts treatment dubai, warts treatment') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title>
		<?= __t('249aed Genital Warts Treatment by Specialist Doctor in Dubai| Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?>
	</title>
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
										<li class="nav-item"><a class="nav-link active"
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
								<div class="collapse show" id="submenu3">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link"
												href="std-hiv-testing.html"><?= __t('STD HIV Test') ?></a></li>
										<li class="nav-item"><a class="nav-link active"
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
								<div class="collapse" id="submenu7">
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
												href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a>
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
							<h1><?= __t('Genital Warts Treatment (249 AED)') ?></h1>
						</div>
						<div class="service-img">
							<img src="images/genital.jpg" class="img-fluid" alt="Genital Warts Treatment dubai">
						</div>
						<div class="pt-2 pt-md-4">
							<p><?= __t('If  you have genital warts you may need to be treated more than once as Genital  warts comes back over time. There are  variety of options available.') ?>
							</p>
							<p><?= __t('You  can visit Cosmocare Dermatology office and meet a leading dermatologists in Dubai. Dr Murtuza  Bandukwala , to experience a highly personalized and comprehensive Dubai  Dermatology care. Get a best care you need in the safe, reassuring hands of the best rated  dermatologists in Dubai.') ?>
							</p>
							<p><strong><?= __t('What are Genital Warts?') ?></strong></p>
							<p><?= __t('Genital  warts is one of the most common type of  sexually transmitted disease.They are  also known as Veneral warts or condylomata acuminate and can cause pain, discomfort and itching. They are fleshly growths that appear on the genitals or  anal area. It consists of fibrous overgrowths covered by a thickened, outer  layer.') ?><strong><?= __t('How it is transmitted?') ?></strong>
							</p>
							<p><?= __t('Genital warts and HPV infection are  transmitted primarily by sexual intimacy, including oral, vaginal, and anal sex  and the risk of infection increases as the number of sexual partner\'s increases.  You may not start to develop warts for several weeks or months after infection.  Genital warts affect both women and men, but women are more vulnerable to  complications.') ?>
							</p>
							<p><strong><?= __t('Are they dangerous?') ?></strong></p>
							<p><?= __t('They  are usually non-cancerous but with time can turn cancerous and dangerous') ?>
							</p>
							<p><?= __t('Researches  have proved that 40% kind of HPVs can infect the genital tract and anus  (anogenital tract) of men and women. . HPV infection is also associated with  the development of other anogenital cancers. The HPV types that cause cervical  cancer have been linked with both anal and') ?>
								<a
									href="https://www.medicinenet.com/penis_cancer/article.htm"><?= __t('penile cancer') ?></a>
								<?= __t('in men as well as a  subgroup of head and neck (oropharyngeal) cancers in both women and men.') ?>
							</p>
							<p><strong><?= __t('What  do you do if you have been exposed to genital warts (HPV infection)?') ?></strong>
							</p>
							<p><?= __t('If you or your partner is suffering from HPV  infection or appearance of lesions you  should not take it lightly and should consult a doctor as there is a risk of  its spreading and transmission. Even the absence of lesions does not exclude the  possibility of transmission and that condoms are not completely effective in  preventing the spread of the infection') ?>
							</p>
							<p><?= __t('The female partners of men with genital warts should get Pap Smears tests done  regularly as it reducesthe risk of  developing cervical cancer. Similarly, men should be informed of the potential  risk of anal cancers,') ?>
								<br>
								<strong><?= __t('Treatment') ?></strong>
							</p>
							<p><?= __t('At  Cosmocare we provide asafe and result  oriented treatment for removal ofwarts. After the consultation, our renowned dermatologist will decides upon the kind of treatment and  therapy to be used for the wart removal.  The duration of the treatment depends on the appearance, location and size of  the wart. There  are many treatment options for warts, although often warts reappear after  treatment, and sometimes multiple types of treatment are necessary. The major  kind of treatment offered at our clinic  are:') ?>
							</p>
							<ul type="disc">
								<li><strong><?= __t('Freezing:') ?></strong>
									<?= __t('In this treatment, liquid nitrogen is used to freeze the wart. A blister forms around the wart, and the dead tissue falls off within about a week.') ?>
								</li>
								<li><strong><?= __t('Medications:') ?></strong>
									<?= __t('Some medications can be applied to the wart to help it forma blister and fall off, such as Cantharidin. Other drugs, such as Bleomycin, are injected into a wart to kill the virus. Aldara is a prescription cream used to treat genital warts.') ?>
								</li>
								<li><strong><?= __t('Minor Surgery:') ?></strong>
									<?= __t('When other treatments fail, minor surgery may be considered. The wart will be cut away, and then the base of the wart will be destroyed using an electric needle or by deep freezing (cryosurgery).') ?>
								</li>
								<li><strong><?= __t('Laser Surgery:') ?></strong>
									<?= __t('This procedure uses an intense beam of light (the laser) to burn and destroy wart tissue') ?>
								</li>
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