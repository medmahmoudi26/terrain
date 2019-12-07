<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db747549785');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo747549785');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '20104957m*M');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db747549785.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?_&j$<B1xaq{d_MpWn_/ip::Ht&t{ujK@}1PKSH|Y]Eona_m^?E8&.m;mjd.wqa ');
define('SECURE_AUTH_KEY',  '>>XmR;1sOLByM_]JIiJ?pdF.Xd/PMS4j:^,Z:<?;Dt#^KN}sHZ*1g,vomv((Tp/I');
define('LOGGED_IN_KEY',    'q+t-b1v DZ# |D6Ud@JNx31.VwBse39my0y&C4`zz6<SAqJ9L%$zzO=O4tM&8?..');
define('NONCE_KEY',        '%/tFUk)hx]8Zb#f18`CJ?nBe<9eJ<@X4%TKlXo,GKhQECri0v}!e7c1i/)ltvr?Q');
define('AUTH_SALT',        'Hws#s]lk2&azNMMP)|& ^PHNfc(:NYo9,M29!30(M6HINu!zpU1-,#N.?`_1vL#f');
define('SECURE_AUTH_SALT', 'RXYl2x`FF^aOAv>3|I+V~.WJoi&g3I+Nw %bd%-H/qQ9KR]%wH&(?qrl~H3&}p%1');
define('LOGGED_IN_SALT',   '/~S=I%C-LT|J:1.eFQ`t*+J&K,1D`f0=XOEmj)A,*}*@qv^QdW5;x{>{AJ_?4fUQ');
define('NONCE_SALT',       'o>QF<fS5,0WPrA8sX[25ad>*1UJt^tpRCEhJ>^w@rr=jL:;QyT/#h]B=JwQ$d1:U');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');