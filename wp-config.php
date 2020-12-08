<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'wordpress' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'root' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', '' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$c6cL=Q _2^Nnpx[0QA8cF mS^8b(W;`Mdm3eg$_7E.coT|Cd#YqOC32hk&{h:}}' );
define( 'SECURE_AUTH_KEY',  '0]ByP.g+1jaEt|iZ<)7wJjzI31}iZo:!gI*O5M#]?Zy14Mpq;mVc9p0h|qm>SKQX' );
define( 'LOGGED_IN_KEY',    '-.KpJq(|MI;ze~=2O|<?8HdMrlL,~8ix=TwzZ;(^Ziwrpr!#:BGvq1UK4MbB3l[s' );
define( 'NONCE_KEY',        '@3%Fw?rsu]CAtk:Ja>ThlV(+f?k|S2^s#r?VnpVpqxldyJ@:$337V|ju<(fRX$7i' );
define( 'AUTH_SALT',        '8?<]@xp<!F/B(3bl5 $7R77L{3S%D6QH*&_kDwRX0P@xrsv$f0Uq$v{({P)R%% K' );
define( 'SECURE_AUTH_SALT', 'Q6W&5@p7O o*+#*JE0uEb[duIsK6k5^i(lo~AkkV&({EH&5^%KL0,g/#g?duMA~8' );
define( 'LOGGED_IN_SALT',   '%|sdhm-O:~[$N>@Ggh=[U@.i|rBsh<Z2YYxFF<rV#7lh)j2t|4h:+*Eso2#&6%%t' );
define( 'NONCE_SALT',       'Q4:XS*}(&ZDx%ft-ey n5,{.*Qo3QgM1xtt.L<|80<f|?T#~AtpyqBw=Q? C]0PJ' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
