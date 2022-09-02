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
define( 'DB_NAME', 'capture' );

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
define( 'AUTH_KEY',         'NNzB`wR,1SlmAzF3vgPE7>b4nM+YXUyP>ylXTnz;p9>+|oWcddv20)INOQGb/|!?' );
define( 'SECURE_AUTH_KEY',  '4q<cqF$V[yT<13aMJh-uQkd2bln;_Q][N#yCvtFZdiXd^u|yc5P7u2YyGisgjQZ+' );
define( 'LOGGED_IN_KEY',    '?pL:^r>75jf2oG#717IL|}Kj<}-hn.Zpp+<jD}&#G}j#(/sfzh/ZT|+`;r+9A_Q#' );
define( 'NONCE_KEY',        '23H,]imzO cJV$j}tOlBy#jEfo7!cs6HH`v9<>HnP6-1?qDV--B89uu}}hBwa1Ze' );
define( 'AUTH_SALT',        '?;PbfIGshKk4xgsd@)n4sUVHE(Mk~]YqJ%4,C|&qbjYjSUe#L6/udHJQK0B Fw:l' );
define( 'SECURE_AUTH_SALT', 'UkHR0`4qIJJHy>jsmqLnJT23ZfLh-(a9J@,XS-9X>InH~EBcP#4_~fAmRYtdxK;P' );
define( 'LOGGED_IN_SALT',   'mF?e/#iTV_+0(,a)kO:Ll=MZ~FCqIO~}8<!C]dqme}C}LDYLgaZ<0ra`wX_XYLyG' );
define( 'NONCE_SALT',       '2gbIO~ !#YWAgu[a%Ko%P%sBSBdK/^%T?6jj{HmyH+]-~xcGT%;JNurp^mP@2&-5' );
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
