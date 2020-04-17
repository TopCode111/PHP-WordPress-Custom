<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'newhikoshi_wp2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'newhikoshi_wp2' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '3sgkp7uml7' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql10007.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8CCqf?9hma,t_pnW^MtG7j?kvulq7$atVK>A@6c<#fTDrFcw:Y|M)PfNr:;?w#(.' );
define( 'SECURE_AUTH_KEY',  '}_4)NTr8vGa=Z5sa:;{=-}>)aLafuZCp~MP}kt$|.CS 8Q)M*8 l=.ny[ kL%lh%' );
define( 'LOGGED_IN_KEY',    ')]1kv|P.Xl{q|atpZAHAc:L~mL:T`=#mTxE/|!&6OqctVu?F>f (6=pgA{Rn _,Q' );
define( 'NONCE_KEY',        '+yl4+><TV^%D7a+Wih)NuQV^jB::#loGMVor(@1=R2-#u&$nz$ZDF!ht>={1uv+q' );
define( 'AUTH_SALT',        'qww;K[He6+K4V!f(HPeqd/-|[`t j*L}}ZR=K{_tT+j7]+zbt5G;;S0-{:JFzH<+' );
define( 'SECURE_AUTH_SALT', '#Q7{0XX=vMp/-cBz7[^q.xE*s-#oUj6iC=/N*Q(UYYv+cg+[c^0pFjE<<*jSc`~-' );
define( 'LOGGED_IN_SALT',   'yp-9{{91&%;;c;,Fk+[?~kuC7DP[]OuBO*IzId|])|aCX28}6,i?:HTQN*.Yy?de' );
define( 'NONCE_SALT',       'qm&3)D,HdCHmw0C`$:}oSke6y8`t/_5YFbd`g(I[?KgRl$byrrw%,:S[a9!?V0|l' );
define( 'WP_CACHE_KEY_SALT', '<o9-PF,u_7bq&D,.Cr|L+gl&*8H^$&Nb`NS1o!f-IJM_a.ov<@]18&.iVOAiTIfL' );
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
