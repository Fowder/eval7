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
define('DB_NAME', 'eval7');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'simplonco');

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
define('AUTH_KEY',         'mI*c&Mv8ChQAroSkm_*oAg]wlwzj95L*og|PGOl/c@NC}/4E!.m.!cf=0$oy~&@1');
define('SECURE_AUTH_KEY',  'LM=e}|B%?.~XuCc5Vr,w3Pb, 5T0E|J<Y$S#mV:AWRna!+cpYd_&<rFi*FZozxw]');
define('LOGGED_IN_KEY',    'H2f>~{|.j&d?Y7nUr&/^PJ6Zk7B:qQybs?J(U1Nc.dz/.(yd2i.4KQXD&-N=;}td');
define('NONCE_KEY',        '%0AlnDqLFO!,vTm9FLg`OouCbXx72 LM@T|REWS41XB3[J/wQK&RNsH~YM4I&r&P');
define('AUTH_SALT',        '<tL/+H//=XaR}k%^mv% {ns@d@(x25jF,K8aNkw=%b1Q5i#GYxr0L.fr{iFn;h==');
define('SECURE_AUTH_SALT', '86tAiG>AS|4ET.GSv(heeHf%(xU={~kza*c>CAVW]G$Fg6d[KNV}][hi&Idft,xG');
define('LOGGED_IN_SALT',   '@3[a=])=3ZhO=l1%7W2sCrTGP(CyFF+.MI]6y[wzkdCPV%69d@<yH>hXBh,~Stv$');
define('NONCE_SALT',       'k%E,KBS=$P7U=19JD4EV1vK3V9dafbx6:(@;;uWsUY<_LVa%uX-UH,dYUJ^|N7]t');
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