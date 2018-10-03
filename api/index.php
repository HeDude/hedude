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
//! The API handling class from the education server
require_once getenv ( 'API_PHP_EDUCATION_SERVER_PATH' );

//! Open API en link to local information
$api = new API( __DIR__ );

//! Return API respons based on the calling URL
$api->respond( $_SERVER[ 'REQUEST_URI' ] );
exit;
