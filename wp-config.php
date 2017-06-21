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
define('DB_NAME', 'bastachicos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '1fm%E8j}nvN3)*X1S!s+boVQ2-fW}=fYe4nO#?%C#~J:vv4}}x@3$R}GHdUpB26$');
define('SECURE_AUTH_KEY', '2wEBs#`hXl)|S4v`arN76(+vO)}@;rn*tB|FS_~@M.tY NmoBNp7<?]S_*Y=#uiU');
define('LOGGED_IN_KEY', 'Ya:i3hWTXFXyx`edz07%Tk1E(!Wg.7r|nN?2GN@h>jk~R=C]_)^u^|N8MIMB?|*O');
define('NONCE_KEY', '46_wTF^bS`?p!KGpnJ2NK<M[e/f(DYY^^)R#~5icYi Sjhx7 ]J{yQN60ye5&Y4U');
define('AUTH_SALT', '?UV.3]y@GR`k)ke&EZSUN9sVUG%gA^7NDt;;TQ4_6b];;MN%BbXxPK`[f0u|fK:u');
define('SECURE_AUTH_SALT', 'ReVSI4LNSBgS&]A@&Jq]w4@]eEb/El,n-4U.(/(J2VCc^YPT6pIy$YfYr+Tl<|*<');
define('LOGGED_IN_SALT', 'w0!p[j eJc|S,c<)Jm]aGRHHeo`- JIbR?$]@Jl18+{r`?N M;]PGJ1Gst6SPWgw');
define('NONCE_SALT', 'Mc;|YCj,XCf{wPXTE#[L-LcHU)7B1$b&ZgD=%sN4NPlLwKl[hl,nEe;isU/&e+z ');

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

