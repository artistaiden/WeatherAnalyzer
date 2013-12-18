<?php

//***********************************************************************************************
//	Singleton Database Configuration
//***********************************************************************************************

require_once 'init.php';

class Database_DBConn {

	private static $connection;		//	the connection itself
	
	public static function getConnection() {
		if ( empty( self::$connection ) ) {
			try {
				self::$connection =  new mysqli( HOST, USER, PWD, DB );
			} catch ( Exception $e ) {
				die( "I'm sorry. The " . WEBSITE_NAME . " is temporarily down. Please try again later.\n" );
			}
		}
		return self::$connection;
	}

}

?>