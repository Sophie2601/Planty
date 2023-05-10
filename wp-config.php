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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'h&W`pN^N@z^lDlv611[]<I& V;h8JO,C!BIk.y%^ L28M.UJM]}I~JRl_$/7.8!P' );
define( 'SECURE_AUTH_KEY',  'kZ6AaLd`O:Bxdp{m^wbFJnYjOia~)0(vIb0uHeVcft_-HDIDa4s#+MnWa$n-8*mT' );
define( 'LOGGED_IN_KEY',    'Cw%+i9^;KNLS=C~-bQo|>9~MmW9PO!_X#::WJ,au`+]S(,F{%*T$;UxgGR>w{eG^' );
define( 'NONCE_KEY',        '+cyr1p~ac2jVgca08Xg[H}wdjZrc{37<d$&uOTvn.JEHj(C%4JgvEpHGS@de.HvW' );
define( 'AUTH_SALT',        '<3bbrw~n~cPfnC|1hA!0nuR+iy`AAeZw19)#5JBq2.(WG}pR~(MKB{G78Y.c@MiL' );
define( 'SECURE_AUTH_SALT', 'd;jA/hoX0hW9+W<C!Y}H-:Kbl/kDIwP,eK_(EThN+PFo|wk!rR[m2=)q$sqeNZXy' );
define( 'LOGGED_IN_SALT',   'WbIr>9PCa`!wRRShF^0up2yjn/h($3!zUaKiZ=U[;D[A_xNzG/oQ~X}GMEmVrB,V' );
define( 'NONCE_SALT',       '1^6$|xK9t92,Ggup0/_3d&E o.qPKjVdpqOYj)J/ogbU!1G$[);2UGJn0t:vWEA+' );
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
