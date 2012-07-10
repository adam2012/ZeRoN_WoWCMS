<?php
/**
*
* acp_users.php [Slovenian]
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
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'	=> 'Predogled podpisa',
	'AT_LEAST_ONE_FOUNDER'	=> 'Tega ustanovitelja ne morete spremeniti v navadnega uporabnika. Za ta forum mora obstajati vsaj en ustanovitelj. Če želite spremeniti status ustanovitelja tega uporabnika, najprej v ustanovitelja povišajte nekoga drugega.',
	
	'BAN_ALREADY_ENTERED'	=> 'Ta blokada je bila že uspešno vnešena. Blokirna lista ni bila posodobljena.',
	'BAN_SUCCESSFUL'	=> 'Blokada je bil uspešno vnešen.',
	
	'CANNOT_BAN_ANONYMOUS'	=> 'Ne moreš blokirati računa anonymous. Dovoljenja za anonymous uporabnika se lahko nastavi pod Dovoljenji v ANP.',
	'CANNOT_BAN_FOUNDER'	=> 'Ne morete blokirati računov ustanoviteljev.',
	'CANNOT_BAN_YOURSELF'	=> 'Ne morete blokirati samega sebe.',
	'CANNOT_DEACTIVATE_BOT'	=> 'Ne morete deaktivirati računov botov. Prosimo vas, da bota deaktivirate prek strani z boti.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'Ne morete deaktivirati računov ustanoviteljev.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Ne morete deaktivirati lastnega računa.',
	'CANNOT_FORCE_REACT_BOT'	=> 'Ne morete vsiliti ponovne aktivacije računov botov. Prosimo vas, da bota ponovno aktivirate prek strani z boti.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Ne morete vsiliti ponovne aktivacije računov ustanoviteljev.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Ne morete vsiliti ponovne aktivacije lastnega računa.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'Ne morete odstraniti uporabniškega računa za goste.',
	'CANNOT_REMOVE_YOURSELF'	=> 'Ne morete odstraniti lastnega uporabniškega računa.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ignoriranih uporabnikov ne morete povišati v ustanovitelje.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Pred povišanjem v ustanovitelje morate te uporabnike aktivirati - povišate lahko samo aktivirane uporabnike.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'To morate navesti samo, če spreminjate e-naslov tega uporabnika.',
	
	'DELETE_POSTS'	=> 'Izbriši prispevke',
	'DELETE_USER'	=> 'Izbriši uporabnika',
	'DELETE_USER_EXPLAIN'	=> 'Prosimo, pomnite, da je brisanje uporabnika nepovratno dejanje.',
	
	'FORCE_REACTIVATION_SUCCESS'	=> 'Ponovna aktivacija je bila uspešno vsiljena.',
	'FOUNDER'	=> 'Ustanovitelj',
	'FOUNDER_EXPLAIN'	=> 'Ustanovitelji imajo vsa administratorska dovoljenja in jih uporabniki, ki niso ustanovitelji, ne morejo blokirati, izbrisati ali spremeniti..',
	
	'GROUP_APPROVE'	=> 'Odobritev člana',
	'GROUP_DEFAULT'	=> 'Naredi skupino privzeto za člana',
	'GROUP_DELETE'	=> 'Odstrani člana iz skupine',
	'GROUP_DEMOTE'	=> 'Ponižaj voditelja skupine',
	'GROUP_PROMOTE'	=> 'Povišaj v voditelja skupine',
	
	'IP_WHOIS_FOR'	=> 'IP whois za %s',

	'LAST_ACTIVE'	=> 'Zadnjič dejaven',

	'MOVE_POSTS_EXPLAIN'	=> 'Prosimo, izberite forum, kamor želite premakniti vse prispevke tega uporabnika.',

	'NO_SPECIAL_RANK'	=> 'Ni določena posebna stopnja',
	'NO_WARNINGS'	=> 'No warnings.',
	'NOT_MANAGE_FOUNDER'	=> 'Želeli ste urediti uporabnika s statusom ustanovitelja. Samo ustanovitelji lahko upravljajo druge ustanovitelje.',

	'QUICK_TOOLS'	=> 'Hitra orodja',

	'REGISTERED'	=> 'Registriran',
	'REGISTERED_IP'	=> 'Registriran iz IPja',
	'RETAIN_POSTS'	=> 'Ohrani prispevke',

	'SELECT_FORM'	=> 'Izberi obrazec',
	'SELECT_USER'	=> 'Izberi uporabnika',

	'USER_ADMIN'	=> 'Administracija uporabnikov',
	'USER_ADMIN_ACTIVATE'	=> 'Aktiviraj račun',
	'USER_ADMIN_ACTIVATED'	=> 'Uporabnik je bil uspešno aktiviran.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Avatar je bil uspešno odstranjen iz uporabnikovega računa.',
	'USER_ADMIN_BAN_EMAIL'	=> 'Blokiranje e-naslovov',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-naslov je bil blokiran prek administracije uporabnikov',
	'USER_ADMIN_BAN_IP'	=> 'Blokiranje IPjev',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP je bil blokiran prek administracije uporabnikov',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Uporabniško ime je bilo blokirano prek administracije uporabnikov',
	'USER_ADMIN_BAN_USER'	=> 'Blokiranje uporabniških imen',
	'USER_ADMIN_DEACTIVATE'	=> 'Deaktiviraj račun',
	'USER_ADMIN_DEACTIVED'	=> 'Uporabnik je bil uspešno deaktiviran.',
	'USER_ADMIN_DEL_ATTACH'	=> 'Izbriši vse priponke',
	'USER_ADMIN_DEL_AVATAR'	=> 'Izbriši avatar',
	'USER_ADMIN_DEL_OUTBOX'	=> 'Izprazni mapo odposlanih ZS',
	'USER_ADMIN_DEL_POSTS'	=> 'Izbriši vse prispevke',
	'USER_ADMIN_DEL_SIG'	=> 'Izbriši podpis',
	'USER_ADMIN_EXPLAIN'	=> 'Tukaj lahko upravljate z informacijami o svojih uporabnikih in z določenimi specifičnimi možnostmi.',
	'USER_ADMIN_FORCE'	=> 'Vsili ponovno aktivacijo',
	'USER_ADMIN_LEAVE_NR'	=> 'Odstrani iz Novo Registriranih uporabnikov',
	'USER_ADMIN_MOVE_POSTS'	=> 'Premakni vse prispevke',
	'USER_ADMIN_SIG_REMOVED'	=> 'Podpis je bil uspešno odstranjen iz uporabnikovega računa.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Uspešno so bile odstranjene vse priponke, ki jih je poslal ta uporabnik.',
	'USER_AVATAR_NOT_ALLOWED'	=> 'Avatar ne more biti prikazan, ker so bili avatarji onemogočeni.',
	'USER_AVATAR_UPDATED'	=> 'Uspešno so bili posodobljeni podatki o uporabnikovih avatarjih.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Ta avatar ne more biti prikazan, ker ta tip ni dovoljen.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Polja v profilu po meri',
	'USER_DELETED'	=> 'Uporabnik uspešno izbrisan.',
	'USER_GROUP_ADD'	=> 'Dodaj uporabnika v skupino',
	'USER_GROUP_NORMAL'	=> 'Uporabnik uporabniško definiranih skupin je član',
	'USER_GROUP_PENDING'	=> 'Uporabnik skupin je na čakanju',
	'USER_GROUP_SPECIAL'	=> 'Uporabnik je član naslednjih skupin',
	'USER_LIFTED_NR'	=> 'Uspešno odstranjen statu Novo Registriranega uporabnika.',
	'USER_NO_ATTACHMENTS'	=> 'Ni pripetih datotek za prikaz.',
	'USER_OUTBOX_EMPTIED'	=> 'Uspešno si izbrisal sporočila v mapi poslanih ZS',
	'USER_OUTBOX_EMPTY'	=> 'Uporabnikova mapa poslanih ZS je že izpraznjena.',	
	'USER_OVERVIEW_UPDATED'	=> 'Podrobnosti o uporabnikov posodobljene.',
	'USER_POSTS_DELETED'	=> 'Uspešno so bila odstranjena vsi prispevki, ki jih je napisal ta uporabnik.',
	'USER_POSTS_MOVED'	=> 'Uporabnikovi prispevki so bili uspešno premaknjeni v ciljni forum.',
	'USER_PREFS_UPDATED'	=> 'Uporabnikove nastavitve posodobljene.',
	'USER_PROFILE'	=> 'Uporabnikov profil',
	'USER_PROFILE_UPDATED'	=> 'Uporabnikov profil posodobljen.',
	'USER_RANK'	=> 'Uporabnikova stopnja',
	'USER_RANK_UPDATED'	=> 'Uporabnikova stopnja posodobljen.',
	'USER_SIG_UPDATED'	=> 'Uporabnikov podpis uspešno posodobljen.',
	'USER_WARNING_LOG_DELETED'	=> 'Informacij ni na razpolago. Lahko so bili izbrisani dnevniki',
	'USER_TOOLS'	=> 'Osnovna orodja',
));

?>