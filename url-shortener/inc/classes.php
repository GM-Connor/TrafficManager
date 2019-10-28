<?php 

class DB {

	public $charset = 'utf8';

	private $mysql_host;
	private $mysql_user;
	private $mysql_password;
	private $mysql_database;

	private $connection;


	public function __construct( $mysql_host, $mysql_user, $mysql_password, $mysql_database, $charset=null ) {
		$this->mysql_host = $mysql_host;
		$this->mysql_user = $mysql_user;
		$this->mysql_password = $mysql_password;
		$this->mysql_database = $mysql_database;

		if ( $charset )
			$this->charset = $charset;
	}

	public function open() {
		$this->connection = new mysqli( $this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database );
		$this->connection->set_charset( $this->charset );
	}

	public function real_escape_string( $str ) {
		return $this->connection->real_escape_string( $str );
	}

	public function query( $query ) {
		return $this->connection->query( $query );
	}

	public function has_table( $table_name ) {
		$results = $this->query( 'SHOW TABLES LIKE "' . $table_name . '"' );
		return $results->num_rows == 1;
	}

	public function close() {
		return $this->connection->close();
	}

}







class Shortener {

	public static $url;
	public static $slug;

	private static $db;

	public static function check_url() {
		if ( in_array(self::$url, array('', 'about:blank', 'undefined', 'http://localhost/')) ) 
			die( 'Bad url: \'' . self::$url . '\'' );
	}

	public static function check_slug() {
		if ( self::$slug == '' ) {
			die( 'Bad slug: \'' . self::$slug . '\'' );
		}
	}

	public static function connect_to_db( $mysql_host, $mysql_user, $mysql_password, $mysql_database ) {
		self::$db = new DB( $mysql_host, $mysql_user, $mysql_password, $mysql_database );
		self::$db->open();

		self::try_create_url_table();
	}

	public static function db_quick_connect() {
		self::connect_to_db( MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE );
	}

	public static function try_create_url_table() {
		if ( !self::$db->has_table( URL_SHORTENER_TABLE_NAME ) ) {
			self::$db->query(
				'CREATE TABLE `' . URL_SHORTENER_TABLE_NAME . '` (
				  	`slug` varchar(14) collate utf8mb4_unicode_ci NOT NULL,
					`url` varchar(620) collate utf8mb4_unicode_ci NOT NULL,
					`date` datetime NOT NULL,
					`hits` bigint(20) NOT NULL default "0",
					PRIMARY KEY (`slug`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT="Used for the URL shortener";
			');
			self::$db->query('INSERT INTO `' . URL_SHORTENER_TABLE_NAME . '` VALUES (\'default\', \'http://madlogs.com\', NOW(), 0);');
		}
	}

	public static function close_db() {
		self::$db->close();
	}

	public static function safe_proof_url() {
		self::$url = self::$db->real_escape_string( self::$url );
	}

	public static function safe_proof_slug() {
		self::$slug = strtolower( self::$db->real_escape_string( self::$slug ) );
	}

	public static function check_slug_exists() {
		$result = self::$db->query( 'SELECT url FROM ' . URL_SHORTENER_TABLE_NAME . ' WHERE slug = "' . self::$slug . '" LIMIT 1' );

		if ( $result && $result->num_rows > 0 ) {
			die( 'Slug exists' );
		}
	}

	public static function add_to_db() {
		if ( self::$db->query('INSERT INTO ' . URL_SHORTENER_TABLE_NAME . ' (slug, url, date, hits) VALUES ("' . self::$slug . '", "' . self::$url . '", NOW(), 0)') ) {
			header( 'HTTP/1.1 201 Created' );
			// echo 'Created: ' . self::$url . ' with slug \'' . self::$slug . '\'';
			self::$db->query( 'OPTIMIZE TABLE `' . URL_SHORTENER_TABLE_NAME . '`' );
			self::close_db();
		}
	}

	public static function fetch_url() {

		$result = self::$db->query('SELECT url FROM ' . URL_SHORTENER_TABLE_NAME . ' WHERE slug = "' . self::$slug . '"');

		if ( $result && $result->num_rows > 0 ) {
			self::$db->query('UPDATE ' . URL_SHORTENER_TABLE_NAME . ' SET hits = hits + 1 WHERE slug = "' . self::$slug . '"');
			$url = $result->fetch_object()->url;
		} 

		else {
			$url = DEFAULT_URL;
		}

		return $url;
	}

	public static function get_all_links() {

		self::db_quick_connect();

		$results = self::$db->query('SELECT * FROM ' . URL_SHORTENER_TABLE_NAME);

		self::close_db();

		return $results;
	}

	public static function delete_link( $slug ) {

		self::$slug = $slug;
		self::check_slug();

		self::db_quick_connect();
		self::safe_proof_slug();

		self::$db->query('DELETE FROM ' . URL_SHORTENER_TABLE_NAME . ' WHERE slug = "' . self::$slug . '"');

		self::close_db();

	}

}








class URL {

	public function get_param( $name, $is_required=false ) {

		// If GET set
		if ( isset($_GET[$name]) && ($param = urldecode(trim($_GET[$name]))) )
			return $param;

		// If POST set
		if ( isset($_POST[$name]) && ($param = urldecode(trim($_POST[$name]))) )
			return $param;

		// Else if required
		else if ( $is_required )
			die( 'Param not valid: \'' . $name . '\'' );

		// Otherwise
		else
			return '';
	}
}









 ?>