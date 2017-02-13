<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
		array(
			"base_url" => "http://bookmyanchorss.com/original/hybridauth/",
			"providers" => array(
				// openid providers
				"Google" => array(
					"enabled" => TRUE,
					"keys" => array("id" => "976481005763-h56r124be5jean6smte42rae0fqs6mo8.apps.googleusercontent.com", "secret" => "JQc-K1BSF9TdM80H1LvH2lEc"),
				),
				"Facebook" => array(
					"enabled" => TRUE,
					"keys" => array("id" => "1878966485648895", "secret" => "2824d912d645dcafa9a3dc1b6f3f7764"),
					"trustForwarded" => false
				),
			),
			// If you want to enable logging, set 'debug_mode' to true.
			// You can also set it to
			// - "error" To log only error messages. Useful in production
			// - "info" To log info and error messages (ignore debug messages)
			"debug_mode" => false,
			// Path to file writable by the web server. Required if 'debug_mode' is not false
			"debug_file" => "",
);
