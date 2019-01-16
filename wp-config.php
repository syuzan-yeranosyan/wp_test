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
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '+8h~nX9r~J?]MgI2?&5i2Z0j4eD.5sh|[9Jt 0FO]:s3Kc5Ogi(EXlE9MW[R_:m8');
define('SECURE_AUTH_KEY',  '- g$$Yw,3]*T#Cu6l8h{50!iL:T;C;4/`FKCY^S2+i!@8lz, It0F-@LRB+FQKgS');
define('LOGGED_IN_KEY',    '924pXWJW}F!TCC#Ps}XFQ)2}Uffu3ruf@v&Pa1uF;#)KYdl`.ZShOBt<V[SnxI%*');
define('NONCE_KEY',        '>w3W:TPv0r{9QLzOP~i6keD_Fkq(~xh6 9%X+(rgXiI{UCpk|_Kf$uSJ/9>r6qi[');
define('AUTH_SALT',        '~~5z:(vq!pYLJTRG4@vKxS4Hi$rIQu]g+w}7(O)jDJ[]hCRy>vZt.NE-N_vk~<)s');
define('SECURE_AUTH_SALT', 'zmp9mBm:f,vSU&48KmTdhd5gLEO$ix)S77d?H{@cLdhv$LS;d7ZcW0/Nf-O_j9V6');
define('LOGGED_IN_SALT',   'kUKV/G_mDQ](`}==X+`]wZ&00[Ih[13<Y[X(f_-c&R-w$QqYRkm&[L7+ywLg3>_x');
define('NONCE_SALT',       ']DGx Jp|nH/j?+z(}z9/XJCi$t^; %._;F(m wZ7kt?/7<<WLBUo@AjeW_X$ltKI');

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
