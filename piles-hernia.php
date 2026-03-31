<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Cosmocare is a leading private clinic offering expert treatment options for hemorrhoids (Piles, besides all other general surgical problems by an experienced surgeon with over 20 years of blemish free procedures.') ?>" />
	<meta name="keywords" content="<?= __t('piles treatment dubai, hernia treatment dubai, cosmocare medical center, piles hernia surgeon dubai, piles hernia specialist') ?>" />
	<meta name="author" content="<?= __t('Cosmocare Medical Center') ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Piles and Hernia Treatment in Dubai by Cosmocare Medical Center') ?></title>
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
	<?php require_once __DIR__ . '/inc/header.php'; ?>
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
								<a class="nav-link" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><?= __t('Skin Specialist') ?></a>
								<div class="collapse" id="submenu3">
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><?= __t('Surgery') ?></a>
								<div class="collapse show" id="submenu4">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link active" href="piles-hernia.html"><?= __t('Piles Hernia') ?></a></li>
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
										<li class="nav-item"><a class="nav-link" href="scaling-polishing.php"><?= __t('Scaling and Polishing') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-extractions.php"><?= __t('Tooth Extractions') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="tooth-colored-fillings.php"><?= __t('Tooth Colored fillings') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="rootcanals-treatment.php"><?= __t('Root Canals Treatment') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="dentures.php"><?= __t('Dentures') ?></a></li>
										<li class="nav-item"><a class="nav-link" href="teeth-whitening.php"><?= __t('Teeth Whitening') ?></a></li>
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
										<li class="nav-item"><a class="nav-link" href="preventive-health-packages.html"><?= __t('Preventive Health packages') ?></a></li>
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
							<h1><?= __t('Piles and Hernia Specialist in Dubai') ?></h1>
						</div>
						<div class="service-img">
							<img src="images/cosmocare-hospital.jpg" width="100%" class="img-fluid" alt="piles hernia Treatment in Dubai">
						</div>
						<div class="pt-2 pt-md-4">
							<img src="images/murtazakasim.png" class="float-left" alt="image" />
							<p><?= __t('Dr. Murtaza is a Post graduate from the prestigious Kasturba Hospital, Manipal. He has worked under one of the doyens and founders of Laparoscopic Surgery in India, Padmashri Dr. P.K. Chowbey at Sir Ganga Ram Hospital, New Delhi, where he performed a wide array of advanced laparoscopic surgery including advanced Bariatric surgery. He is excellent in all basic and advanced laparoscopic procedures. Over the last 8 years, Dr. Murtaza has been practicing at a highly reputed private hospital in Dubai where he has further honed and perfected his surgical skills. He has developed special interest in the practice of proctology and has been offering various different modalities of treatment for all proctology disorders including piles, fissures and fistula. Besides this, he has been specifically trained to perform all kinds of Laparoscopic Hernia surgeries. He has also trained in surgical Gastroenterology at the prestigious KEM Hospital, Mumbai where he has mastered his upper and lower GI Endoscopy skills.') ?></p>
							<h1><?= __t('Piles Treatment in Dubai') ?></h1>
							<div>
								<h4><?= __t('What Are Symptoms Of Hemorrhoids(Piles)?') ?></h4>
							</div>
							<div>
								<p><?= __t('Cosmocare is a leading private clinic offering expert treatment options for hemorrhoids (Piles), besides all other general surgical problems by an experienced surgeon with over 20 years of blemish free procedures.') ?></p>
								<p><?= __t('Hemorrhoids, also known as piles, affect a sizeable number of the general population. But most of them choose to suffer the symptoms in silence so as to avoid the so-called \'embarrassment\' they would face on visiting a doctor or for the fear of a surgery. Postponing treatment for symptomatic hemorrhoids not only helps them grow but timely intervention may help reduce or regress them, usually without a surgery.') ?></p>
								<p><?= __t('Approximately 5 per cent of the general population suffers from hemorrhoids but less than one-third see a doctor for evaluation.') ?><br>
									<?= __t('Hemorrhoids can be of two types, internal and external. They present with different set of symptoms. Internal hemorrhoids usually present with discomfort, itching, pain or bleeding. External present with a lump around the anal margin which may be painful. Internal hemorrhoids are graded according to their size, which decides their treatment.') ?></p>
								<p><?= __t('Hemorrhoids symptoms often begin with painless rectal bleeding. This blood can be seen on the toilet tissue or with stool and after appears bright red. However, rectal bleeding may be a symptom of other anol-rectal disorders. Therefore, it is important to discuss this symptom with your surgeon when it occurs. Although some bleeding hemorrhoids subside within 1-2 weeks, others progress over time leading to itching, discharge and tissue prolapse (bulging). Hemorrhoids may reach a point where surgical intervention is the only treatment option. We feel it is better to treat hemorrhoids before they get to this point. With Cosmocare your hemorrhoids can be treated during a regular office visit and it requires no preparation, anesthesia or activity restrictions.') ?></p>
								<p><?= __t('Most people suffering from hemorrhoids early on have minimal symptoms, such as mild discomfort or itching, to begin with. This usually lasts for a short time but has a knack of appearing at the most inopportune time, like in the middle of a meeting. It is at this stage that hemorrhoids can be best treated with simple measures and medicines, but is ignored by the patient. Others may pass fresh blood during passage of stools, which hastens an early visit to the doctor. As the stage progresses, the symptoms worsen, and this is when most would seek a consultation but it may be a too late for medical therapy alone.') ?></p>
								<h4><strong><?= __t('Symptoms of Hemorrhoids(Piles)') ?></strong></h4>
								<p><?= __t('By middle age, almost half of all adults in the Dubai, UAE have had to deal with hemorrhoids at one time or another. The condition usually is signaled by itching, discomfort and bleeding. If blood pools in an external hemorrhoid, it may form a clot, called a thrombus. This condition can result in severe pain and inflammation. Other symptoms include:') ?></p>
								<ul class="arrow-list">
									<li><?= __t('Irritation and swelling in your anal area') ?></li>
									<li><?= __t('Associated pain') ?></li>
									<li><?= __t('A sensitive or painful lump near your anus') ?></li>
									<li><?= __t('Painless bleeding that leaves bright red blood on tissue or in the bowl during bowel movements') ?></li>
									<li><?= __t('Leaking feces') ?></li>
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
			'title' => __t('Genital Warts Removal'),
			'link' => 'genital-warts-treatment.php',
			'date' => 'August 22, 2020'
		],
		[
			'img' => 'images/content/footer-post-author-02.jpg',
			'title' => __t('Tooth Fairy Traditions...'),
			'link' => '/',
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