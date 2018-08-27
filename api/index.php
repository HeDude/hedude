<?php
/*!
* \brief       HeDude API entry-point.
*/
/*
* \author      Rob Slagter
* \copyright   2018 Rob Slagter, HeDude
* \date        25-08-2018
* \version     1.0.0
*/
$directory_server_php_library = "/srv/production/controller/php/";
require_once $directory_server_php_library . "api.php";

//! Return API respons (if not through Tor browser) based on the request
$api = new API( __DIR__ );
$api->prevent_Tor( __DIR__ . '/cache/' );
$api->respond();
exit;
