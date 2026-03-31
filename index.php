<?php require_once __DIR__ . '/inc/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= __t('Specialist Dermatologist Dubai, Laser hair Removal, STD Testing, Skin Warts Mole Removal Dental Center | Cosmocare Medical Center') ?> </title>
	<meta name="description" content="<?= __t('We are specialist dermatologist, Warts Removal, Fractional Laser, Botox Fillers, Laser hair Removal, Mole Removal Dental Clinic in Dubai. Call at 04 379 8747 04 353 6164 or mail at info@cosmocaremeidcalcenter.com. Cosmocare Medical Center & Dermatology Clinic') ?>" />
	<meta name="keywords" content="<?= __t('specialist dermatologist, Warts Removal, Fractional Laser, Botox Fillers, Laser hair Removal, Mole Removal, genital warts removal, std testing, hiv testing, sti') ?>" />
	<meta name="author" content="<?= __t('\'Dermatology, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>">
	<meta name="format-detection" content="telephone=04 3798747">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="canonical" href="https://cosmocaremedicalcenter.com" />

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
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
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
									<h5 class="link-drop-title"><i class="icon-clock"></i><?= __t('Working Time') ?>
									</h5>
									<table class="row-table">
										<tr>
											<td><i><?= __t('Everyday') ?></i></td>
											<td>09:00 - 21:00</td>
										</tr>
										<tr>
											<td><i><?= __t('Sunday') ?></i></td>
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
									<h5 class="link-drop-title"><i
											class="icon-pencil-writing"></i><?= __t('Request Form') ?></h5>
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
												placeholder="<?= __t('Your Name') ?>" />
										</div>
										<div class="row row-sm-space mt-1">
											<div class="col">
												<div class="input-group">
													<span>
														<i class="icon-email2"></i>
													</span>
													<input name="requestemail" type="text" class="form-control"
														placeholder="<?= __t('Your Email') ?>" />
												</div>
											</div>
											<div class="col">
												<div class="input-group">
													<span>
														<i class="icon-smartphone"></i>
													</span>
													<input name="requestphone" type="text" class="form-control"
														placeholder="<?= __t('Your Phone') ?>" />
												</div>
											</div>
										</div>
										<div class="selectWrapper input-group mt-1">
											<span>
												<i class="icon-tooth"></i>
											</span>
											<select name="requestservice" class="form-control">
												<option selected="selected" disabled="disabled">
													<?= __t('Select Service') ?></option>
												<option value="Dermatology"><?= __t('Dermatology') ?></option>
												<option value="General Dentistry"><?= __t('General Dentistry') ?>
												</option>
												<option value="Piles Hernia Surgeon"><?= __t('Piles Hernia Surgeon') ?>
												</option>
												<option value="General Practioner"><?= __t('General Practioner') ?>
												</option>
												<option value="Dental Implants"><?= __t('Dental Implants') ?></option>
												<option value="Laser Hair Removal"><?= __t('Laser Hair Removal') ?>
												</option>
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
															class="form-control datetimepicker" placeholder="<?= __t('Date') ?>"
															readonly>
													</div>
												</div>
											</div>
											<div class="col-sm-6 mt-1 mt-sm-0">
												<div class="input-group flex-nowrap">
													<span>
														<i class="icon-clock"></i>
													</span>
													<div class="datepicker-wrap">
														<input name="requesttime" type="text"
															class="form-control timepicker" placeholder="<?= __t('Time') ?>" readonly>
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
									<h5 class="link-drop-title"><i
											class="icon-calendar"></i><?= __t('Doctors Timetable') ?></h5>
									<p><?= __t('This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.') ?>
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
									<h5 class="link-drop-title"><i
											class="icon-price-tag"></i><?= __t('Quick Pricing') ?></h5>
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
									<h5 class="link-drop-title"><i
											class="icon-emergency-call"></i><?= __t('Emergency Case') ?></h5>
									<p><?= __t('Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth.') ?> </p>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i><span class="phone">04 379 8747<br>050 373
												4132</span>
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
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider"
					data-slick='{"arrows": false, "dots": true}'>
					<div class="slide">
						<div class="img--holder" data-bg="images/content/slider/slide-01.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<?= __t('Our Services') ?>
											<br><b><?= __t('Healthcare') ?></b>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											<?= __t('Your good health is our greatest achievement') ?>
										</div>
										<div class="slide-btn"><a href="services.html" class="btn btn-white"
												data-animation="fadeInUp" data-animation-delay="2s"><i
													class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
													class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-bg="images/content/slider/teeth-whitening-header-cosmocare.png">
						</div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<?= __t('Teeth Whitening') ?>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											<?= __t('Free comprehensive dental check-up') ?>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											<?= __t('Free teeth cleaning + polishing* (if needed; single session)') ?>
										</div>
										<div class="slide-btn"><a href="services.html" class="btn btn-white"
												data-animation="fadeInUp" data-animation-delay="2s"><i
													class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
													class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-bg="images/content/slider/slide-02.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s"><?= __t('We Provide') ?><br><b><?= __t('Full Medical Care!') ?></b>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											<?= __t('Highest standards of customer service') ?>
										</div>
										<div class="slide-btn"><a href="services.html" class="btn btn-white"
												data-animation="fadeInUp" data-animation-delay="2s"><i
													class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
													class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		<!--section welcome-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block">
						<img src="images/murtuza_dp.png" alt="Doctor Murtuza Bandukwala specialist dermatologist dubai"
							class="img-fluid">
						<a href="https://features.gulfnews.com/books/plrt/#p=32" target="_blank"><img
								src="dermadubai-gulfnews.svg"
								alt="Gulf News Murtuza Bandukwala specialist dermatologist dubai" width="100%"
								border="0"></a>
					</div>
					<div class="col-lg-6">
						<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
							<div class="h-sub"><?= __t('Welcome to our Cosmocare Medical Center') ?></div>
							<h2 class="h1"><?= __t('Message') ?> <span
									class="theme-color"><?= __t('From The CEO') ?></span></h2>
						</div>
						<div class="row">
							<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto"><img src="images/bandukwala-1.jpg"
									alt="" class="img-fluid"></div>
							<div class="col-sm">
								<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
									<div class="h-sub"><?= __t('Welcome to Cosmocare Medical Center') ?></div>
									<h2 class="h1"><?= __t('Message') ?> <span
											class="theme-color"><?= __t('From The CEO') ?></span></h2>
								</div>
								<div class="text-left mt-3 mt-sm-0">
									<p class="p-lg">
										<?= __t('I am happy to welcome you all to Cosmocare, a private, internationally recognized leading healthcare center.') ?>
									</p>
									<p><?= __t('For us every patient is an extended family member. Our dedicated highly skilled experienced staff loves to serve each patient with utmost dedication and personalized care.') ?>
									</p>
									<p><?= __t('Our utmost priority is to make each patient visit a comfortable, pleasant, healing experience making them realize that they are in safe and caring hands. We believe in providing ethical high standard patient care through our energetic, vigilant and committed team.') ?>
									</p>
									<p><?= __t('Since our inception we have always aimed and focused on serving you with state of art advanced latest technology services.') ?>
									</p>
									<p><?= __t('We are proud to convey that our team is able to achieve highest rate of satisfied and delighted customers.') ?>
									</p>
									<p><?= __t('We will be more than happy to hear from you if you have any suggestions/Feedback which will help us in improving or will add more value to our services.') ?>
									</p>
									<p><?= __t('Wishing you a Healthy and Beautiful Life!!!!') ?></p>
									<!-- Gulf news Article-->
									<h6 style="line-height:0px"><?= __t('Dr Murtuza Bandukwala') ?></h6>
									<p style="line-height:0px"><a target="_blank"
											href="https://gulfnews.com/friday/art-people/ask-the-experts-23-1.500049098"><?= __t('Specialist Dermatologist, Cosmocare Medical Center Gulf News') ?></a></p>
									<a target="_blank"
										href="https://gulfnews.com/friday/art-people/ask-the-experts-23-1.500049098"><img
											style="float:left; border: 1px solid #ddd; border-radius: 4px;padding: 5px;width: 150px;"
											src="https://media.assettype.com/gulfnews%2F2025-02-28%2Fvk4c6gmt%2FFRI250228Ask-the-expertsDr-Mortaza.JPG?rect=0%2C146%2C851%2C638&w=1200&auto=format%2Ccompress&fit=max"
											alt="Forest" style="width:150px"></a>
									<h3 style="line-height:0px"><?= __t('Ask the experts') ?></h3>
									<p><?= __t('Got a problem? Our fantastic panel of renowned experts will answer all your questions') ?></p>
									<p style="line-height:0px">Ebook link:<a target="_blank" href="https://features.gulfnews.com/books/plrt/#p=32">https://features.gulfnews.com/books/plrt/</a></p>
									<p style="font-size:10px"><?= __t('Last updated: February 28, 2025 | 13:16') ?> <a
											target="_blank"
											href="https://gulfnews.com/friday/art-people/ask-the-experts-23-1.500049098"><?= __t('GULF NEWS FRIDAY') ?></a></p>
									<!-- End Gulf New Article-->
									<div class="mt-0 mt-lg-2 mt-xl-4"><img src="images/signature.png"
											alt="Murtuza Bandukwala signature" width="250" class="img-fluid"></div>
									<p> <?= __t('Chief Executive Officer') ?><br> <?= __t('Cosmocare Medical Center') ?>
									</p>
									<div class="mt-0 mt-lg-15 mt-xl-3"></div>
									<a href="#" class="btn-link" data-toggle="modal"
										data-target="#modalBookingForm"><?= __t('Booking a Visit') ?><i
											class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section welcome-->
		<!--section services-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color"><?= __t('What we offer') ?></div>
					<h2 class="h1"><?= __t('General Services') ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-desktop">
					<div class="col-4 order-1">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-terapevt"></i></div>
									<div class="service-box-icon-bg"><i class="icon-terapevt"></i></div>
									<h3 class="service-box-title"><?= __t('Dermatology') ?></h3>
									<p><?= __t('We provide world class comprehensive range of dermatology treatment for all kind of skin, hair and nails related disorder giving you a more confident personality.') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-mommy"></i></div>
									<div class="service-box-icon-bg"><i class="icon-mommy"></i></div>
									<h3 class="service-box-title"><?= __t('Asthetic Dermatology') ?></h3>
									<p><?= __t('At Cosmocare we believe in enhancing your beauty through latest technologies, adding more years to your youth, providing treatment for a flawless, glowing skin and a beautiful body.') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-lab"></i></div>
									<div class="service-box-icon-bg"><i class="icon-lab"></i></div>
									<h3 class="service-box-title"><?= __t('Health Checkup') ?></h3>
									<p><?= __t('you\'ve come to the right place. We offer confidential, affordable and friendly services that are available to everyone.') ?></p>
									<div class="btn-wrap"><a href="our-specialist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-syringe"></i></div>
									<div class="service-box-icon-bg"><i class="icon-syringe"></i></div>
									<h3 class="service-box-title"><?= __t('Hair Clinic') ?></h3>
									<p><?= __t('Cosmocare offers Platelet Rich Plasma (PRP) Therapy in Dubai. PRP therapy is a new and revolutionary method') ?></p>
									<div class="btn-wrap"><a href="prp-therapy.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8 order-2">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/service-02.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<div class="service-box-rotator js-service-box-rotator">
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-surgery"></i></div>
											<div class="service-box-icon-bg"><i class="icon-surgery"></i></div>
											<h3 class="service-box-title"><?= __t('General Surgery') ?></h3>
											<p><?= __t('High quality treatment for Hernia, Piles, Fissure, Fistula, Pilonidal sinus and varicose vein by a renowned and experienced Surgeon. We also have facilities for Laser therapy, cancer screening, and Circumcision and Keyhole surgeries.') ?></p>
											<div class="btn-wrap"><a href="piles-hernia-surgeon.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-gynecology"></i></div>
											<div class="service-box-icon-bg"><i class="icon-gynecology"></i></div>
											<h3 class="service-box-title"><?= __t('Piles & Hernia') ?></h3>
											<p><?= __t('At Cosmocare in Dubai, we provide a comprehensive range of dermatology treatments for acute and chronic skin conditions as well as cosmetic care.') ?></p>
											<div class="btn-wrap"><a href="piles-hernia.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-surgery"></i></div>
											<div class="service-box-icon-bg"><i class="icon-surgery"></i></div>
											<h3 class="service-box-title"><?= __t('Laparoscopic Surgery') ?></h3>
											<p><?= __t('you\'ve come to the right place. We offer confidential, affordable and friendly services that are available to everyone.') ?></p>
											<div class="btn-wrap"><a target="_blank"
													href="https://pilesherniacenter.com/" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8 order-3 order-lg-4 order-xl-3">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/service-04.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<div class="service-box-rotator js-service-box-rotator">
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-terapevt"></i></div>
											<div class="service-box-icon-bg"><i class="icon-terapevt"></i></div>
											<h3 class="service-box-title"><?= __t('Family Medicine') ?></h3>
											<p><?= __t('At Cosmocare we take care of complete health of your family. Our expert GP provides treatment, immunization, consultation in school health and Preventive Health Checkups helping you and your near ones towards wellness and healthy life style.') ?></p>
											<div class="btn-wrap"><a href="general-practitioner.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-injecting-syringe"></i></div>
											<div class="service-box-icon-bg"><i class="icon-injecting-syringe"></i>
											</div>
											<h3 class="service-box-title"><?= __t('Immunization') ?></h3>
											<p><?= __t('At Cosmocare in Dubai, we provide a comprehensive range of dermatology treatments for acute and chronic skin conditions as well as cosmetic care.') ?></p>
											<div class="btn-wrap"><a href="immunization.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-sign"></i></div>
											<div class="service-box-icon-bg"><i class="icon-sign"></i></div>
											<h3 class="service-box-title"><?= __t('Health Checkup') ?></h3>
											<p><?= __t('you\'ve come to the right place. We offer confidential, affordable and friendly services that are available to everyone.') ?></p>
											<div class="btn-wrap"><a href="std-hiv-testing.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
									<div class="service-box service-box-greybg service-box--hiddenbtn">
										<div class="service-box-caption text-center">
											<div class="service-box-icon"><i class="icon-dental"></i></div>
											<div class="service-box-icon-bg"><i class="icon-dental"></i></div>
											<h3 class="service-box-title"><?= __t('Dental Clinic') ?></h3>
											<p><?= __t('At Cosmocare in Dubai, we provide a comprehensive range of dermatology treatments for acute and chronic skin conditions as well as cosmetic care.') ?></p>
											<div class="btn-wrap"><a href="crown-bridge.html" class="btn"><i
														class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
														class="icon-right-arrow"></i></a></div>
										</div>
									</div>
								</div>
								<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
											class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
											class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-4 order-5">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-woman"></i></div>
									<div class="service-box-icon-bg"><i class="icon-woman"></i></div>
									<h3 class="service-box-title"><?= __t('Gynecology & Obstetrics') ?></h3>
									<p><?= __t('This service can provide you with many of the common vaccines including those required for immunization records') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-cardiology"></i></div>
									<div class="service-box-icon-bg"><i class="icon-cardiology"></i></div>
									<h3 class="service-box-title"><?= __t('Cosmetic Gynecology') ?></h3>
									<p><?= __t('This service can provide you with many of the common vaccines including those required for immunization records') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-cardiology"></i></div>
									<div class="service-box-icon-bg"><i class="icon-cardiology"></i></div>
									<h3 class="service-box-title"><?= __t('Physiotherapy') ?></h3>
									<p><?= __t('These services offers routine health checkups and treatment for specialty conditions') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn"><i
												class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section services-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1"><?= __t('Mission Cosmocare') ?></h2>
					<div class="h-decor"></div>
				</div>
				<p class="max-900 text-center"><?= __t('Our mission is to provide the best quality integrated health care services through our dedicated, skilled and experienced team of Doctors and Nurses.') ?></p>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left"
					data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-medicine"></i></div>
							<div>
								<h5 class="icn-text-title"><?= __t('Our Mission') ?></h5>
								<p><?= __t('Our mission is to provide the best quality integrated health care services through our dedicated, skilled and experienced team of Doctors and Nurses.') ?></p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-pharmacy"></i></div>
							<div>
								<h5 class="icn-text-title"><?= __t('Vision Cosmocare') ?></h5>
								<p><?= __t('To be a centre of excellence providing high Quality Comprehensive health care services ,to reach the unreached community and contributing towards building a healthy and Beautiful Society.') ?> </p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-principles"></i></div>
							<div>
								<h5 class="icn-text-title"><?= __t('Clinic Principles') ?></h5>
								<p><?= __t('We at Cosmocare aim to excel in quality of each aspect of patient care. We are committed to provide world class treatment leading to high quality patient care, safety, and satisfaction through our dedicated, skilled, experienced, competent and professional team.') ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section single service -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1"><?= __t('What We Also Do') ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="single-service-carousel js-single-service-carousel">
					<div class="single-service">
						<div class="row">
							<div class="col-md">
								<div class="text-right pl-0 pl-md-3 pl-lg-6">
									<h3><?= __t('Laser Hair Removal') ?></h3>
									<p><?= __t('Our nurse practitioners and primary care nurses work with your family doctor to help manage and provide advice on many conditions including diabetes, depression and high cholesterol. They can assist you with your overall health, monitoring and managing your chronic health conditions.') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn btn-hover-fill"><i
												class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="col-md col-img">
								<img src="images/content/services-carousel-01.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="single-service">
						<div class="row">
							<div class="col-md col-img text-right">
								<img src="images/content/mole-removal.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-md">
								<div class="text-left pr-0 pr-md-3 pr-lg-6">
									<h3><?= __t('Mole Removal') ?></h3>
									<p><?= __t('Moles are usually harmless pigmented lesions. They are made of Melanocytes cells, which are scattered all over the skin. They are responsible to cause tanning of the skin by generating pigment called melanin. When the melanocytes cell cluster together, a mole develops.') ?></p>
									<div class="btn-wrap"><a href="mole-removal.html" class="btn btn-hover-fill"><i
												class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-service">
						<div class="row">
							<div class="col-md">
								<div class="text-right pl-0 pl-md-3 pl-lg-6">
									<h3><?= __t('Piles and Hernia') ?></h3>
									<p> <?= __t('If you are suffering from pain/itchiness/ bleeding while passing stool, you should not ignore and consult the doctor immediately as you might be suffering from piles. Our experienced, highly skilled and renowned Surgeon Dr. Murtaza Pithawal, offers treatment for Piles/Hernia through innovative state of art technology.') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn btn-hover-fill"><i
												class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="col-md col-img">
								<img src="images/content/services-carousel-03.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="single-service">
						<div class="row">
							<div class="col-md col-img text-right">
								<img src="images/content/services-carousel-04.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-md">
								<div class="text-left pr-0 pr-md-3 pr-lg-6">
									<h3><?= __t('Dentistry') ?></h3>
									<p><?= __t('Our team of expert dentists take care that you always have a wonderful smile. We offer safe and result oriented aesthetic and therapeutic dentist treatment like RCT, Scaling, Whitening, Crown and bridge, scaling and polishing etc.') ?></p>
									<div class="btn-wrap"><a href="dermatologist.html" class="btn btn-hover-fill"><i
												class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i
												class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section single service -->
		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="title-wrap text-center text-md-left">
							<h2 class="h1"><?= __t('Latest News') ?></h2>
							<div class="h-decor"></div>
						</div>
						<div class="blog-grid blog-grid-carousel js-blog-grid-carousel mt-md-3 mb-0 row">
							<div class="col-sm-6">
								<div class="blog-post">
									<div class="post-image">
										<a href="piles-hernia-doctor.html"><img src="images/content/news-01.jpg"
												alt=""></a>
									</div>
									<div class="blog-post-info">
										<div class="post-date">1<span><?= __t('APRIL') ?></span></div>
										<div>
											<h2 class="post-title"><a href="piles-hernia-doctor.html"><?= __t('NEW DOCTOR ON OUR PANEL:') ?></a></h2>
										</div>
									</div>
									<div class="post-teaser"><?= __t('We welcome Dr Mutaza Pithawala, specialist General Surgeon at our clinic. He is well known name and a top rated surgeon of Dubai, famous....') ?></div>
									<div class="mt-2 mt-lg-3"><a href="piles-hernia-doctor.html"
											class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="blog-post">
									<div class="post-image">
										<a href="piles-hernia-doctor.html"><img src="images/content/news-02.jpg"
												alt=""></a>
									</div>
									<div class="blog-post-info">
										<div class="post-date">15<span><?= __t('JAN') ?></span></div>
										<div>
											<h2 class="post-title"><a href="piles-hernia-doctor.html"><?= __t('EXPANSION OF DENTISTRY SERVICES') ?></a></h2>
										</div>
									</div>
									<div class="post-teaser"><?= __t('Do you know the first thing which attracts people towards you is your smile. A sparkling white, bright ...') ?></div>
									<div class="mt-2 mt-lg-3"><a href="piles-hernia-doctor.html"
											class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span><?= __t('Read more') ?></span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-6 mt-lg-0">
						<div class="testimonial-card">
							<div class="h-sub"><?= __t('About Dentistry') ?></div>
							<h2 class="h1"><?= __t('Cosmocare') ?> <span
									class="theme-color"><?= __t('Dentistry') ?></span></h2>
							<div class="testimonial-card-carousel js-testimonial-card-carousel">
								<div>
									<img width="350" src="images/content/services-07.jpg" alt="Cosmocare Dentistry">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
		<!--section-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center bg-cover" style="background-image: url(images/content/banner-center-02.jpg)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1 max-450-md"><?= __t('Online Appointments And Prescriptions') ?>
						</div>
						<div class="banner-center-text4"><?= __t('You can now book a limited amount of doctors’ appointments online') ?></div>
						<a href="schedule.html" class="btn btn-white mt-2 mt-sm-3 mt-lg-5"><i
								class="icon-right-arrow"></i><span><?= __t('Doctor Timetable') ?></span><i
								class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<!--footer-->
	<?php require_once __DIR__ . '/inc/footer.php'; ?>
	<!--//footer-->
</body>

</html>