<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'meanwell' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N4,klse&X],oR>lk+(cEN Y<J6J0>l$;2x)t1HX[gx&QT*:}W-bPv~{}FUq*~/M)' );
define( 'SECURE_AUTH_KEY',  'LtJwl2kWr`iwynvZGy*LB<g0vzoO=kzKo{aj>$Y@U(JZ8,CYdn.dhMOi9%)*<Qr?' );
define( 'LOGGED_IN_KEY',    '@($imqs&$AV)>y6CbxE-:m1gUyFXOBq [ExS+~ a8^S=4ql_Y]@TdjN<7kY{9qx[' );
define( 'NONCE_KEY',        ' ~!JWl-a):SE~:VD=_qp$@3x!Q9=YiEl1DJI#|RUBqIwcQsX?C,`.#u*`9II5e@=' );
define( 'AUTH_SALT',        'E+cH8ENO2VPe?~0 Yb=jV.(-qC&LwMMsr2nKkgR4 {3yV,QC_x*Ni[KT>nqjJfel' );
define( 'SECURE_AUTH_SALT', 'aM10_=Y]F}.B6{)LoO8V<jL7_H9Wdx?&9s4J{fM0GK oNHzZ^z8(`{o*QOF1Plvj' );
define( 'LOGGED_IN_SALT',   'y75wx$%4@S=2GS/_gre}P_(`ZJL)<cgcRwon<FBoA;> }@1|2DO)6zqcBIGD!a/r' );
define( 'NONCE_SALT',       '1E>#94f=9X.I*cq--n1_.|ZtM(jqT>trcOdywrirHLA-U!IJTF>-$f:c+u+~C}*W' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
