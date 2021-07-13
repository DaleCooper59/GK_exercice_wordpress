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
define( 'DB_NAME', 'agencia' );

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
define( 'AUTH_KEY',         '^(oV~9~Yy&UDGQA8-Y(+vQi?4:Zlvjgr8zJE@>!00ZR]mn|AsUzaDN>M~n-.9M:;' );
define( 'SECURE_AUTH_KEY',  'x:CST!jeeK?3xY2b6+8GXp}9S=;b;q<4!;dAoH/>]M9?Th(2mC*r5%aUs[]&BzaT' );
define( 'LOGGED_IN_KEY',    '|30`bUtq$C37hbGe23[Q@7-UP(sE%<MDoZM41g=]d&7(U>}ArH!]vKAS$$I4WBY!' );
define( 'NONCE_KEY',        'I-YZL#%8:Fo6wg:xB8,.OJ5xQ2GJ.+Ra2B<}*[7<pw[.lGx_+_vZM;AOC8,s5T,+' );
define( 'AUTH_SALT',        'a?11FL/jUra{uO!x$s6Y{2i0ZH>D0 JuFfxO5omMVS^mC=3{zprNY*O M0&sz<@u' );
define( 'SECURE_AUTH_SALT', 'MN2N>3E,XjHx`M;kk-#k!A{%d{G:/xc2%ERlNC30|%-]{/9,nDf=FAkJ5Hj=FeQs' );
define( 'LOGGED_IN_SALT',   '1.HssGRY)v[q$}_4Fk1o.qCD#52I0+%tMdWP1/Nj_8pC]9ptYR@}dSs;@=0TTLH9' );
define( 'NONCE_SALT',       'bS2A&vN<XtLU7lARTPf$^=,E!xWR34DQS40VN2h8SWg*l=8B*-j] ^}+k+;;J@u[' );
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
