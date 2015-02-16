<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'dbWordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'prueba');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'K+eM_V7-&<%.&:@2t*JfxC +@d&ldlL]4%.Oj)M|IB)i#nPDo6EYA&KyHzn30DeS');
define('SECURE_AUTH_KEY', 'P!=bY4ft@S>A,_I0r@?K<|k?GNffuy@KKD2z7Fn3)yl1#,P22eZ/$7|<aXOXC?4/');
define('LOGGED_IN_KEY', '6_K6,`,2]j+S7WC|?Y{&~rMBC+BSD,%I6@-Q1HU:Z|{yhjsjLm9RqnC/?!,G)LXV');
define('NONCE_KEY', '?WDvF:#OYU88Ukn-L;y;?eC{=dHm8cOTVP#Cp;.Ab+(CkzF0np->B77VpXy|40-X');
define('AUTH_SALT', '.26O;@V7LQUY7dp.%q4o| b=HQDmg}K4L#g.~rV}+!y,EJyvs!^Iuqgo-&(8Urd)');
define('SECURE_AUTH_SALT', 'wEYrBfSnTa(-f32(~|:(0/NPPVY=6=km.$Y$|c+-jv:v~#)|2>o>((P{(79*<&bX');
define('LOGGED_IN_SALT', 'GryQ-=$_vR@? EN2F*Ncz/ B|QhT3iC5yBciUJ+o$3Ds-~e[dmYIL,mkL{=6pg $');
define('NONCE_SALT', 'wh-f]iI[!/|v8CF#!~@eozG&fQ`WUo/J&+%(R)!=0usj-j;b[Y[^WGHnljR|_zUz');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

