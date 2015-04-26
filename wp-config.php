<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link https://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', '134769-lindegrens');

/** MySQL-databasens användarnamn */
define('DB_USER', '134769_xi36812');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'fruktsallad');

/** MySQL-server */
define('DB_HOST', 'lindegrens-134769.mysql.binero.se');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'id=Ip0X!+G:CM,|I&]BK{4kB[mL?N2-[O`63pRZwl h7K}>|5.85]qmYN%8-/m .');
define('SECURE_AUTH_KEY',  '|Vl_dbGpfg+X!e*_f2MR><BRSbq7O1IDPXmj$~DDI^%(H9lf<$`l`V*t+O[ErJ{u');
define('LOGGED_IN_KEY',    'B}DD~p0UVkSWLCHvj{@|mBEalyG=7]5mZ2kZ)?x?p]A |wYuLDUaN-,{>N2tIf`<');
define('NONCE_KEY',        '_[Xs[}WzbI!@=P;#4D>+w@<$4ph^$$G=djV9wcjw7XbRZ-7|5#4yH}NIZe=3h,,(');
define('AUTH_SALT',        '1XVSR^D_+LwX (w@?:/d27|qpaOk~b)]W!g0#5ZQmH-Vo0Bh8)dHRthf]m*!a$U>');
define('SECURE_AUTH_SALT', '=u^/x54=L)S]9Y!oYdKbYYI`gY=,>R{ah? X;Y5iYVSg!N>l8_@H&?msM6I|BzSs');
define('LOGGED_IN_SALT',   'IBz^|Hg}>AMDww-2AWX|#6%V@.fUJO-MNA9&FyT9|yh)NL@-GvNu/A2OyOiP6+UJ');
define('NONCE_SALT',       ' $>-jc;#VgjEokLB9tX>lY${:eXXAdaB0s/6ecm,FSe_`Q]+0{3Ex@.Q(|0.8[IT');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'lg_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');