<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'blog');

/** MySQL数据库用户名 */
define('DB_USER', 'tongyh');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'tyh198909');

/** MySQL主机 */
define('DB_HOST', '67.216.223.42');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gFs~31rK[r=Sc.-TT9_AoHsBfb)Hs_z|/f3f;e%To)B^U1)e.e]Bi<bXka42wsVl');
define('SECURE_AUTH_KEY',  '#[t:5;eh,|e)2VA1?Fk;L g&HT)FR .-I)-.P0Dg6l~xcR3E=e[l/P$<g<S7/BL9');
define('LOGGED_IN_KEY',    'B?6BdkMYJSP~0A=VR:!*/Or~C )M}iun:__gWUkK?9coc;+pUO-FA.CJXn)U3&+`');
define('NONCE_KEY',        'JZ.z PSJ&#WrB!UKu=RB~.`$Cu?PkKT0 j`<NRhVE8&v4Zo0=qY#-x/yzZ)[Fp*D');
define('AUTH_SALT',        '8#hb7oRPeG[jR~rfg/W9DLt@#2uUzxx.3Bl1imaY>#ciq,Q7^-ojo_4nA MX!9B[');
define('SECURE_AUTH_SALT', '!HqcywB@Ew3nhCys1T;#eQtP-h5 {}&X&6%F&(m{4q-fxn}x:oE#%bJJ(g:VxJ0X');
define('LOGGED_IN_SALT',   'AzghtbhxCckjIr/5j:.?.b)iK~hr^([lUoTe3u(]Lm!e2e>9I~Fra814UW@,*S!k');
define('NONCE_SALT',       '10z)-TiuhX-<v9$:@I(3G?mG^Ae#R^i)<Xi/0YLN$SAQ[(T&<,5HLJM]{5e]ZL@J');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'tongyh_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
