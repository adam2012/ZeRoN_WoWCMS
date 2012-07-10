<?php
/** 
*
* acp_email.php [Argentinian Spanish (Formal Honorifics)]
*
* @package language
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) - Modified by nextgen (webmaster of http://www.phpbbnxg.com) and QA Team Member from phpBB.com
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
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
//


$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Acá podés enviar un email a todos los usuarios, o a los usuarios de un grupo específico. Para esto se enviará un email a la dirección administrativa proporcionada, con copia oculta a todos los receptores. Si el grupo de personas es muy grande, por favor se paciente después de pulsar en "Enviar" y no detengas el proceso por la mitad. Es normal que enviar un email masivo lleve algún tiempo, serás notificado cuando se complete el proceso',
	'ALL_USERS'					=> 'Todos los usuarios',

	'COMPOSE'					=> 'Escribir',

	'EMAIL_SEND_ERROR'			=> 'Hubo uno o más errores mientras enviaba el email. Por favor verificá el %1$sLog de Errores%2$s para más detalles.',
	'EMAIL_SENT'				=> 'El mensaje ha sido enviado.',
	'EMAIL_SENT_QUEUE'			=> 'El mensaje ha sido aceptado para su envio.',

	'LOG_SESSION'				=> 'Registrar sesión de email en Registro de errores',

	'SEND_IMMEDIATELY'			=> 'Enviar de inmediato',
	'SEND_TO_GROUP'				=> 'Enviar a grupo',
	'SEND_TO_USERS'				=> 'Enviar a usuarios',
	'SEND_TO_USERS_EXPLAIN'		=> 'Introducir nombres acá invalida cualquier grupo seleccionado arriba. Introducí cada nombre de usuario en una nueva línea.',
	'MAIL_BANNED'			=> 'Email a usuarios excluidos',
	'MAIL_BANNED_EXPLAIN'	=> 'Cuando se envía un correo electrónico masivo a un grupo se puede elegir si los usuarios excluidos recibirán el email.',

	'MAIL_HIGH_PRIORITY'		=> 'Alta',
	'MAIL_LOW_PRIORITY'			=> 'Baja',
	'MAIL_NORMAL_PRIORITY'		=> 'Normal',
	'MAIL_PRIORITY'				=> 'Prioridad',
	'MASS_MESSAGE'				=> 'Tu mensaje',
	'MASS_MESSAGE_EXPLAIN'		=> 'Por favor tené en cuenta que solo puede isertarse texto plano. Se eliminará cualquier código antes de enviar.',

	'NO_EMAIL_MESSAGE'			=> 'Tenés que introducir un mensaje.',
	'NO_EMAIL_SUBJECT'			=> 'Tenés que especificar un tema para su mensaje.',
));

?>