<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /**************************
    Reference - http://developer.oanda.com/docs/v1/rates/#get-an-instrument-list
    **************************/
    function oanda_get_instrument_list(){
        // Preparing the URL string
        $url = OANDA_API_URL . '/v1/instruments';
        $url = $url . '?accountId=' . OANDA_ACCOUNT_ID;
        // End of preparing the URL string

        $response = file_get_contents_via_curl($url);
        return json_decode($response);
    }

    /**************************
    Reference - http://developer.oanda.com/docs/v1/rates/#get-current-prices
    **************************/
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

    /**************************
    Reference - http://developer.oanda.com/docs/v1/rates/#retrieve-instrument-history
    **************************/
    function oanda_get_instrument_history( $instrument = 'EUR_USD', $granularity = 'S5' ){
        // Prepare the URL string
        $url = OANDA_API_URL . '/v1/history';
        $url = $url . '?instrument=' . $instrument;
        $url = $url . '&granularity=' . $granularity;
        // End of preparing the URL string

        $response = file_get_contents_via_curl($url);
        return json_decode($response);
    }