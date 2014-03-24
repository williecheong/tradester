<?php // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

/**************************
    Strategy:
        Look for trade opportunities in currency pairs with positive yields (interest)
        Opens a tiny trade if an opportunity is found. Set take profit of about 10 pips
        Before executing trade, also ensure that there is a sufficient margin available
**************************/
class Squeak extends REST_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('curl');
        $this->load->helper('oanda');
    }

    public function index_get() {
        echo USER_TRADING_ENVIRONMENT;
        echo "<br>";
        echo OANDA_API_URL;
        echo "<br>";
        var_dump( oanda_get_instrument_history('EUR_USD', 'S15') );
        return;
    }
}