<?php
// ** MySQL inst�llningar ** //
define('DB_NAME', 'dittdbnamnh�r');    // Namnet p� databsen
define('DB_USER', 'anv�ndareh�r');     // Ditt anv�ndarnamn f�r MySQL
define('DB_PASSWORD', 'l�senordh�r'); // ...och l�senord
define('DB_HOST', 'localhost');    // 99% chans att du inte beh�ver �ndra detta
define('DB_CHARSET', 'utf8');	// Detta kan beh�va �ndras beroende p� vad du anv�nt f�r teckenkodning tidigare
define('DB_COLLATE', '');

// �ndra SECRET_KEY till en unik fras.  Du beh�ver inte komma ih�g den senare,
// s� g�r den l�ng och komplicerad.  Du kan bes�ka http://api.wordpress.org/secret-key/1.0/
// f�r att f� en hemlig nyckel genererad till dig, eller hitta helt enklet bara p� n�got.
define('SECRET_KEY', 'ange din hemliga fras h�r'); // �ndra detta till en unik fras.

// Du kan ha flera installationer under samma databas om du ger varje installation ett unikt prefix
$table_prefix  = 'wp_';   // Endast nummer, bokst�ver och understreck tack!

// Detta anv�nds f�r att lokalisera WordPress till motsvarande MO-fil.
// Vald spr�kfil m�ste installeras under wp-content/languages.
// I den svenska versionen s� finns sv_SE.mo installerat under wp-content/languages
// och som du ser s� har WPLANG v�rdet "sv_SE".
define ('WPLANG', 'sv_SE');

/* Det var allt, sluta redigera h�r! Lycka till med din blogg. */

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
?>
