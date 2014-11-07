<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'urbanoart');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'urbanoart');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'urbanoart1234');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J:j~l^?Jn|]$gyzfh-!Z[8;?WVd{4dN7s{@}Urp8+zT]jRV<av>)5fni|z;%XZh|');
define('SECURE_AUTH_KEY',  'D}*?oT}|J$Ye?aD~ge#:W<:CMFKOsd]3)gH^D6!|v}PCXi*zm|a@StfCCI%bpB7-');
define('LOGGED_IN_KEY',    'd2hLsN-IDB!zX`jo),>SiT~)9w<?1}K~+GRR CBGp0 [8CPi,ja<//W^MB-w8?Bs');
define('NONCE_KEY',        'TFD-Q{;if/;O2i0gX*j@J_x($/O/4xQqzh:ZgN$JW3!0<p,t&z5,/1g;HW4_wp:W');
define('AUTH_SALT',        '[l+&)u&`c[ 7<&2C|)Y7}/U)uGUWV6X1X}mJPanL>0g9F-32{je|Y->sY`3zp.R3');
define('SECURE_AUTH_SALT', 'Bd%Hf^|%dptvpyj2{(06W-.Z#*_ytX_%xVs5HC%PR3&:M.HxtgX4jt:>%sOX-DO!');
define('LOGGED_IN_SALT',   '|<Z|/B-b|#jd0?IG$-Pxy#c3tt/.UTvl3N94-mR.p(~[aUH4L-|/P/?8tJDq +.E');
define('NONCE_SALT',       'v(qYy;w*${M(9cOzn<[uuSJXH&-tl/-f%(F^Oc+JhGZ&KotS?BCij4 EHw{0:TJ=');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
