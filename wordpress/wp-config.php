<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         '2s4bdqhynwol04e2r2meaxf5utkcorwoufuarydto57kd0ba1bmy6cjit4i0vllb' );
define( 'SECURE_AUTH_KEY',  'cc74g4nvx69b4kbnnzzl672xcwpjsubgmhzkfa99g5qguahyh1fni4c6omwih00l' );
define( 'LOGGED_IN_KEY',    'z23wcid0aj8ip03b0onzp8gyxb45kz2hhic0nxej0uodou9df64makebdagaewbd' );
define( 'NONCE_KEY',        'v2cyzxamils8gp23f34w0uus38yj6lehoyw6q6sdicllvqahx6o1cghdrv4kmk1y' );
define( 'AUTH_SALT',        'z3tzwq3f1cwvmkbjf01eee0v7ypimnxtrkeioeb5bg8c0wh8ttk143hhtnxwnq4y' );
define( 'SECURE_AUTH_SALT', 'bv7qtcyox2hl3ee3rnt8p55ou3859svyknmult5047tbyjx77c3c36bb83x7fvlj' );
define( 'LOGGED_IN_SALT',   'g486v4mp82f9my3ic867qpwyyuz1lr4et0khx7jdql20vtu5mnf1dera79x5740s' );
define( 'NONCE_SALT',       'bqx3kbedrycjkigfi3rinkme5fdhk86pzznw1zesoe7qja4hkqtggidfv693n32d' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-45b0c093-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-45b0c093-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
