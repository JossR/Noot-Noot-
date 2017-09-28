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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#]md0wRFSx&SO{+N2SDqLH$iGb%9?*1}iyP(2gbm8a{iI+N5+_6vJlZUOh^rh#qD');
define('SECURE_AUTH_KEY',  '^7sCUSDiFd>1-LS;Bk=7w)=wNsfj@?A?m%IYV#=4kNGtwzT:tb8yr1H%xMpP.fa`');
define('LOGGED_IN_KEY',    'p;sEu#[D6kB-GsqK$sL-rK~<;x!-_AXLgLFw$bl)p~A||_exP=>Ia|2!z)/aFfw&');
define('NONCE_KEY',        'jXyZe>Ny2C]sw)]I1yp01<*5MC&?A|1T:A96y~_.DHmU,Nz$,_VZ0=x~GP+Q>4l7');
define('AUTH_SALT',        'B6dc9g}Z-7Mv[=}}ouupbpZ]DJ)!*4=TX]cC2%K}v]j@g@O21)Q?T?rrc:GcZI,Q');
define('SECURE_AUTH_SALT', 'a6I_ji9@*[Gd7Gi[756R%A-ef$kLt?1-|d@G2MA.V$4Sm)i-;NE0J$z`0JLj;|!!');
define('LOGGED_IN_SALT',   's5|f`o.RY mHUFr#l%kA<+FyI<Lw6biTq6NrQk~_o{1kZoY;S<ntpkJ9=8*r>diT');
define('NONCE_SALT',       'Dbbrg_k<V67E@Cb$O!?k`=e^vKgQcg;=mD{zDhaIWs+l0shxPKR)AVZ,<,-p:L@^');
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
