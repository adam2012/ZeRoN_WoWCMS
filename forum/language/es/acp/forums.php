<?php
/** 
*
* acp_forums.php [Argentinian Spanish (Formal Honorifics)]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007-Nov-26
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Vigencia',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de días que se mantendrá el tema sin mensajes nuevos antes de borrarlo automáticamente.',
	'AUTO_PRUNE_FREQ'			=> 'Frecuencia',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tiempo en días transcurrido entre una purga y otra.',
	'AUTO_PRUNE_VIEWED'			=> 'Caducidad',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de días que se mantendrá el tema sin visitas nuevas antes de borrarlo automáticamente.',
	'CONTINUE'						=> 'Continúe',

	'COPY_PERMISSIONS'				=> 'Copiar permisos de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitar la configuración de los permisos de tu nuevo foro podés copiar los permisos de un foro ya existente.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Una vez creado, el foro tendrá los mismos permisos que el seleccionado acá. Si no seleccionas ninguno, el foro creado no será visible hasta que se establezcan sus permisos.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si seleccionás copiar permisos, el foro tendrá los mismos permisos que el seleccionado. Esto sobreescribirá cualquier permiso que hayas establecido previamente con los permisos del foro seleccionado. Si no seleccionás ningún foro, se mantendrán los permisos actuales.',
	'COPY_TO_ACL'					=> 'A su vez también podés %sconfigurar nuevos permisos%s para este foro.',
	'CREATE_FORUM'					=> 'Crear Foro nuevo',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Borrar contenido o mover a foro',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Borrar subforos o mover a foro',
	'DEFAULT_STYLE'					=> 'Estilo por defecto',
	'DELETE_ALL_POSTS'				=> 'Borrar mensajes',
	'DELETE_SUBFORUMS'				=> 'Borrar subforos y mensajes',
	'DISPLAY_ACTIVE_TOPICS'			=> 'Mostrar temas activos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Temas activos en los subforos seleccionados se mostrarán bajo esta categoría.',

	'EDIT_FORUM'					=> 'Editar foro',
	'ENABLE_INDEXING'				=> 'Habilitar indexación',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Los mensajes de este foro se indexarán para búsqueda.',
	'ENABLE_POST_REVIEW'			=> 'Habilitar revisión de mensajes',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Los usuarios serán capaces de revisar sus mensajes si fueron enviados nuevos mensajes mientras estaban escribiendo. Esto debería deshabilitarse para foros de chat.',
	'ENABLE_QUICK_REPLY'			=> 'Activar respuesta rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Habilita la respuesta rápida en este foro. Esta configuración no será considerada si la respuesta rápida está deshabilitada en la configuración general del Sitio. La respuesta rápida solo se mostrará a los usuarios que tengan los permisos para enviar mensajes en este foro.',
	'ENABLE_RECENT'					=> 'Mostrar temas activos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Los temas vigentes de este foro se mostrarán en la lista de temas activos.',
	'ENABLE_TOPIC_ICONS'			=> 'Habilitar iconos para el tema',

	'FORUM_ADMIN'					=> 'Administración de Foros',
	'FORUM_ADMIN_EXPLAIN'			=> 'En phpBB3 todo está basado en foro. Una categoría es un tipo especial de foro. Cada foro puede tener subforos ilimitados y podés determinar en cuales se puede publicar o no (esto actuaría como una categoría). Acá podés añadir, editar, borrar, bloquear o desbloquear foros individuales como también definir controles adicionales. Si los mensajes y temas se desfasaron, podés resincronizarlos. <strong>Tiene que copiar o establecer los permisos apropiados para los nuevos foros, de lo contrario no serán mostrados.</strong>',	'FORUM_AUTO_PRUNE'				=> 'Habilitar auto-purga',
	'FORUM_AUTO_PRUNE_EXPLAIN'		=> 'Purga los temas del foro, defina la frecuencia/antiguedad debajo.',
	'FORUM_CREATED'					=> 'Foro creado correctamente.',
	'FORUM_DATA_NEGATIVE'			=> 'La purga no puede hacerse sobre números negativos.',
	'FORUM_DESC_TOO_LONG'			=> 'La descripción del foro es muy larga, debe tener menos de 4000 caracteres.',
	'FORUM_DELETE'					=> 'Borrar foro',
	'FORUM_DELETE_EXPLAIN'			=> 'El siguiente formulario permite borrar un Foro. Tenés que decidir dónde poner los temas (o foros) que contenga.',
	'FORUM_DELETED'					=> 'Foro borrado correctamente.',
	'FORUM_DESC'					=> 'Descripción',
	'FORUM_DESC_EXPLAIN'			=> 'Cualquier código introducido acá se mostrará tal cual es.',
	'FORUM_EDIT_EXPLAIN'			=> 'El siguiente formulario permite personalizar este foro. Por favor observá que la moderación se regula desde el menú "Permisos del foro" para cada usuario o grupo.',
	'FORUM_IMAGE'					=> 'Imagen del Foro',
	'FORUM_IMAGE_EXPLAIN'			=> 'Ubicación, relativa al directorio raíz de phpBB, de una imagen adicional para asociar con este Foro.',
    'FORUM_IMAGE_NO_EXIST'          => 'La imagen de foro especificada no existe',
	'FORUM_LINK_EXPLAIN'			=> 'URL completa (incluyendo el protocolo, p.ej. <samp>http://</samp>) a la que este Foro redireccionará al usuario.',
	'FORUM_LINK_TRACK'				=> 'Registrar redirecciones',
	'FORUM_LINK_TRACK_EXPLAIN'		=> 'Registra el número de veces que se hizo clic en el enlace.',
	'FORUM_NAME'					=> 'Nombre del foro',
	'FORUM_NAME_EMPTY'				=> 'Tenés que introducir un nombre para este Foro.',
	'FORUM_PARENT'					=> 'Foro Padre',
	'FORUM_PASSWORD'				=> 'Contraseña del Foro',
	'FORUM_PASSWORD_CONFIRM'		=> 'Confirmar contraseña',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'=> 'Solo se necesita si se introduce una contraseña.',
	'FORUM_PASSWORD_EXPLAIN'		=> 'Determina la contraseña para este Foro, es preferible usar el sistema de permisos.',
	'FORUM_PASSWORD_UNSET'				=> 'Eliminar contraseña de foro',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Elija aquí si quiere eliminar la contraseña del foro.',
	'FORUM_PASSWORD_OLD'				=> 'La contraseña del foro está usando un método hash obsoleto y debería ser cambiado.',
	'FORUM_PASSWORD_MISMATCH'		=> 'Las contraseñas que introdujo no coinciden.',
	'FORUM_PRUNE_SETTINGS'			=> 'Preferencias de purga de Foros',
	'FORUM_RESYNCED'				=> 'Foro "%1$s" sincronizado correctamente',
	'FORUM_RULES_EXPLAIN'			=> 'Las reglas del Foro se muestran en cualquier página del Foro dado.',
	'FORUM_RULES_LINK'				=> 'Enlace a las reglas del Foro',
	'FORUM_RULES_LINK_EXPLAIN'		=> 'Podés introducir una URL donde están las reglas del Foro. Este parámetro tiene preferencia sobre el texto ingresado de las reglas del Foro.',
	'FORUM_RULES_PREVIEW'			=> 'Vista previa de las reglas del Foro',
	'FORUM_RULES_TOO_LONG'			=> 'Las reglas del Foro deben tener menos de 4000 caracteres.',
	'FORUM_SETTINGS'				=> 'Configuración del Foro',
	'FORUM_STATUS'					=> 'Estado del Foro',
	'FORUM_STYLE'					=> 'Estilo del Foro',
	'FORUM_TOPICS_PAGE'				=> 'Temas por página',
	'FORUM_TOPICS_PAGE_EXPLAIN'		=> 'Si es distinto de 0 este valor sobreescribe el valor por defecto de temas por página.',
	'FORUM_TYPE'					=> 'Tipo de Foro',
	'FORUM_UPDATED'					=> 'Configuración del Foro actualizada correctamente.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Querés convertir en un enlace a un foro en el que se puede escribir y que tiene subforos. Por favor, sacá del foro todos los subforos antes de proceder, porque después de convertirlo en enlace ya no podrá ver los subforos actualmente enlazados a este foro.',

	'GENERAL_FORUM_SETTINGS'		=> 'Configuración general',

	'LINK'					=> 'Enlace',
	'LIST_INDEX'			=> 'Lista subforo en la leyenda del foro padre',
	'LIST_INDEX_EXPLAIN'	=> 'Muestra este Foro en el índice y en cualquier otro lugar del foro padre como un enlace dentro de la leyenda de su foro padre si en éste está activado el parámetro “Lista subforos en la leyenda”.',
	'LIST_SUBFORUMS'			=> 'Lista subforos en la leyenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Muestra los subforos de este foro en el índice y en cualquier otro lugar como un enlace dentro de la leyenda si su parámetro “Listar subforo en la leyenda del foro padre” está activado.',
	'LOCKED'				=> 'Cerrado',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'En el foro que seleccionaste no se puede publicar. Por favor seleccioná otro foro.',	
	'MOVE_POSTS_TO'					=> 'Mover mensajes a',
	'MOVE_SUBFORUMS_TO'				=> 'Mover subforos a',

	'NO_DESTINATION_FORUM'			=> 'No ha especificado un Foro para transferir el contenido',
	'NO_FORUM_ACTION'				=> 'No ha definido qué sucederá con el contenido del Foro',
	'NO_PARENT'						=> 'Sin Padre',
	'NO_PERMISSIONS'				=> 'No copiar permisos',
	'NO_PERMISSION_FORUM_ADD'		=> 'No tenés los permisos necesarios para añadir Foros.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'No tenés los permisos necesarios para borrar Foros.',

	'PARENT_IS_LINK_FORUM'			=> 'El foro padre que especificaste es un enlace. Los enlaces no pueden tener subforos, por favor especificá una categoría o foro.',
	'PARENT_NOT_EXIST'				=> 'No existe Padre.',
	'PRUNE_ANNOUNCEMENTS'			=> 'Purgar anuncios',
	'PRUNE_STICKY'					=> 'Purgar fijos',
	'PRUNE_OLD_POLLS'				=> 'Purgar encuestas antiguas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Borra temas con encuestas no votadas hace mucho.',

	'REDIRECT_ACL'					=> 'Ahora podés %1$sajustar parámetros%2$s para este Foro.',

	'SYNC_IN_PROGRESS'				=> 'Sincronizando Foro',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Actualmente sincronizando rango de tema %1$d/%2$d.',

	'TYPE_CAT'		=> 'Categoría',
	'TYPE_FORUM'	=> 'Foro',
	'TYPE_LINK'		=> 'Enlace',

	'UNLOCKED'		=> 'Abierto',
));

?>