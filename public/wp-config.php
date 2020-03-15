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
define( 'DB_NAME', 'turistik' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4$S.8neg:HWI^#:jQgs|Ti<lf$ahPOI+:|My~<=-M)>dxeu,#t)lOjoX46r2NI^K' );
define( 'SECURE_AUTH_KEY',  'E)Lfg+*cdO^(={5;r,f._a!JITLznD+#`(St*ZnWrz{pu[5FUIZtunwl ;dd{.x.' );
define( 'LOGGED_IN_KEY',    'Dz3&ROo827I` a-PxAAC~<L^|2NRL`o]0W._Mp3DL9^O58+Hq%~n!+JF/.O66c:e' );
define( 'NONCE_KEY',        '#_yhk%XZSWeKR;>K@&tUQ5`Ha-mN,IH98]5$ .<%B6xlmM)F0~?nz_dB7x-{Ci/d' );
define( 'AUTH_SALT',        'f%gr:FCs;DZO4ISj^0QhwR~$$V:?@EeK/L<G!*QVH[BPy^K,YFz8b/cq ,^Nk35D' );
define( 'SECURE_AUTH_SALT', 'dg$Vj0s*k$~veY*XQGPu+c>eeRf=AW;7w3h+#Uy=acn[mO,9)$|OfB#0x1a=7xRC' );
define( 'LOGGED_IN_SALT',   'oi[h85@yCI=W!(|@|>ENN~;1<r$M~c)kUwBrwmF,L<tE&(``aX<UvTpqbO=xa#4~' );
define( 'NONCE_SALT',       ']Y|%<<TY</v0V65+H(0s]x/;D|k:N82dVgVY: !3^0<e5bxe2QhCcMz ][G7yq18' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
