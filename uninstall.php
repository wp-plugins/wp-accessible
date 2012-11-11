<?php
/**
	Uninstall for WP-Accessible
	

*/

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();
 
delete_option('widget_wpacc-latest-tweets');

?>
