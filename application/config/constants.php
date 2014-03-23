<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Tradester Configuration for the trader
|--------------------------------------------------------------------------
*/

define('USER_EMAIL_ADDRESS',            '');
define('USER_RECEIVES_EMAILS',          TRUE);
define('USER_TRADING_ENVIRONMENT',      'sandbox');

/*
|--------------------------------------------------------------------------
| Tradester Configuration for OANDA
|       http://developer.oanda.com/docs/
|--------------------------------------------------------------------------
*/


if ( USER_TRADING_ENVIRONMENT === 'live' ) {
    define('OANDA_ACCESS_TOKEN',    '12345678900987654321-abc34135acde13f13530');
    define('OANDA_API_URL',         'https://api-fxtrade.oanda.com');
    define('OANDA_ACCOUNT_ID',      '');

} else if ( USER_TRADING_ENVIRONMENT === 'practice' ) {
    define('OANDA_ACCESS_TOKEN',    '12345678900987654321-abc34135acde13f13530');
    define('OANDA_API_URL',         'https://api-fxpractice.oanda.com');
    define('OANDA_ACCOUNT_ID',      '');
    
} else {
    define('OANDA_ACCESS_TOKEN',    '12345678900987654321-abc34135acde13f13530');
    define('OANDA_API_URL',         'http://api-sandbox.oanda.com');
    define('OANDA_ACCOUNT_ID',      '');

}


/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE',    0644);
define('FILE_WRITE_MODE',   0666);
define('DIR_READ_MODE',     0755);
define('DIR_WRITE_MODE',    0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */