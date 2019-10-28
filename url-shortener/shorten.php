<?php

// Imports
// --------------------------------------------------

require_once( '../dev/auth.php' );
require_once( 'config.php' );
require_once( 'inc/classes.php' );



// Get url and slug params
// --------------------------------------------------

Shortener::$url = URL::get_param( 'url', $is_required=true );
Shortener::$slug = URL::get_param( 'slug', $is_required=true );



// Check url and slug
// --------------------------------------------------

Shortener::check_url();
Shortener::check_slug();



// Open database
// --------------------------------------------------

Shortener::connect_to_db( MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE );



// Safe-proof url and slug
// --------------------------------------------------

Shortener::safe_proof_url();
Shortener::safe_proof_slug();

Shortener::check_slug_exists();



// Adding into db
// --------------------------------------------------

Shortener::add_to_db();


?>