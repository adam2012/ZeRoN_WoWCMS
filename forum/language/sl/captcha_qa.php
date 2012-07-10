<?php
/**
*
* captcha_qa.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2011 phpBB Group
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
	'CAPTCHA_QA'	=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ta vprašanja so ukrepi proti avtomatiziranim spambotom.',
	'CONFIRM_QUESTION_WRONG'	=> 'Nisi napisal pravilni odgovor na vprašanje.',

	'QUESTION_ANSWERS'	=> 'Odgovori',
	'ANSWERS_EXPLAIN'	=> 'Prosim vnesi veljavne odgovore na vprašanja, po eno v vrsto.',
	'CONFIRM_QUESTION'	=> 'Vprašanje',

	'ANSWER'	=> 'Odgovor',
	'EDIT_QUESTION'	=> 'Uredi vprasanja',
	'QUESTIONS'	=> 'Vprašanja',
	'QUESTIONS_EXPLAIN'	=> 'Za vsako oddan obrazec, kjer je bil omogočen Q&amp;A vtičnik, bodo uporabniki vprašani eno od naslednjih vprašanj. Za uporabo tega vtičnika mora biti napisano vsaj eno vprašanje v privzetem jeziku. Ta vprašanja morajo biti lahka za odgovoriti, pa vseeno še zmeraj dovolj težka, da jih boti preko Google™ niso zmožni odgovoriti. Uporabite več vprašanj in odgovorov, katere občasno spremenite, za doseganje najboljših rezultatov. Omogočite striktne odgovore, če se le teji nanašajo na mešane črke, ločila in presledke.',
	'QUESTION_DELETED'	=> 'Vprašanje izbrisano',
	'QUESTION_LANG'	=> 'Jezik',
	'QUESTION_LANG_EXPLAIN'	=> 'Jezik, v katerih so vsa vprašanja in odgovori napisani.',
	'QUESTION_STRICT'	=> 'Striktni pregled',
	'QUESTION_STRICT_EXPLAIN'	=> 'Omogoči, če želiš mešane črke, ločila in presledke.',

	'QUESTION_TEXT'	=> 'Vprašanje',
	'QUESTION_TEXT_EXPLAIN'	=> 'Vprašanja na voljo uporabnikom.',

	'QA_ERROR_MSG'	=> 'Prosim izpolni vsa polja in vpiši vsaj en odgovor.',
	'QA_LAST_QUESTION'	=> 'Ne moreš izbrisati vsa vprašanja, medtem ko so vtičniki aktivirani.',
	
));

?>