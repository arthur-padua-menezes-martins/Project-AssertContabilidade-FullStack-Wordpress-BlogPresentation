<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':wXnC[[):|Rspx`I$>l>v|}AGvhaj4s)_ LGs^+:jzU4{&=W|f=c&kL?a.bi9R3l' );
define( 'SECURE_AUTH_KEY',  '.J;p_7GY).7Fi!5]Aez>e`6l:A>((5$)Oj+[P$HlkwzbM!0R /X8=K?,e:|rFrt:' );
define( 'LOGGED_IN_KEY',    'HrQ6K>SZuNZ{-;=m#(y|=k(.US#1db1A E[Ar{j-i9e]0!FN8M{9k:+/P9Lu!E!H' );
define( 'NONCE_KEY',        'bw:2oo~$8o@B;YIH2R&p_}$n=SB]Zg(HbyK{~$evcl %`r3VQ;B.g88FeY2sJw4 ' );
define( 'AUTH_SALT',        'ttc Nu yuP|Nt3E_J(X_?@F=q~a XJPSsVh&r%q}-7^3yk!56u3A!e^L=s<5&y{k' );
define( 'SECURE_AUTH_SALT', '}u/Uva0zcZz7pZe+<BTfk0:J]ToW%=#Y`Op>!&mf$1Fgw),,uIUCc=e0TH8p+G}X' );
define( 'LOGGED_IN_SALT',   '}8hR|u4U.9[e>lw6n=Wh[l1(GBpVg<lZ)A*;,/ah[$M?MM6mzL/xJ6n><Myu!m?P' );
define( 'NONCE_SALT',       'bM R1_oA{RN&~EWhRL9fY>A}.2Evs>puD_Lx ;*0&TIf%MSlN7<G=+1~t~V2}7BB' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
