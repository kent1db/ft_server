<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user_wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'pL-~e]$`[J[[~}(]P3)q-!(e_.,2%UnZn%K:lUKk|U3NdZ8l8moF~ArHKw=f4 qO' );
define( 'SECURE_AUTH_KEY',  '(iEVw`pg1vW5hKUz];`~H>4~+=d)m^nf1WT2T&{bKpHLo!aB 4=h8QgFz.#d3]g`' );
define( 'LOGGED_IN_KEY',    'sHK*b 2:yxA<h%e;U=!zrs%86XkXd?#I{Yf}0s2mZ }~S?>+GmWO(sA%hK^&ncA6' );
define( 'NONCE_KEY',        'Mlc4<]k`HU9FX!X3j`lIlA@YbgiUFSielAHg@gXu8gV.+$-}Z[5~]IV4<(iy(-23' );
define( 'AUTH_SALT',        'fHOyo4hD3qxMkU;9m/7@~b=Jy=M^$D)V)x6~7JJ_*nYc7i~`h9E3JEWPHUER|+a_' );
define( 'SECURE_AUTH_SALT', 'b3r0xv6PgFsTbS5NCt!dHGGjlXRO<RtPhM6Z>8h~F=o1cXGD:iJy^qBOijKnZc}]' );
define( 'LOGGED_IN_SALT',   'SUM+(|Z}6clGc1{:ab2k)C%$-];C>7uAdm3>XC3r#7fs(0bPYTG R]J|U}{>4CJ@' );
define( 'NONCE_SALT',       'l(+vV4mZ!G|mq=+.6]tNjw;IA+(Zhw.oBRYw]C;q1Z(u+-|hV6F%2u0*mKD/g|+}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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

