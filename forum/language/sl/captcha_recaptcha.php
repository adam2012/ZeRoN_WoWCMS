<?php
/**
*
* recaptcha [Slovenian]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @author 2011-09-30 - pucer, borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'RECAPTCHA_LANG'				=> 'sl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'V primeru uporabe reCaptcha, moraš ustvariti račun na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Ta vizualno potrditvena koda, katero si vpisal, je napačna',

	'RECAPTCHA_PUBLIC'				=> 'Javni reCaptcha ključ',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Vaš javni reCaptcha ključ. Ključe se lahko pridobi na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privatni reCaptcha ključ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Vaš privatni reCaptcha ključ. Ključe se lahko pridobi na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Zaradi preprečanja avtomatskega prijave, želimo, da vnesete obe besedi v spodnje okvirje.',
));

?>