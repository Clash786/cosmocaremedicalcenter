<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= __t('Cosmcoare Medical Center Special Offers for dental services. Here is a table of price list of dental treatments offered by Cosmocare Medical Center in Dubai UAE') ?>">
	<meta name="author" content="<?= __t('Dermatology, fractional laser, botox Fillers, Laser hair Removal, Mole Removal Dental Clinic, hiv testing, std test') ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp, noydir">
	<meta name="GOOGLEBOT" content="index, follow">
	<title><?= __t('Dental Prices Special Offers - Dermatology, Laser hair Removal, Mole Removal Dental Cosmocare Medical Center') ?></title>
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
						<span><?= __t('Prices') ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section prices-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2 mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"><?= __t('Our clinic fees') ?></div>
					<h1><?= __t('Dental Service Prices') ?></h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-3 mb-md-4 max-900">
					<p><?= __t('Here is a table of price list of dental treatments offered by Cosmocare Medical Center in Dubai UAE (Please note : price may vary according to the complexity of your case. Below prices are a rough estimate for the various types of dental treatments offered by Dental clinics in Dubai UAE).') ?> </p>
				</div>
				<div class="nav nav-pills justify-content-center" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab" aria-expanded="true"><?= __t('Examinations / Cleaning') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab" aria-expanded="false"><?= __t('Digital X-Ray') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-C" role="tab" aria-expanded="false"><?= __t('Filling / Aesthetic') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-D" role="tab" aria-expanded="false"><?= __t('Teeth Whitening') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-E" role="tab" aria-expanded="false"><?= __t('Endodontic Dentistry') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-F" role="tab" aria-expanded="false"><?= __t('Periodontic Dentistry') ?></a>
					<a class="nav-link" data-toggle="pill" href="#tab-G" role="tab" aria-expanded="false"><?= __t('Orthodontics') ?></a>
				</div>
				<div id="tab-content" class="tab-content mt-3 mt-md-4">
					<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(AED)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> 100 AED </td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Braces Consultation') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('Free') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Porcelain Veneers Consultation') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('Free') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Teeth Whitening Consultation') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('Free') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Invisalign Consultation') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('Free') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Implant Consultation') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('Free') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Panoramic X-ray (Single)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('NA') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Composite Filling (1 surface)') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>99 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Composite Filling (2 surface)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>249 AED</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"> <?= __t('Composite Filling (3 surface)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>299 AED</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Root canal treatment (single root)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>599 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Root canal treatment (premolar)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>799 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Root canal treatment (multiple root)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>999 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Sealant (per tooth)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>150 AED</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Implant (with Crown)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('NA') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Extraction (simple)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>250 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Extraction (impacted)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>999 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Zoom Teeth Whitening') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('1200 AED + 200 Cleaning') ?> </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Clean and Polish') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('99 AED (offer)') ?> </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Gingivectomy (per tooth)') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>350 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Porcelain Veneer') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>1200 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Zirconia Veneer') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>1200 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Lumineers') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>1800 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Porcelain fused to metal crown') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>600 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Porcelain Crown') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>1200 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Zirconia Crown') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>1300 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Crown Recementation') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>199 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Snap-On Smile (per arch)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>700 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Lingual retainer (per arch)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>500 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Complete Acrylic Denture (per arch)') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>1500 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Acrylic Partial Denture') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>350 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Flexite Partial Denture') ?></td>
										<td><?= __t('Visit') ?></td>
										<td><?= __t('NA') ?></td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Dental Braces removal (debonding)') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>450 AED </td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Night Guard') ?> </td>
										<td><?= __t('Visit') ?></td>
										<td>600 AED </td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>40</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>45</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning Under L.A Quarter') ?></td>
										<td><?= __t('Quarter') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> <?= __t('Free') ?></td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning Under L.A Quarter') ?></td>
										<td><?= __t('Quarter') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> <?= __t('Free') ?></td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>40</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-D" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>45</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning Under L.A Quarter') ?></td>
										<td><?= __t('Quarter') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> <?= __t('Free') ?></td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-E" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning Under L.A Quarter') ?></td>
										<td><?= __t('Quarter') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> <?= __t('Free') ?></td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-F" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>40</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>45</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning Under L.A Quarter') ?></td>
										<td><?= __t('Quarter') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('General Examination / General Consultation / Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td> <?= __t('Free') ?></td>
										<td> 1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with Senior Dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="tab-G" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th class="fixed-side"><?= __t('Treatment Types') ?></th>
										<th><?= __t('Unit') ?></th>
										<th><?= __t('Price(USD)') ?> </th>
										<th><?= __t('# of Visits') ?></th>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Specialized Consultation and Treatment Plan') ?></td>
										<td><?= __t('Visit') ?></td>
										<td>15 - 25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Normal)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>25</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Medium)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>30</td>
										<td>1</td>
									</tr>
									<tr>
										<td class="fixed-side"><?= __t('Cleaning &amp; Polishing with General dentist (Heavy)') ?></td>
										<td><?= __t('U&amp;L') ?></td>
										<td>35</td>
										<td>1</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<p class="mt-2 p-sm"><?= __t('* All prices below are given in AED') ?> </p>
			</div>
			<!--//section-->
		</div>
		<!--//section prices-->
		<!--section special offers-->
		<div class="section" id="specialOffer">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color"><?= __t('For Our Dear Clients') ?></div>
					<h2 class="h1"><?= __t('Special Offers') ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-01.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1"><?= __t('New Patient') ?></div>
								<div class="special-card-txt2"><?= __t('Offer') ?></div>
								<div class="special-card-txt3"><?= __t('Full Consultation') ?>
									<br> <?= __t('Scale & Polish') ?>
								</div>
								<div><a href="scaling-polishing.html" class="btn"><i class="icon-right-arrow"></i><span><?= __t('Schedule') ?></span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-02.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1"><?= __t('Free') ?></div>
								<div class="special-card-txt2"><?= __t('Consultation') ?></div>
								<div class="special-card-txt3"><?= __t('Contact us to find out more about this offer') ?></div>
								<div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span><?= __t('Contact us') ?></span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1"><?= __t('Whitening') ?></div>
								<div class="special-card-txt2"><?= __t('Laser Teeth') ?></div>
								<div class="special-card-txt3">
									<?= __t('Tooth whitening') ?><br><?= __t('and Home Bleaching') ?></div>
								<div><a href="teeth-whitening.html" class="btn"><i class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1"><?= __t('Crown') ?></div>
								<div class="special-card-txt2"><?= __t('and Bridges') ?></div>
								<div class="special-card-txt3"><?= __t('6 Teeth or more in the same') ?>
									<br><?= __t('jaw, upper or lower front') ?>
								</div>
								<div><a href="crown-bridge.html" class="btn"><i class="icon-right-arrow"></i><span><?= __t('Know more') ?></span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section special offers-->
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