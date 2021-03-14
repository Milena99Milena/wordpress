<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'mysite' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N=n|KJ^5>TfJEL~4f{uZgP/ >OI.lSr}IRc8c^coRlrA GF^2[Tk2IJuos}pOf3J' );
define( 'SECURE_AUTH_KEY',  '_n]r1## 1;+Z9&@yi3*r~twHn.%z696u2OOh?!=]b?j4jFIA=[p4*j,9ITxUMl:,' );
define( 'LOGGED_IN_KEY',    'K-4fEg*JlV_e~7&X`??#9mdp<)#FFEQn/O2;b <)n7Q^^4fKwJ;nV;]smb<?{OHy' );
define( 'NONCE_KEY',        'C,$9c6&-Dyq~n|JH`|ABUf.&c7q;JQT3bLgMp|W!fG3;T#:la,%1<R!Gsf^FW 89' );
define( 'AUTH_SALT',        'gCB4H9fp/HotL.,~l2voxkEQbLC3&)0P{pR-Ade$,GN/LnLpscRB,fk,<qj)f1Ym' );
define( 'SECURE_AUTH_SALT', 'S(1EmoX&!Yh/1G9vfx_LMP)A^xG=c641^KPhSs7d?=8EnlkdV;YA(:,B=)KY}C/{' );
define( 'LOGGED_IN_SALT',   'uO9uX3%}1/yu_WTYvYQUr9p0+-e(3Kj0=Oq5),#x~K0~C{@*pjx}uvo:JcJFuZeh' );
define( 'NONCE_SALT',       ';QP*C n)lK|kR&znh;iFrfr&!iCxJ8ahslh7I*eFaR9;&hp8VFqJk~dd4I&_0nC ' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
