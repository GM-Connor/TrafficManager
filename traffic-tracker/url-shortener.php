<?php 

require_once( '../url-shortener/api.php' );

if ( isset($_POST['delete']) && isset($_POST['slug']))
	Shortener::delete_link( $_POST['slug'] );

if ( isset($_POST['add']) && isset($_POST['slug']) && isset($_POST['url']))
	// Shortener::add_link( $_POST['slug'], $_POST['url'] );
	require_once( '../url-shortener/shorten.php' );







$LINKS = Shortener::get_all_links();



$PAGE = 'url-shortener';

require ( 'inc/parts.php' );

 ?>