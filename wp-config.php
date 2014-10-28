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
define('DB_NAME', 'wp_starter');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1{%]yj<%FaG`*!bTLy&<zKU-ln(O$|oTvum/m,W YwpXi7%~nK-s.4)Wz}EK|W?k');
define('SECURE_AUTH_KEY',  '&>UID|2dX|PCKppv+U@l|^?))r}7>fU%a;zcooC1ky+K+m-I&Fw)B|>>Di7Mzs1X');
define('LOGGED_IN_KEY',    '/ji@%<ge2%]h;t9XeG-/aEp&zaB}v(qC!;.xlPM2mGHmq3=yoq!hDcTc V+pGL.9');
define('NONCE_KEY',        'V/|Z>51(q=%-NCzX V C+(32FrI}I,1|U 28@?`W%&-1!2GGoX>Ex|PMR|zWywH9');
define('AUTH_SALT',        'm@b[=MR^8jBBF 7oE-two-o*s|{6=71ZqmAMwrA0q.$jw7,9he`-0V+1a7`@)#B7');
define('SECURE_AUTH_SALT', '_GY$bMw1_Irjs$.C$47~FX*9nD{<qoF?BsY*hI%u(qs}aw&=z*=L?r[,W;8BDaH^');
define('LOGGED_IN_SALT',   '}4q!qS|9,z0QZb+~oT|fUg=@_o X(qJI.v3B,=NN8} ZEil(r-]_21$UZ//jnazR');
define('NONCE_SALT',       'Y4%#rik4^l*7WsKvv?T<6zxZnlD?>s^G0)56YA~g6Be$0s}8!~zVT9f=V|sH<<Ze');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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