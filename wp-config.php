<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ttweb_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');/*localhost---5-63-159-90.ovz.vps.regruhosting.ru*/

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pl};}Ta[z5Lm>}/( m>f!HF/o`B<1.Zk%I.r]GTJ7dY*jj>tVB%$jU#LBjDNVj(k');
define('SECURE_AUTH_KEY',  '?3q1=&c9EZ>0vSP8/a_CB(XiWPaWq(Pet`(H*Q>tL*TEV2xa_[q?$i+6L5@c0|%e');
define('LOGGED_IN_KEY',    'ac~#]CnFL0 X6mPG?X/0;Wys(h0}(p>C7d1s2li.t-G^{a~&`{VUkeg;Nst}Zs^2');
define('NONCE_KEY',        'R&uXO*rmh|y^,6H6 /}z,Z~IC_=CT9Y=[2 KKY$7F zRNN6>Qflelys-*Po=?DB~');
define('AUTH_SALT',        '0nD6Otpvd gzi&kaxFr&#Y-epB^w;btjhEcY^yna/b_#@5w0uoW|&ftApr.$d/bl');
define('SECURE_AUTH_SALT', '*IVpshj]&<?bBJ(e6^a/GpLykG-Y?_ bWJ60v2:+ uR~BCKC%C;ne~Q+G+za$o2C');
define('LOGGED_IN_SALT',   '3a>S{7-~?Zw.SeTUh~=DUz`Ot:`K<%NRorzk|bH(Q:muUQj 8tG/on1|AZ.],,F^');
define('NONCE_SALT',       '{=5J=t8m9`]_a=^+PW?60%1Ij9`wQq1kJo2r<KRvPBaORerD1$PD0PTa<r(#Ia@+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'jofk_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
