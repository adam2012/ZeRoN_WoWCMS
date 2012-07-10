<?php
/** 
*
* memberlist.php [Argentinian Spanish (Formal Honorifics)‎]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2010 
* @author 2010-10-20 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) - Modified by nextgen (webmaster of http://www.phpbbnxg.com) and QA Team Member from phpBB.com
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
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
	'ABOUT_USER'		=> 'Perfil',
	'ACTIVE_IN_FORUM'	=> 'Foro más activo',
	'ACTIVE_IN_TOPIC'	=> 'Tema más activo',
	'ADD_FOE'			=> 'Añadir Ignorado',
	'ADD_FRIEND'		=> 'Añadir amigo',
	'AFTER'				=> 'Después',
	
	'ALL'				=> 'Todos',	
	
	'BEFORE'			=> 'Antes',
	
	'CC_EMAIL'		=> 'Enviar copia a mi email',
	'CONTACT_USER'	=> 'Contacto',
	
	'DEST_LANG'			=> 'Idioma',
	'DEST_LANG_EXPLAIN'	=> 'Seleccioná un idioma apropiado (si está disponible) para el destinatario de este mensaje.',
	
	'EMAIL_BODY_EXPLAIN'	=> 'Este mensaje será enviado como texto plano, no incluyas HTML o BBCode. La dirección del remitente será tu dirección de email.',
	'EMAIL_DISABLED'		=> 'Perdón, todas las funciones de email han sido deshabilitadas.',
	'EMAIL_SENT'			=> 'El email ha sido enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Este mensaje será enviado como texto plano, no incluyas HTML o BBCode. Por favor tené en cuenta que el tema ya ha sido incluido en el cuerpo del mensaje. La dirección del remitente será tu dirección de email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Debés proporcionar una dirección de email válida para el destinatario.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Debés ingresar el texto del mensaje.',
	'EMPTY_MESSAGE_IM'		=> 'Debés introducir un mensaje para enviar.',
	'EMPTY_NAME_EMAIL'		=> 'Debés ingresar el nombre real del destinatario.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Debés especificar un tema para el email.',
	'EQUAL_TO'				=> 'Igual a',
	
	'FIND_USERNAME_EXPLAIN'	=> 'Usá este formulario para buscar usuarios específicos. No necesitás rellenar todos los campos. Para indicar datos parciales usá * como comodín. Cuando introduzcas fechas, usá el formato <kbd>YYYY-MM-DD</kbd>, p.ej. <samp>2004-02-29</samp>. Usá los checkboxes para seleccionar uno o más usuarios (Se aceptan varios usuarios dependiendo del formulario en sí mismo) y clic en el botón Seleccionar Marcados para volver al foro previo.',
	'FLOOD_EMAIL_LIMIT'		=> 'No podés enviar otro email tan pronto. Por favor intentá más tarde.',
	
	'GROUP_LEADER'			=> 'Líder de grupo',
	
	'HIDE_MEMBER_SEARCH'	=> 'Buscar usuarios ocultos',
	
	'IM_ADD_CONTACT'	=> 'Añadir Contacto',
	'IM_AIM'			=> 'Por favor fijate que necesitás tener instalado AOL Instant Messenger para usar esta opción.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'Descargar programa',
	'IM_ICQ'			=> 'Por favor fijate que los usuarios pueden haber elegido no recibir mensajes instantáneos no solicitados.',
	'IM_JABBER'			=> 'Por favor fijate que los usuarios pueden haber elegido no recibir mensajes instantáneos no solicitados.',
	'IM_JABBER_SUBJECT'	=> 'Este es un mensaje automático, ¡por favor no respondas! Mensaje del usuario %1$s en %2$s',
	'IM_MESSAGE'		=> 'Mi mensaje',
	'IM_MSNM'			=> 'Por favor fijate que necesitás tener instalado Windows Messenger para usar esta opción.',
	'IM_MSNM_BROWSER'	=> 'Tu navegador no soporta esta opción.',
	'IM_MSNM_CONNECT'	=> 'MSNM no identificado.\\n Tenés que conectar a MSNM para continuar.',
	'IM_NAME'			=> 'Tu nombre',
	'IM_NO_DATA'		=> 'No hay información de contacto adecuada para este usuario.',
	'IM_NO_JABBER'		=> 'Disculpá, los mensajes directos de usuarios de Jabber no están soportados por este foro. Necesitás tener un cliente Jabber instalado en tu sistema para contactar con el destinatario.',
	'IM_RECIPIENT'		=> 'Destinatario',
	'IM_SEND'			=> 'Enviar',
	'IM_SEND_MESSAGE'	=> 'Enviar mensaje',
	'IM_SENT_JABBER'	=> 'El mensaje a %1$s ha sido enviado correctamente.',
	'IM_USER'			=> 'Enviar un mensaje instantáneo',
	
	'LAST_ACTIVE'				=> 'Última vez activo',
	'LESS_THAN'					=> 'Menos que',
	'LIST_USER'					=> '1 usuario',
	'LIST_USERS'				=> '%d usuarios',
	'LOGIN_EXPLAIN_LEADERS'		=> 'El administrador del Sitio requiere que estés registrado y te hayas identificado para ver el listado del equipo.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'El administrador del Sitio requiere que estés registrado y te hayas identificado para acceder a la lista de usuarios.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'El administrador del Sitio requiere que estés registrado y te hayas identificado para buscar usuarios.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'El administrador del Sitio requiere que estés registrado y te hayas identificado para ver perfiles.',
	
	'MORE_THAN'	=> 'Más que',
	
	'NO_EMAIL'		=> 'No tenés permitido enviar email a este usuario.',
	'NO_VIEW_USERS'	=> 'No estás autorizado para ver la lista de usuarios o perfiles.',
	
	'ORDER'	=> 'Orden',
	'OTHER'	=> 'Otro',
	
	'POST_IP'	=> 'Enviado desde IP/dominio',
	
	'RANK'			=> 'Rango',
	'REAL_NAME'		=> 'Nombre del destinatario',
	'RECIPIENT'		=> 'Destinatario',
	'REMOVE_FOE'	=> 'Eliminar Ignorado',
	'REMOVE_FRIEND'	=> 'Eliminar amigo',
	

	'SELECT_MARKED'			=> 'Seleccionar marcados',
	'SELECT_SORT_METHOD'	=> 'Seleccioná método de orden',
	'SEND_AIM_MESSAGE'		=> 'Enviar mensaje AIM',
	'SEND_ICQ_MESSAGE'		=> 'Enviar mensaje ICQ',
	'SEND_IM'				=> 'Mensaje instantáneo',
	'SEND_JABBER_MESSAGE'	=> 'Enviar mensaje Jabber',
	'SEND_MESSAGE'			=> 'Enviar mensaje',
	'SEND_MSNM_MESSAGE'		=> 'Enviar mensaje MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Enviar mensaje YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Última actividad',
	'SORT_POST_COUNT'		=> 'Contar mensajes',
	
	'USERNAME_BEGINS_WITH'	=> 'Usuarios que comienzan con',
	'USER_ADMIN'			=> 'Modificar Usuario',
	'USER_BAN'				=> 'Banear',
	'USER_FORUM'			=> 'Estadísticas de usuario',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ningún recordatorio enviado hasta este momento',
		1		=> '%1$d recordatorio enviado<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Presente en el foro',
	
	'VIEWING_PROFILE'	=> 'Mirando perfil - %s',
	'VISITED'			=> 'Última visita',
	
	'WWW'				=> 'Sitio web',
));

?>