<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'brief' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q-n:wjwVxa7Iy ^:2mO[[qpA`Fh#]8rWs.>-P3IYuR,/Vw:2zPKwmL]@oUO1NZkY' );
define( 'SECURE_AUTH_KEY',  'c]R#,wrJ?iu||Lg*_d{<Wjd?Wy8WuDb:sqDzYSa+tH9]Fhp0,Fq,MoNAH=ju,rx:' );
define( 'LOGGED_IN_KEY',    'E:1!p&IXQ5Rk![OO`f$,f<,2mQp-pQ^eK2fYhA)fm4qil3>J-ma]lv6{lH6]rXUx' );
define( 'NONCE_KEY',        '0{#<ES.9bE~F~cpqv0kITU[YgKwp;jsE+4iZ}D,oRHD?Mq+<=? ]WVV1-Pbv#D,~' );
define( 'AUTH_SALT',        'y2^9rEGX^.c_V|%M <QrA^^i^@F.EZm}u+U Y2u`J|=A*%0!`ov9v@((1U:d3[~W' );
define( 'SECURE_AUTH_SALT', ')/1)c[$v1^kQ?VG8x-PrH{bTJNY`-`d+9@X$&[_-wI`E@d_f@Na;[bshYy?,f5pm' );
define( 'LOGGED_IN_SALT',   'aV]=Uf^3w:[ik3WX-MIM~*+Itmpk{#G!F&h>z5uV)!$*ZY0SJ>l$NE(u-*.80 K<' );
define( 'NONCE_SALT',       'DwIRgtB0/$-a7)@R=Tn+JA+`h2RmV~}@bY/XS87lZ&vv+>jd_rxUXSO)Gjr~2_X$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
