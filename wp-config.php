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
define('DB_NAME', 'besteel-bis');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'Jt;OtAGd~mA]2uz3+q^Uyh~olV.}!y93_bP6&W1`}81)Vs3AA+m9[J1<J^f/otT!');
 define('SECURE_AUTH_KEY',  '9Kn6L]L-!3  t0c?RZ&(xtw!XdQRMmoW)a/z|Z[v1%dDRP]+Ox6Pt+w1.0^:3+z ');
 define('LOGGED_IN_KEY',    '_zDB$|}zC&D8m?:H+Vud.6g[+s7):nffS3N:!@4LHC8W&p(mjG?SL:+}:zhl82!O');
 define('NONCE_KEY',        ';%DwL6,++G/Po,ry9-9fcQ-WW3cmoFizu!0-M+h@nP@ |zg*)8,P.V hQ(,~l)G%');
 define('AUTH_SALT',        '({bW?!;g&G GCDG~&<}tki&[czEYM:x?@bPCTf st|.^Z-/p%TS2#MH#j#8{HVH:');
 define('SECURE_AUTH_SALT', 'H}7Bs[;:Pz24tcO;3yh? Wy4bL9@j)%.Izh}&O-i*R*f+OT>B<@,]5%rM{QPp(.`');
 define('LOGGED_IN_SALT',   '-9H[[=rs%VJzXjcVYMYVXd.KBmddzJo-K00_#d.hZ*.VBChc^<Nv#sk37<4br!d$');
 define('NONCE_SALT',       'B(0c/R+<Yz>u){Z&(aXb=Q]%:@ub+;DVEhn|[qH$Kq+vi@Tka:^h~_QHL+s|Etgh');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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
