<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Jr&Ry?}K~J1RT^uIyD+z+Gay[9rd=2z&{F6D};>,1*5U1q>~c:Mk4T4=n~KZ`mjA' );
define( 'SECURE_AUTH_KEY',  'aZ;X9jS,e/isAl$Hv#M2%*{Op%^@K[}0_!/~SH1J8x!|Dcj?Q2z[1/~##Zgv`A`M' );
define( 'LOGGED_IN_KEY',    'h!DG4I!+5jg7B0l,c[uPm+9N[7H*;ZaFbU`cfYLFOK%*4HZaiA~UxKMbQ]($Cyg$' );
define( 'NONCE_KEY',        'n0rY~WLjGK0[Z_lcWxp4q-P=lcFv:vdQb*.V1D|V5f/Rg$1xYQ-{EWYa6wUt)-hS' );
define( 'AUTH_SALT',        '3&-o`61Cb*Ux-advmRP?jk4Jf|2SYidy]{F#dYHi5f.x<h|!G!H.#7Hg;^mZJ=>8' );
define( 'SECURE_AUTH_SALT', 'qH.e7~u=uAw5(6B529MmG;.imF/#qU;+A<#6swKF,NEq-T8lFU8Odq0K5c+H+p*R' );
define( 'LOGGED_IN_SALT',   '_1<$g~CWjeFIm/b=X~r|0]z{P`uiExI8a}uYc&khI&Bf==/h)7~Y*f9!ykie,#u5' );
define( 'NONCE_SALT',       'gu76p2OBKjH>J3v>k5SMugbxeI3R,gs>sRX}:PWQRe]$qh06FQ#AljG[8IUcz.uQ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
