<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Dermatology, Warts Removal, Fractional Laser, Botox Fillers, Laser hair Removal, Mole Removal Dental Clinic in Dubai. Call at 04 379 8747 or mail at info@cosmocaremeidcalcenter.com. Cosmocare Medical Center & Dermatology Clinic') ?>" />
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Medin - Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
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
						<span><?= __t('Doctors Timetable') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('Dentists Schedule') ?></div>
					<h1><?= __t('Doctors Timetable') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-4 mb-md-5 max-900">
					<p><?= __t('Need to make a pediatric dentist appointment this week? Use our Timetable to find dentists you who take your insurance. It’s simple to check their availabilities here.') ?> </p>
				</div>
				<div class="nav nav-pills justify-content-center" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab" aria-expanded="true"><?= __t('Endodontics') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab" aria-expanded="false"><?= __t('General dentistry') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-C" role="tab" aria-expanded="false"><?= __t('Oral medicine') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-D" role="tab" aria-expanded="false"><?= __t('Oral surgery') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-E" role="tab" aria-expanded="false"><?= __t('Orthodontics') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-F" role="tab" aria-expanded="false"><?= __t('Periodontics') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-G" role="tab" aria-expanded="false"><?= __t('Prosthodontics') ?></a>
				</div>
				<div id="tab-content" class="tab-content mt-3 mt-md-4">
					<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="13:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="17:00" data-end="20:30" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="13:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="17:00" data-end="20:30" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="13:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="17:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="18:00" data-end="20:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-D" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-E" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-F" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-G" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span><?= __t('Hours') ?></span></div>
								<ul>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Monday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Tuesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Wednesday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Thursday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Friday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Saturday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="9:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Gerald Gleaves') ?></div>
													<div class="doctor-position"><?= __t('General Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span><?= __t('Sunday') ?></span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Frank Bigham') ?></div>
													<div class="doctor-position"><?= __t('Associate Dentist') ?></div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt="Murtuza Banduklwala Skin Specialist in Dubai"></div>
													<div class="doctor-name"><?= __t('Dr. Pamela Knaack') ?></div>
													<div class="doctor-position"><?= __t('Dental Hygienist') ?></div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name"><?= __t('Dr. Billy Logan') ?></div>
													<div class="doctor-position"><?= __t('Cosmetic Dentist') ?></div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//section-->
		</div>
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