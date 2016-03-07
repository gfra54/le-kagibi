<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lekagibi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('NONCE_SALT',       'jHk-jP6Os3--1{t`JcN^rnA4!bp+jrC7}{KCK1G}RC8aSoLse[_0-rqPp|,,yM(!');
define('AUTH_KEY',         '3O*k$x@=aXC?F#.PdP+ pOOm$sksrnC*D`aY-!d= w:b1o^Z$cVgO0zJ):;Kg3D6');
define('SECURE_AUTH_KEY',  'z![zEAC|rL 9[Y!-cVt=2l<RJHJe!_xt;G?)R*FN92:i D-!z=nucD$Zp<*ii/7y');
define('LOGGED_IN_KEY',    'bDL{;{u&?~P!`}W.Q4d+2C-bZ]6#q1b4Rzn_6UL3obZ>Pf_.Txold-c#@mJ|9:i!');
define('AUTH_SALT',        '6|  |aWVRUTO11^t}^GK.:t-/^-sox[Mn^esV<U99L(o=UeS6hRV`8-`TMJD*lj)');
define('NONCE_KEY',        'qd.@J<,2oH75p}3%]2_G.#RX6WpYU5<MH;FW!4+sUuc`|z)P--#:+^8T&7Ip,}J5');
define('SECURE_AUTH_SALT', 'ZT3X=+T!K%,.N,?m<&c^&|KUBV,6?]pPHVA3>hDWL0%UTS?|}+RtYN0wMTFu)+L.');
define('LOGGED_IN_SALT',   'I(UA[0O2fFl.kYPCm@t=%t%+7b1ad-k1$*,rRx JkJDVW~eikN**^72@`hGn;vi)');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');