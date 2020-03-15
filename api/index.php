<?php
/*!
* \brief       HeDude API entry-point.
*/
/*
* \author      Rob Slagter
* \copyright   2018 Rob Slagter, HeDude
* \date        16-09-2019
* \version     1.0.1
*/
//! The API handling class from the education server
if ( empty( getenv ( 'SERVICE_PATH' ) ) )
{
    exit;
}
require_once getenv ( 'SERVICE_PATH' ) . '/service_api_hedude_com.php';

//! Open API en link to local information
$api = new Service_api_hedude_com( __DIR__ );

$api->get();
exit;
