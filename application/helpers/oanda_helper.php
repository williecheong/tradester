<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    function oanda_get_instrument_list(){
        // Preparing the URL string
        $url = OANDA_API_URL . '/v1/instruments';
        $url = $url . '?accountId=' . OANDA_ACCOUNT_ID;
        // End of preparing the URL string

        $response = file_get_contents_via_curl($url);
        return json_decode($response);
    }

    function oanda_get_current_prices( $instruments = array() ){
        // Prepare the URL string
        $url = OANDA_API_URL . '/v1/quote';
        if ( !empty($instruments) ) {
            $url = $url . '?instruments=' . implode('%2C', $instruments);    
        }
        // End of preparing the URL string
 
        $response = file_get_contents_via_curl($url);
        return json_decode($response);
    }

    function oanda_get_instrument_history( $instrument = '' ){
        // Prepare the URL string
        $url = OANDA_API_URL . '/v1/history';
        if ( $instrument !== '' ) {
            $url = $url . '?instrument=' . $instrument;    
        }
        // End of preparing the URL string

        $response = file_get_contents_via_curl($url);
        return json_decode($response);
    }