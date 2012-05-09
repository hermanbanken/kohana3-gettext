<?php defined('SYSPATH') or die('No direct script access.');

return array(
	// Location of PO/MO files
	'directory' => 'i18n',
	
		// List of available locales
	'locales' => array(
		'en_US', 
		'nl_NL'
	),

	// Gettext domain name
	'domain' => 'app',
	
	// GET query var to check for to force language MO file refresh, or FALSE to disable
	'refresh_var' => '_refreshlang',
	
	// GET query var to force PO file generation, or FALSE to disable
	'regenerate_var' => '_regenlang',
	
	// Auto refresh timeout for language MO file reload in seconds, or FALSE to disable
	'auto_refresh' => 600,

	// Files to parse for language PO generation
	'includes' => array('views', 'models', 'controllers'),
	
);