<?php

// Imports
// --------------------------------------------------

require( 'config.php' );
require( 'inc/classes.php' );





// Fetching url
// --------------------------------------------------

Shortener::$url = DEFAULT_URL;

Shortener::$slug = URL::get_param( 'slug' );

if ( Shortener::$slug ) {

	// Open database
	Shortener::connect_to_db( MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE );

	// Safe-proof url and slug
	Shortener::safe_proof_slug();

	// Get and set url
	Shortener::$url = Shortener::fetch_url();

	// Close database
	Shortener::close_db();
}

	

// Redirect
// --------------------------------------------------

header('Location: ' . Shortener::$url, null, 301);

?>
<meta http-equiv=refresh content="0;URL=<?php echo Shortener::$url; ?>"><a href="<?php echo Shortener::$url; ?>">Continue</a><script>location.href=<?php echo json_encode(Shortener::$url, JSON_HEX_TAG | JSON_UNESCAPED_SLASHES); ?></script>
