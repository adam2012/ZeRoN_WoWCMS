<?php
/**
*
* ucp.php [Croatian]
*
* @package language
* @version $Id: $
* @copyright (c) 2011 phpBB Group
* @author 2011-11-18 - phpbb.com.hr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'hr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Morate registrirati račun na <a href="http://recaptcha.net">reCaptcha.net</a> kako bi mogli koristiti reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Upisali ste krivi potvrdni kod',

	'RECAPTCHA_PUBLIC'				=> 'Javni reCaptcha ključ',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Tvoj javni reCaptcha ključ. Ključevi se mogu nabaviti na <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privatni reCaptcha kljuc',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Tvoj privatni reCaptcha kljuc. Ključevi se mogu nabaviti na <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Kako bi spriječili automatsko slanje, molimo te da upišeš obje prikazane riječi u polje za upis teksta.',
));

?>