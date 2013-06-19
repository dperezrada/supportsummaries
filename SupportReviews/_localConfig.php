<?php
// unset database config global variable or config from environment won't work
unset( $GLOBALS['databaseConfig'] );
 // * Use this section if you have an _ss_environment.php

$GLOBALS['databaseConfig'] = array(
"type" => "MySQLDatabase",
"server" => "localhost",
   "username" => "root",
   "password" => "root",
   "database" => "supportsummaries"
);

// Your database name goes here
#global $database;$database = "support";

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

// Admin login
Security::setDefaultAdmin('dos', 'q1w2e3');


// Sites running on the following servers will be
// run in development mode. See
// http://doc.silverstripe.com/doku.php?id=devmode
// for a description of what dev mode does.

Director::set_environment_type('dev');
