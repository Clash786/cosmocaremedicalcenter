<?php require_once __DIR__ . '/inc/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?? 'en' ?>"></html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= __t('Redirecting to Help') ?></title>
	<meta name="description" content="<?= __t('help') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" CONTENT="noindex, nofollow">
	<meta http-equiv="refresh" content="0;url=https://help.market.envato.com/hc/en-us/sections/360007560992-Template-Kits" />
	<style>
		body {font-family: sans-serif;}
		.main {justify-content: center;display: flex;align-items: center;flex-direction: column;height: 90vh;}
		.download {border-radius: 4px; color: #fff; text-decoration: none; background-color: #82b541; padding: 11px 30px;}
	</style>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy"><?= __t('You are using an') ?> <strong><?= __t('outdated') ?></strong> <?= __t('browser. Please') ?> <a href="#"><?= __t('upgrade your browser') ?></a> <?= __t('to improve your experience.') ?></p>
<![endif]-->
<div class="main">
	<a href="https://help.market.envato.com/hc/en-us/sections/360007560992-Template-Kits" class="download"><?= __t('Visit Template Kit Help') ?></a>
</div>
<script src="" async defer></script>
</body>
</html>