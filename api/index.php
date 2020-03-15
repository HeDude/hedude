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

//! Let API show the result based on the calling URL as determined by the server globals.
if ( !$api->get_by_url() )
{
    //! When the default api call is done for extracting the instruction for usage
    //! the HTTP response status code is reset.
    //! So store it to return the response to the request in stead of the correct help request done here.
    $status = http_response_code();
    $api->get_by_url( "https://api.hedude.com/help/html/en?title=Instruction" );
    http_response_code( $status );
}
exit;
