<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Our Specialists: Cosmocare Medical Center & Dermatology Clinic') ?>">
	<meta name="author" content="<?= __t('Cosmocare Medical Center doctors, nurses, laser technicians, and staff') ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Our Specialists - Cosmocare Medical Center') ?></title>
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
	<?php include_once __DIR__ . '/inc/header.php'; ?>
	<!--//header-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html"><?= __t('Home') ?></a>
						<span><?= __t('Our Specialists') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('Meet the Team') ?></div>
					<h1><?= __t('Our Specialists') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-2 mb-md-3">
					<p><?= __t('At Cosmocare Medical Center we strive to give you the best possible treatment and experience to help') ?><br>
						<?= __t('you achieve your dental goals') ?></p>
				</div>
				<div class="filters-by-category mb-2">
					<ul class="option-set justify-content-center" data-option-key="filter">
						<li><a href="#filter" data-option-value="*" class="selected"><?= __t('All') ?></a></li>
						<li><a href="#filter" data-option-value=".category1"><?= __t('Specialist Dermatologist') ?></a></li>
						<li><a href="#filter" data-option-value=".category2"><?= __t('General dentistry') ?></a></li>
						<li><a href="#filter" data-option-value=".category3"><?= __t('Specialist Surgeon') ?></a></li>
						<li><a href="#filter" data-option-value=".category3"><?= __t('Piles Hernia surgery') ?></a></li>
						<li><a href="#filter" data-option-value=".category1"><?= __t('Skin Specialist') ?></a></li>
						<li><a href="#filter" data-option-value=".category5"><?= __t('General Practioner') ?></a></li>
					</ul>
				</div>
				<div class="gallery-specialist gallery-isotope" id="gallery-specialist">
					<div class="gallery-item category1">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="dermatologist.html"><img src="images/content/doctor-murtuza-derma.svg" class="img-fluid" alt="Dr. Murtuza specialist dermatologist in dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="dermatologist.html"><?= __t('Dr. Murtuza Bandukwala') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Specialist Dermatologist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr Murtuza Bandukwala, MD is a specialist Dermatologist and Fellow of American Academy of Dermatology (FAAD).') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="dentist.html"><img src="images/lavanya.svg" class="img-fluid" alt="General Dentist in Dubai Dr. Lavanya George - Cosmocare Medical Center "></a>
							</div>
							<h5 class="doctor-box-name"><a href="dentist.html"><?= __t('Dr. Lavanya George') ?></a></h5>
							<div class="doctor-box-position"><?= __t('General Dentist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr. Lavanya George graduated from Dr. M.G.R Medical University Chennai, Tamil Nadu, India in the year 2000.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category3 category6">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="piles-hernia-surgeon.html"><img src="images/pithawala.svg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="piles-hernia-surgeon.html"><?= __t('Dr. Murtaza Pithawala') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Specialist Surgeon') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr. Murtaza Pithawala is a Post graduate from the prestigious Kasturba Hospital, Manipal and founders of Laparoscopic Surgery in India.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--Doctor Satya-->
					<div class="gallery-item category3 category6">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="hair-transplant.html"><img src="images/dr_satya_saraswat.jpg" align="Dr Satya Hair Transplant surgeon in Cosmocare" class="img-fluid"></a>
							</div>
							<h5 class="doctor-box-name"><a href="hair-transplant.html"><?= __t('Dr Satya Saraswat') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Plastic & Cosmetic Surgery') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr Satya has been performing surgeries in India, Dubai & Kenya at many of his centres for past 15 years.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--Doctor Satya-->
					<!--Doctor Padma-->
					<!--Doctor Padma-->
					<div class="gallery-item category5">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="general-practitioner.html"><img src="images/gp-cosmocare.svg" class="img-fluid" alt="Doctor Zeba Kanchwala General Practioner at Cosmocare Medical Center Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="general-practitioner.html"><?= __t('Dr. Zeba Kanchwala') ?></a></h5>
							<div class="doctor-box-position"><?= __t('General Practitioner') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr Zeba Kanchwala brings with her more than 20 years of experience in her field.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="cosmetic-dentist.html"><img src="images/content/doctor-06.jpg" class="img-fluid" alt="General & Cosmetic Dentist in Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="cosmetic-dentist.html"><?= __t('DR. ALFIYA CHHATARIA') ?></a></h5>
							<div class="doctor-box-position"><?= __t('General Cosmetic Dentist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Passionate about creating beautiful smiles, Dr. Alefiya has done her Masters in Conservative Dentistry and Endodontics.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="specialist-gynecologist.html"><img src="images/dr-nisha.jpg" class="img-fluid" alt="specialist Gynecologist al satwa, jumeirah 2 in Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="specialist-gynecologist.html"><?= __t('Dr. Nisha Bhardwaj') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Specialist Gynecologist') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('With 20 years of experience and a reputation of excellence, Dr. Nisha offers a compassionate evidence-based care for all her patients. She strongly believes in a tailor made approach for her patients to make them feel special. ..') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="oral-surgeon-dentist.html"><img src="images/taranpreet.jpg" class="img-fluid" alt="General & Cosmetic Dentist in Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="oral-surgeon-dentist.html"><?= __t('Dr. Taranpreet Singh') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Oral Surgeon') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('I have a clinical experience in Dentistry for 10+ years as well as an expertise in maxillofacial surgery for 8+ years. I specialize in Cosmetic Treatments (Invasive/Non-Invasive), All Tissue Lasers, Dental Implants, Direct & Indirect Sinus Lift..') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="orthodontics.html"><img src="images/abdul-qadir-dentist.jpg" class="img-fluid" alt="Orthodontics & Cosmetic Dentist in Dubai"></a>
							</div>
							<h5 class="doctor-box-name"><a href="orthodontics.html"><?= __t('Dr. Abdulqadir Rampurawala') ?></a></h5>
							<div class="doctor-box-position"><?= __t('Orthodontics & Dentofacial Orthopedics') ?></div>
							<div class="doctor-box-text">
								<p><?= __t('Dr. Abdulqadir Rampurawala is a highly qualified orthodontist dedicated to helping patients of all ages achieve confident, healthy smiles.') ?></p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+43798747">04 379 8747</a></div>
								<div class="doctor-box-social">
									<a href="mailto:info@cosmocaremedicalcenter.com" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//section-->
			<!--section-->
			<div class="section">
				<div class="container">
					<div class="text-center">
						<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span><?= __t('Booking a visit') ?></span><i class="icon-right-arrow"></i></a>
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