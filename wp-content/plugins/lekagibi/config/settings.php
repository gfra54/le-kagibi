<?php
define('SOCIETY_TMP',ABSPATH.'tmp/');

define('SOCIETY_THEME',ABSPATH.'/wp-content/themes/society-magazine/');

define('SOCIETY_PLUGIN',ABSPATH.'/wp-content/plugins/society-magazine/');

define('SOCIETY_THEME_URL',SOCIETY_SITEURL.'/wp-content/themes/society-magazine/');
define('SOCIETY_PLUGIN_URL',SOCIETY_SITEURL.'/wp-content/plugins/society-magazine/');

define('SOCIETY_FACEBOOK','http://www.facebook.com/SocietyOfficiel');

define('SOCIETY_TWITTER','https://twitter.com/societyofficiel');

define('SOCIETY_GOOGLEPLUS','https://plus.google.com/b/104201558281081650143/+Society-magazineFr');

$GLOBALS['abonnements'] = array(
	'france' => array(
		'label'=>'Abonnement à Society (un vendredi sur deux dans votre boîte aux lettres).<br>Réservés à la France métropolitaine !',
		'extra'=>'
		<p>
		<a class="fleche" href="?mode=digital">Pas fan du papier ? Consultez nos abonnements 100% digitaux </a>
		</p>
		<p>
		<a class="fleche" href="?mode=etranger">Cliquez ici pour vous abonner depuis l\'étranger et les DOM/TOM </a>
		</p>',
		'datas'=> array(
			'france-1-an'=>array(
				'titre' => 'France, 1 an',
				'prix' => '65',
				'checked' => true,
				'paypal'=> 'SD6WMPWQ34SVA',
				'+digital' => 'XXYKNPE7SUM6G',
			),
			'france-6-mois'=>array(
				'titre' => 'France, 6 mois',
				'prix' => '35',
				'paypal'=> 'JC4NXMJQ3WY86',
				'+digital' => 'K7XRYABCDRTHJ',
			)
		)
	),
	'etranger' => array(
		'label'=>'Abonnement à Society (un vendredi sur deux dans votre boîte aux lettres)<br>à destination de l\'étranger et des DOM/TOM',
		'extra'=>'
		<p>
		<a class="fleche" href="?mode=digital">Cliquez ici pour l\'abonnement 100% digital</a>
		<a class="fleche" href="?mode=france">Cliquez ici pour vous abonner depuis la france</a>
		</p>',
		'datas'=> array(
			'europe'=>array(
				'checked' => true,
				'titre' => 'Europe / DOM, 1 an',
				'prix' => '100',
				'paypal'=> 'Y5HWWHPSL9L86',
				'+digital' => 'V6XB7JGZ6T26S'
			),
			'monde'=>array(
				'titre' => 'Reste du monde, 1 an',
				'prix' => '105',
				'paypal'=> '9WN4PVBCYXNUW',
				'+digital'=> 'DABKCVVXVQTWG'
			),
		)
	),
	'digital'=> array(
		'label'=>'Abonnement d\'un an à Society 100% Digital sur <a href="https://itunes.apple.com/fr/app/society-mag./id969456269?mt=8">iOs</a> et <a href="https://play.google.com/store/apps/details?id=com.forecomm.society">Android</a>',
		'extra'=>'<p><a class="fleche" href="?mode=zones">Cliquez ici pour les abonnements papiers</a></p>',
		'datas'=> array(
			'digital-1-an' => array(
				'titre' => 'Digital 1 an',
				'prix' => '50',
				'paypal'=>'RKJCDZLFRPABE',
				'checked'=>true
			),
			'digital-6-mois' => array(
				'titre' => 'Digital 6 mois',
				'prix' => '27',
				'paypal'=>'T5FKSBH6G8AQ4'
			),
		)
	)
);