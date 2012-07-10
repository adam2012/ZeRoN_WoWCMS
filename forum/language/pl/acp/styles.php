<?php
/**
*
* acp_styles [Polski]
*
* @package language
* @copyright (c) 2006 - 2011 phpBB3.PL Group
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Zestawy obrazków zawierają wszystkie przyciski, ikony i wszystkie inne niezależne od stylu obrazki używane przez forum.</p><p>Tutaj możesz edytować, eksportować i usuwać zainstalowane zestawy obrazków oraz importować i instalować nowe.',
	'ACP_STYLES_EXPLAIN'	=> 'Style składają się z szablonu, motywu i zestawu obrazków.</p><p>Tutaj możesz edytować, eksportować i usuwać zainstalowane style oraz importować i instalować nowe. Możesz też sprawdzać jak styl będzie wyglądał dzięki funkcji podglądu. Domyślny styl jest oznaczony gwiazdką (*). Wymieniona jest też łączna liczba użytkowników używających danego stylu (nie bierze to pod uwagę ewentualnego nadpisywania stylów użytkowników).',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Szablony zawierają cały kod HTML używany do wygenerowania layoutu forum.</p><p>Tutaj możesz edytować, eksportować i usuwać zainstalowane style oraz importować i instalować nowe. Możesz też zmienić fragmenty kodu używane do generowania BBCode’ów.',
	'ACP_THEMES_EXPLAIN'	=> 'Motywy to style CSS i obrazki przez nie wykorzystywane. Zależnie od szablonu mogą albo ustalać jakiego koloru jest forum, albo nawet gdzie i w jaki sposób są umieszczone dane elementy forum.</p><p>Tutaj możesz edytować, eksportować i usuwać zainstalowane motywy oraz importować i instalować nowe.',
	'ADD_IMAGESET'			=> 'Dodaj zestaw obrazków',
	'ADD_IMAGESET_EXPLAIN'	=> 'Tutaj możesz dodać zestaw obrazków. Zależnie od konfiguracji Twojego serwera i uprawnień plików, możesz mieć kilka dodatkowych możliwości, np. możesz mieć możliwość utworzenia tego zestawu obrazków bazując na już istniejącym albo możliwość wgrania lub zaimportowania (z katalogu store) archiwum z zestawem. Jeśli wgrasz lub zaimportujesz archiwum, możliwe będzie pobranie nazwy zestawu z nazwy archiwum (aby to osiągnąć, pozostaw puste pole na nazwę).',
	'ADD_STYLE'				=> 'Dodaj styl',
	'ADD_STYLE_EXPLAIN'		=> 'Tutaj możesz dodać styl. Zależnie od konfiguracji Twojego serwera i uprawnień plików, możesz mieć kilka dodatkowych możliwości, np. możesz mieć możliwość utworzenia tego stylu bazując na już istniejącym albo możliwość zaimportowania (z katalogu store) archiwum ze stylem. Jeśli wgrasz lub zaimportujesz styl, możliwe będzie pobranie nazwy zestawu z nazwy archiwum (aby to osiągnąć, pozostaw puste pole na nazwę).',
	'ADD_TEMPLATE'			=> 'Dodaj szablon',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Tutaj możesz dodać szablon. Zależnie od konfiguracji Twojego serwera i uprawnień plików, możesz mieć kilka dodatkowych możliwości, np. możesz mieć możliwość utworzenia tego szablonu bazując na już istniejącym albo możliwość wgrania lub zaimportowania (z katalogu store) archiwum z szablonem. Jeśli wgrasz lub zaimportujesz archiwum, możliwe będzie pobranie nazwy szablonu z nazwy archiwum (aby to osiągnąć, pozostaw puste pole na nazwę).',
	'ADD_THEME'				=> 'Dodaj motyw',
	'ADD_THEME_EXPLAIN'		=> 'Tutaj możesz dodać motyw. Zależnie od konfiguracji Twojego serwera i uprawnień plików, możesz mieć kilka dodatkowych możliwości, np. możesz mieć możliwość utworzenia tego motywu bazując na już istniejącym albo możliwość wgrania lub zaimportowania (z katalogu store) archiwum z motywem. Jeśli wgrasz lub zaimportujesz archiwum, możliwe będzie pobranie nazwy motywu z nazwy archiwum (aby to osiągnąć, pozostaw puste pole na nazwę).',
	'ARCHIVE_FORMAT'		=> 'Typ archiwum',
	'AUTOMATIC_EXPLAIN'		=> 'Pozostaw puste, aby spróbować wykryć automatycznie.',

	'BACKGROUND'			=> 'Tło',
	'BACKGROUND_COLOUR'		=> 'Kolor tła',
	'BACKGROUND_IMAGE'		=> 'Obraz tła',
	'BACKGROUND_REPEAT'		=> 'Powtarzanie tła',
	'BOLD'					=> 'Pogrubienie',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Zapisane w cache',
	'CACHE_FILENAME'				=> 'Plik szablonu',
	'CACHE_FILESIZE'				=> 'Rozmiar pliku',
	'CACHE_MODIFIED'				=> 'Zmodyfikowany',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Czy na pewno chcesz odświeżyć wszystkie dane zestawu obrazków? Ustawienia z pliku konfiguracyjnego zestawu obrazków nadpiszą wszystkie zmiany zestawu obrazków dokonane przez edytor zestawów obrazków.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Czy na pewno chcesz usunąć umieszczone w cache wersje plików Twojego szablonu?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Czy na pewno chcesz odświeżyć wszystkie dane szablonu zapisane w bazie danych za pomocą plików zapisanych w systemie plików? Spowoduje to nadpisanie wszystkich zmian wykonanych poprzez edytor szablonów (ponieważ zapisuje on dane w bazie danych).',
	'CONFIRM_THEME_REFRESH'			=> 'Czy na pewno chcesz odświeżyć wszystkie dane motywu zapisane w bazie danych za pomocą zawartości motywu w systemie plików? Spowoduje to nadpisanie wszystkich zmian wykonanych poprzez edytor motywów (ponieważ zapisuje on dane w bazie danych).',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Utwórz zestaw obrazków',
	'CREATE_STYLE'					=> 'Utwórz styl',
	'CREATE_TEMPLATE'				=> 'Utwórz szablon',
	'CREATE_THEME'					=> 'Utwórz motyw',
	'CURRENT_IMAGE'					=> 'Aktualny obrazek',

	'DEACTIVATE_DEFAULT'		=> 'Nie możesz wyłączyć domyślnego stylu.',
	'DELETE_FROM_FS'			=> 'Usuń z systemu plików',
	'DELETE_IMAGESET'			=> 'Usuń zestaw obrazków',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Tutaj możesz usunąć wybrany zestaw obrazków z bazy danych. <strong>UWAGA! Nie ma tutaj opcji „Cofnij”!</strong> Przed usunięciem zestawu obrazków zalecane jest wyeksportowanie go, aby móc go użyć w przyszłości',
	'DELETE_STYLE'				=> 'Usuń styl',
	'DELETE_STYLE_EXPLAIN'		=> 'Tutaj możesz usunąć wybrany styl. <strong>UWAGA! Nie ma tutaj opcji „Cofnij”!</strong>',
	'DELETE_TEMPLATE'			=> 'Usuń szablon',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Tutaj możesz usunąć wybrany szablon z bazy danych. <strong>UWAGA! Nie ma tutaj opcji „Cofnij”!</strong> Przed usunięciem szablonu zalecane jest wyeksportowanie go, aby móc go użyć w przyszłości',
	'DELETE_THEME'				=> 'Usuń motyw',
	'DELETE_THEME_EXPLAIN'		=> 'Tutaj możesz usunąć wybrany motyw z bazy danych. <strong>UWAGA! Nie ma tutaj opcji „Cofnij”!</strong> Przed usunięciem motywu zalecane jest wyeksportowanie go, aby móc go użyć w przyszłości',
	'DETAILS'					=> 'Szczegóły',
	'DIMENSIONS_EXPLAIN'		=> 'Wybranie opcji „Tak” spowoduje zapisanie wysokości i szerokości.',

	'EDIT_DETAILS_IMAGESET'				=> 'Zmień szczegóły zestawu obrazków',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Tutaj możesz zmienić pewne szczegóły zestawu obrazków, w tym jego nazwę.',
	'EDIT_DETAILS_STYLE'				=> 'Zmień szczegóły stylu',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Tutaj możesz zmienić istniejący styl, w tym kombinację szablonu, motywu i zestawu obrazków, z której się on składa. Możesz też ustawić ten styl jako domyślny.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Zmień szczegóły szablonu',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Tutaj możesz zmienić pewne szczegóły szablonu, w tym jego nazwę. Możesz też zmienić sposób jego zapisywania - z bazy danych na system plików i odwrotnie. Opcja ta zależy od konfiguracji PHP i tego, czy szablon jest zapisywalny przez serwer.',
	'EDIT_DETAILS_THEME'				=> 'Zmień szczegóły motywu',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Tutaj możesz zmienić pewne szczegóły motywu, w tym jego nazwę. Możesz też zmienić sposób jego zapisywania - z bazy danych na system plików i odwrotnie. Opcja ta zależy od konfiguracji PHP i tego, czy motyw jest zapisywalny przez serwer.',
	'EDIT_IMAGESET'						=> 'Zmień zestaw obrazków',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Tutaj możesz zmienić poszczególne obrazki tworzące zestaw obrazków. Jeśli chcesz, możesz też podać wymiary obrazka. Podanie ich może zapobiec błędom wyświetlania w niektórych przeglądarkach. Nie podając ich zmniejszasz o 2 bajty wielkość rekordu w bazie danych.',
	'EDIT_TEMPLATE'						=> 'Zmień szablon',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Tutaj możesz zmienić swój szablon. <strong>UWAGA! Nie ma tutaj opcji „Cofnij”!</strong> Jeśli PHP może zmieniać pliki w katalogu styles, wszystkie zmiany zostaną w nich zapisane. Jeśli PHP nie może ich zmieniać, zostaną skopiowane do bazy danych i wszystkie zmiany zostaną dokonane tylko w niej. Uważnie edytuj szablon, nie zapomnij zamknąć wszystkich zmiennych {XXXX} i bloków kontrolnych.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Zapisanie zmodyfikowanego pliku szablonu w systemie plików było niemożliwe, więc szablon jest teraz zapisywany w bazie danych.',
	'EDIT_THEME'						=> 'Zmień motyw',
	'EDIT_THEME_EXPLAIN'				=> 'Tutaj możesz zmienić wybrany motyw, jego kolory, obrazki itp.',
	'EDIT_THEME_STORED_DB'				=> 'Zapisanie zmodyfikowanego motywu w systemie plików było niemożliwe, więc motyw jest teraz zapisywany w bazie danych.',
	'EDIT_THEME_STORE_PARSED'			=> 'Ten motyw wymaga parsowania, przez co można go zapisywać tylko w bazie danych.',
	'EDITOR_DISABLED'					=> 'Edytor szablonów jest wyłączony.',
	'EXPORT'							=> 'Eksportuj',

	'FOREGROUND'			=> 'Pierwszy plan',
	'FONT_COLOUR'			=> 'Kolor tekstu',
	'FONT_FACE'				=> 'Krój czcionki',
	'FONT_FACE_EXPLAIN'		=> 'Możesz podać wiele czcionek oddzielonych przecinkami. Jeśli użytkownik nie ma na komputerze pierwszej z nich, zostanie użyta kolejna. Na końcu najlepiej dodaj „serif” (czcionka szeryfowa) lub „sans-serif” (czcionka bezszeryfowa) - dzięki temu nawet, jeśli na komputerze nie ma żadnej z wymienionych czcionek, strona i tak wyświetli się dość dobrze.',
	'FONT_SIZE'				=> 'Rozmiar czcionki',

	'GLOBAL_IMAGES'			=> 'Globalne',

	'HIDE_CSS'				=> 'Ukryj surowy CSS',

	'IMAGE_WIDTH'				=> 'Szerokość obrazka',
	'IMAGE_HEIGHT'				=> 'Wysokość obrazka',
	'IMAGE'						=> 'Obrazek',
	'IMAGE_NAME'				=> 'Nazwa obrazka',
	'IMAGE_PARAMETER'			=> 'Parametr',
	'IMAGE_VALUE'				=> 'Wartość',
	'IMAGESET_ADDED'			=> 'Dodano zestaw obrazków zapisywany w systemie plików.',
	'IMAGESET_ADDED_DB'			=> 'Dodano zestaw obrazków do bazy danych.',
	'IMAGESET_DELETED'			=> 'Zestaw obrazków został usunięty.',
	'IMAGESET_DELETED_FS'		=> 'Zestaw obrazków został usunięty z bazy danych, ale możliwe, że na dysku pozostały jego pliki.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Szczegóły zestawu obrazków zostały zmienione.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Wybierz metodę archiwizowania.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Copyright nie może mieć więcej niż 60 znaków.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Nazwa zestawu obrazków może zawierać tylko litery alfabetu łacińskiego, cyfry, -, +, _ oraz spację.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Zestaw obrazków o tej nazwie już istnieje.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Nazwa zestawu obrazków nie może mieć więcej niż 30 znaków.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Podane archiwum nie zawiera prawidłowego zestawu obrazków.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Musisz podać nazwę zestawu obrazków.',
	'IMAGESET_EXPORT'			=> 'Eksportuj zestaw obrazków',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Tutaj możesz wyeksportować zestaw obrazków w formie archiwum. Archiwum będzie zawierać wszystkie dane potrzebne do zainstalowania zestawu obrazków na innym forum. Możesz też wybrać, czy bezpośrednio pobrać plik, czy umieścić go w katalogu store, aby później pobrać poprzez protokół FTP.',
	'IMAGESET_EXPORTED'			=> 'Zestaw obrazków został wyeksportowany i zapisany w %s.',
	'IMAGESET_NAME'				=> 'Nazwa zestawu obrazków',
	'IMAGESET_REFRESHED'		=> 'Zestaw obrazków został odświeżony.',
	'IMAGESET_UPDATED'			=> 'Zestaw obrazków został zmieniony.',
	'ITALIC'					=> 'Pochyła',

	'IMG_CAT_BUTTONS'		=> 'Przetłumaczone przyciski',
	'IMG_CAT_CUSTOM'		=> 'Dodatkowe przyciski',
	'IMG_CAT_FOLDERS'		=> 'Ikony wątków',
	'IMG_CAT_FORUMS'		=> 'Ikony działów',
	'IMG_CAT_ICONS'			=> 'Inne ikony',
	'IMG_CAT_LOGOS'			=> 'Loga',
	'IMG_CAT_POLLS'			=> 'Wizualizacja wyników ankiet',
	'IMG_CAT_UI'			=> 'Inne elementy interfejsu',
	'IMG_CAT_USER'			=> 'Dodatkowe obrazki',

	'IMG_SITE_LOGO'			=> 'Główne logo',
	'IMG_UPLOAD_BAR'		=> 'Pasek postępu',
	'IMG_POLL_LEFT'			=> 'Lewy koniec',
	'IMG_POLL_CENTER'		=> 'Środek',
	'IMG_POLL_RIGHT'		=> 'Prawy koniec',
	'IMG_ICON_FRIEND'		=> 'Dodaj przyjaciela',
	'IMG_ICON_FOE'			=> 'Dodaj wroga',

	'IMG_FORUM_LINK'			=> 'Dział - link',
	'IMG_FORUM_READ'			=> 'Dział',
	'IMG_FORUM_READ_LOCKED'		=> 'Zablokowany dział',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Dział z poddziałami',
	'IMG_FORUM_UNREAD'			=> 'Nieprzeczytany dział',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Zablokowany, nieprzeczytany dział',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Nieprzeczytany dział z poddziałami',
	'IMG_SUBFORUM_READ'			=> 'Poddział (mała ikonka)',
	'IMG_SUBFORUM_UNREAD'		=> 'Nieprzeczytany poddział (mała ikonka)',

	'IMG_TOPIC_MOVED'			=> 'Przeniesiony wątek',

	'IMG_TOPIC_READ'				=> 'Wątek',
	'IMG_TOPIC_READ_MINE'			=> 'Oznaczony wątek',
	'IMG_TOPIC_READ_HOT'			=> 'Popularny wątek',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Oznaczony, popularny wątek',
	'IMG_TOPIC_READ_LOCKED'			=> 'Zablokowany wątek',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Oznaczony, zablokowany wątek',

	'IMG_TOPIC_UNREAD'				=> 'Nieprzeczytany wątek',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Oznaczony, nieprzeczytany wątek',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Popularny, nieprzeczytany wątek',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Oznaczony, popularny, nieprzeczytany wątek',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Zablokowany, nieprzeczytany wątek',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Oznaczony, zablokowany, nieprzeczytany wątek',

	'IMG_STICKY_READ'				=> 'Przyklejony wątek',
	'IMG_STICKY_READ_MINE'			=> 'Oznaczony, przyklejony wątek',
	'IMG_STICKY_READ_LOCKED'		=> 'Zablokowany, przyklejony wątek',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Oznaczony, zablokowany, przyklejony wątek',
	'IMG_STICKY_UNREAD'				=> 'Nieprzeczytany, przyklejony wątek',
	'IMG_STICKY_UNREAD_MINE'		=> 'Oznaczony, nieprzeczytany, przyklejony wątek',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Zablokowany, nieprzeczytany, przyklejony wątek',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Oznaczony, zablokowany, nieprzeczytany, przyklejony wątek',

	'IMG_ANNOUNCE_READ'					=> 'Ogłoszenie',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Oznaczone ogłoszenie',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Zablokowane ogłoszenie',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Oznaczone, zablokowane ogłoszenie',
	'IMG_ANNOUNCE_UNREAD'				=> 'Nieprzeczytane ogłoszenie',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Oznaczone nieprzeczytane ogłoszenie',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Zablokowane, nieprzeczytane ogłoszenie',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Oznaczone, zablokowane, nieprzeczytane ogłoszenie',

	'IMG_GLOBAL_READ'					=> 'Ogłoszenie globalne',
	'IMG_GLOBAL_READ_MINE'				=> 'Oznaczone, ogłoszenie globalne',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Zablokowane, ogłoszenie globalne',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Oznaczone, zablokowane, ogłoszenie globalne',
	'IMG_GLOBAL_UNREAD'					=> 'Nieprzeczytane ogłoszenie globalne',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Oznaczone, nieprzeczytane ogłoszenie globalne',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Zablokowane, nieprzeczytane ogłoszenie globalne',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Oznaczone, zablokowane, nieprzeczytane ogłoszenie globalne',

	'IMG_PM_READ'		=> 'Prywatna wiadomość',
	'IMG_PM_UNREAD'		=> 'Nieprzeczytana prywatna wiadomość',

	'IMG_ICON_BACK_TOP'		=> 'Do góry',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Wyślij e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Wyślij wiadomość',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Strona WWW',

	'IMG_ICON_POST_DELETE'			=> 'Usuń post',
	'IMG_ICON_POST_EDIT'			=> 'Zmień post',
	'IMG_ICON_POST_INFO'			=> 'Wyświetl szczegóły postu',
	'IMG_ICON_POST_QUOTE'			=> 'Zacytuj post',
	'IMG_ICON_POST_REPORT'			=> 'Zgłoś post',
	'IMG_ICON_POST_TARGET'			=> 'Post (mała ikonka)',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nieprzeczytany post (mała ikonka)',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Załącznik',
	'IMG_ICON_TOPIC_LATEST'			=> 'Ostatni post',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Ostatni nieprzeczytany post',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Zgłoszony post',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Niezaakceptowany post',

	'IMG_ICON_USER_ONLINE'		=> 'Użytkownik online',
	'IMG_ICON_USER_OFFLINE'		=> 'Użytkownik offline',
	'IMG_ICON_USER_PROFILE'		=> 'Wyświetl profil',
	'IMG_ICON_USER_SEARCH'		=> 'Znajdź posty',
	'IMG_ICON_USER_WARN'		=> 'Ostrzeż użytkownika',

	'IMG_BUTTON_PM_FORWARD'		=> 'Prześlij dalej prywatną wiadomość',
	'IMG_BUTTON_PM_NEW'			=> 'Napisz prywatną wiadomość',
	'IMG_BUTTON_PM_REPLY'		=> 'Odpowiedz na prywatną wiadomość',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Zablokowany wątek',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Napisz wątek',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Odpowiedz w wątku',

	'IMG_USER_ICON1'		=> 'Dodatkowy obrazek nr. 1',
	'IMG_USER_ICON2'		=> 'Dodatkowy obrazek nr. 2',
	'IMG_USER_ICON3'		=> 'Dodatkowy obrazek nr. 3',
	'IMG_USER_ICON4'		=> 'Dodatkowy obrazek nr. 4',
	'IMG_USER_ICON5'		=> 'Dodatkowy obrazek nr. 5',
	'IMG_USER_ICON6'		=> 'Dodatkowy obrazek nr. 6',
	'IMG_USER_ICON7'		=> 'Dodatkowy obrazek nr. 7',
	'IMG_USER_ICON8'		=> 'Dodatkowy obrazek nr. 8',
	'IMG_USER_ICON9'		=> 'Dodatkowy obrazek nr. 9',
	'IMG_USER_ICON10'		=> 'Dodatkowy obrazek nr. 10',

	'INCLUDE_DIMENSIONS'		=> 'Zapisz wymiary',
	'INCLUDE_IMAGESET'			=> 'Dołącz zestaw obrazków',
	'INCLUDE_TEMPLATE'			=> 'Dołącz szablon',
	'INCLUDE_THEME'				=> 'Dołącz motyw',
	'INHERITING_FROM'			=> 'Dziedziczy z',
	'INSTALL_IMAGESET'			=> 'Zainstaluj zestaw obrazków',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Tutaj możesz zainstalować nowy zestaw obrazków.',
	'INSTALL_STYLE'				=> 'Zainstaluj styl',
	'INSTALL_STYLE_EXPLAIN'		=> 'Tutaj możesz zainstalować nowy styl i odpowiednie dla niego elementy stylu. Jeśli są one już zainstalowane, nie zostaną nadpisane. Niektóre style wymagają, żeby inne elementy stylów były już zainstalowane. W takim przypadku, jeśli potrzebne elementy stylów nie zostaną znalezione, zostaniesz o tym powiadomiony.',
	'INSTALL_TEMPLATE'			=> 'Zainstaluj szablon',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Tutaj możesz zainstalować nowy szablon.',
	'INSTALL_THEME'				=> 'Zainstaluj motyw',
	'INSTALL_THEME_EXPLAIN'		=> 'Tutaj możesz zainstalować nowy styl.',
	'INSTALLED_IMAGESET'		=> 'Zainstalowane zestawy obrazków',
	'INSTALLED_STYLE'			=> 'Zainstalowane style',
	'INSTALLED_TEMPLATE'		=> 'Zainstalowane szablony',
	'INSTALLED_THEME'			=> 'Zainstalowane motywy',

	'KEEP_IMAGESET'				=> 'Zachowaj zestaw obrazków „%s”',
	'KEEP_TEMPLATE'				=> 'Zachowaj szablon „%s”',
	'KEEP_THEME'				=> 'Zachowaj motyw „%s”',

	'LINE_SPACING'				=> 'Odstęp między liniami',
	'LOCALISED_IMAGES'			=> 'Przetłumaczone',
	'LOCATION_DISABLED_EXPLAIN'	=> 'To ustawienie jest dziedziczone i nie może zostać zmienione.',

	'NO_CLASS'					=> 'Nie można znaleźć klasy w stylu CSS.',
	'NO_IMAGESET'				=> 'Nie można znaleźć zestawu obrazków w systemie plików.',
	'NO_IMAGE'					=> 'Brak obrazka',
	'NO_IMAGE_ERROR'			=> 'Nie można znaleźć obrazka w systemie plików.',
	'NO_STYLE'					=> 'Nie można znaleźć stylu w systemie plików.',
	'NO_TEMPLATE'				=> 'Nie można znaleźć szablonu w systemie plików.',
	'NO_THEME'					=> 'Nie można znaleźć motywu w systemie plików.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Nie znaleziono niezainstalowanych zestawów obrazków.',
	'NO_UNINSTALLED_STYLE'		=> 'Nie znaleziono niezainstalowanych stylów.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nie znaleziono niezainstalowanych szablonów.',
	'NO_UNINSTALLED_THEME'		=> 'Nie znaleziono niezainstalowanych motywów.',
	'NO_UNIT'					=> 'Brak',

	'ONLY_IMAGESET'			=> 'Jest to ostatni pozostały zestaw obrazków, nie możesz go usunąć.',
	'ONLY_STYLE'			=> 'Jest to ostatni pozostały styl, nie możesz go usunąć.',
	'ONLY_TEMPLATE'			=> 'Jest to ostatni pozostały szablon, nie możesz go usunąć.',
	'ONLY_THEME'			=> 'Jest to ostatni pozostały motyw, nie możesz go usunąć.',
	'OPTIONAL_BASIS'		=> 'Baza (opcjonalnie)',

	'REFRESH'					=> 'Odśwież',
	'REPEAT_NO'					=> 'Nie powtarzaj',
	'REPEAT_X'					=> 'Tylko poziomo',
	'REPEAT_Y'					=> 'Tylko pionowo',
	'REPEAT_ALL'				=> 'Oba kierunki',
	'REPLACE_IMAGESET'			=> 'Zamień zestaw obrazków na',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Wybrany tutaj zestaw obrazków zastąpi ten, który usuwasz, we wszystkich używających go stylach.',
	'REPLACE_STYLE'				=> 'Zamień styl na',
	'REPLACE_STYLE_EXPLAIN'		=> 'Wybrany tutaj styl zastąpi ten, który usuwasz, u wszystkich używających go użytkowników.',
	'REPLACE_TEMPLATE'			=> 'Zamień szablon na',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Wybrany tutaj szablon zastąpi ten, który usuwasz, we wszystkich używających go stylach.',
	'REPLACE_THEME'				=> 'Zamień motyw na',
	'REPLACE_THEME_EXPLAIN'		=> 'Wybrany tutaj motyw zastąpi ten, który usuwasz, we wszystkich używających go stylach.',
	'REPLACE_WITH_OPTION'		=> 'Zamień na „%s”',
	'REQUIRES_IMAGESET'			=> 'Ten styl wymaga, aby zestaw obrazków „%s” był zainstalowany.',
	'REQUIRES_TEMPLATE'			=> 'Ten styl wymaga, aby szablon „%s” był zainstalowany.',
	'REQUIRES_THEME'			=> 'Ten styl wymaga, aby motyw „%s” był zainstalowany.',

	'SELECT_IMAGE'				=> 'Wybierz obrazek',
	'SELECT_TEMPLATE'			=> 'Wybierz plik szablonu',
	'SELECT_THEME'				=> 'Wybierz plik motywu',
	'SELECTED_IMAGE'			=> 'Wybrany obrazek',
	'SELECTED_IMAGESET'			=> 'Wybrany zestaw obrazków',
	'SELECTED_TEMPLATE'			=> 'Wybrany szablon',
	'SELECTED_TEMPLATE_FILE'	=> 'Wybrany plik szablonu',
	'SELECTED_THEME'			=> 'Wybrany motyw',
	'SELECTED_THEME_FILE'		=> 'Wybrany plik motywu',
	'STORE_DATABASE'			=> 'Baza danych',
	'STORE_FILESYSTEM'			=> 'System plików',
	'STYLE_ACTIVATE'			=> 'Aktywuj',
	'STYLE_ACTIVE'				=> 'Aktywny',
	'STYLE_ADDED'				=> 'Styl został dodany.',
	'STYLE_DEACTIVATE'			=> 'Deaktywuj',
	'STYLE_DEFAULT'				=> 'Ustaw jako domyślny',
	'STYLE_DELETED'				=> 'Styl został usunięty.',
	'STYLE_DETAILS_UPDATED'		=> 'Styl został zmieniony.',
	'STYLE_ERR_ARCHIVE'			=> 'Wybierz metodę archiwizowania.',
	'STYLE_ERR_COPY_LONG'		=> 'Copyright nie może mieć więcej niż 60 znaków.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Musisz wybrać co najmniej jeden element stylu.',
	'STYLE_ERR_NAME_CHARS'		=> 'Nazwa stylu może zawierać tylko litery alfabetu łacińskiego, cyfry, -, +, _ oraz spację.',
	'STYLE_ERR_NAME_EXIST'		=> 'Styl o tej nazwie już istnieje.',
	'STYLE_ERR_NAME_LONG'		=> 'Nazwa stylu nie może mieć więcej niż 30 znaków.',
	'STYLE_ERR_NO_IDS'			=> 'Musisz wybrać szablon, motyw i zestaw obrazków dla tego stylu.',
	'STYLE_ERR_NOT_STYLE'		=> 'Podane archiwum nie zawiera prawidłowego stylu.',
	'STYLE_ERR_STYLE_NAME'		=> 'Musisz podać nazwę stylu.',
	'STYLE_EXPORT'				=> 'Eksportuj styl',
	'STYLE_EXPORT_EXPLAIN'		=> 'Tutaj możesz wyeksportować styl w formie archiwum. Styl nie musi zawierać wszystkich składników, ale przynajmniej jeden - tak. Na przykład, jeśli utworzyłeś nowy motyw i zestaw obrazków dla często używanego szablonu, możesz po prostu wyeksportować ten motyw i zestaw obrazków, pomijając szablon. Możesz też wybrać, czy bezpośrednio pobrać plik, czy umieścić go w katalogu store, aby później pobrać poprzez protokół FTP.',
	'STYLE_EXPORTED'			=> 'Styl został wyeksportowany i zapisany w %s.',
	'STYLE_IMAGESET'			=> 'Zestaw obrazków',
	'STYLE_NAME'				=> 'Nazwa stylu',
	'STYLE_TEMPLATE'			=> 'Szablon',
	'STYLE_THEME'				=> 'Motyw',
	'STYLE_USED_BY'				=> 'Używany przez (włącznie z robotami)',

	'TEMPLATE_ADDED'			=> 'Dodano szablon zapisywany w systemie plików.',
	'TEMPLATE_ADDED_DB'			=> 'Dodano szablon do bazy danych.',
	'TEMPLATE_CACHE'			=> 'Cache szablonu',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Standardowo phpBB zapisuje w cache skompilowane wersje szablonów. Powoduje to zmniejszenie obciążenia serwera przy każdym zobaczeniu strony i skraca czas generowania strony. Tutaj możesz sprawdzić status cache’owania każdego pliku i usunąć cache poszczególnych lub wszystkich plików.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache szablonu zostało usunięte.',
	'TEMPLATE_CACHE_EMPTY'		=> 'W cache nie ma żadnych zapisanych plików.',
	'TEMPLATE_DELETED'			=> 'Szablon został usunięty.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Szablon nie mógł zostać usunięty, ponieważ przynajmniej jeden szablon dziedziczy z niego:',
	'TEMPLATE_DELETED_FS'		=> 'Szablon został usunięty z bazy danych, ale możliwe, że na dysku pozostały jego pliki.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Szczegóły szablonu zostały zmienione.',
	'TEMPLATE_EDITOR'			=> 'Edytor szablonu',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Wysokość edytora',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Wybierz metodę archiwizowania.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Katalog służący do przechowywania zapisanych w cache wersji plików szablonu nie mógł zostać otwarty.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Copyright nie może mieć więcej niż 60 znaków.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Nazwa szablonu może zawierać tylko litery alfabetu łacińskiego, cyfry, -, +, _ oraz spację.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Szablon o tej nazwie już istnieje.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Nazwa szablonu nie może mieć więcej niż 30 znaków.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Podane archiwum nie zawiera prawidłowego szablonu.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Nowy szablon wymaga zainstalowania szablonu %s, nie dziedziczącego z innych szablonów.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Musisz podać nazwę szablonu.',
	'TEMPLATE_EXPORT'			=> 'Eksportuj szablony',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Tutaj możesz wyeksportować szablon w formie archiwum. Archiwum będzie zawierać wszystkie dane potrzebne do zainstalowania szablonu na innym forum. Możesz też wybrać, czy bezpośrednio pobrać plik, czy umieścić go w katalogu store, aby później pobrać poprzez protokół FTP.',
	'TEMPLATE_EXPORTED'			=> 'Szablon został wyeksportowany i zapisany w %s.',
	'TEMPLATE_FILE'				=> 'Plik szablonu',
	'TEMPLATE_FILE_UPDATED'		=> 'Plik szablonu został zmieniony.',
	'TEMPLATE_INHERITS'			=> 'Ten szablon dziedziczy z %s i w związku z tym nie może być umieszczony w innym miejscu niż szablon z którego dziedziczy.',
	'TEMPLATE_LOCATION'			=> 'Zapisz szablon w',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Obrazki są zawsze zapisywane w systemie plików.',
	'TEMPLATE_NAME'				=> 'Nazwa szablonu',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Nie można zapisać pliku %s. Sprawdź uprawnienia katalogu oraz plików.',
	'TEMPLATE_REFRESHED'		=> 'Szablon został odświeżony.',

	'THEME_ADDED'				=> 'Dodano motyw zapisywany w systemie plików.',
	'THEME_ADDED_DB'			=> 'Dodano motyw do bazy danych.',
	'THEME_CLASS_ADDED'			=> 'Dodano nową klasę.',
	'THEME_DELETED'				=> 'Motyw został usunięty.',
	'THEME_DELETED_FS'			=> 'Motyw został usunięty z bazy danych, ale możliwe, że na dysku pozostały jego pliki.',
	'THEME_DETAILS_UPDATED'		=> 'Szczegóły motywu zostały zmienione.',
	'THEME_EDITOR'				=> 'Edytor motywu',
	'THEME_EDITOR_HEIGHT'		=> 'Wysokość edytora',
	'THEME_ERR_ARCHIVE'			=> 'Wybierz metodę archiwizowania.',
	'THEME_ERR_CLASS_CHARS'		=> 'Nazwa klasy może zawierać tylko litery alfabetu łacińskiego, cyfry, ., :, -, _ oraz #.',
	'THEME_ERR_COPY_LONG'		=> 'Copyright nie może mieć więcej 60 znaków.',
	'THEME_ERR_NAME_CHARS'		=> 'Nazwa motywu może zawierać tylko litery alfabetu łacińskiego, cyfry, -, +, _ oraz spację.',
	'THEME_ERR_NAME_EXIST'		=> 'Motyw o tej nazwie już istnieje.',
	'THEME_ERR_NAME_LONG'		=> 'Nazwa motywu nie może mieć więcej niż 30 znaków.',
	'THEME_ERR_NOT_THEME'		=> 'Podane archiwum nie zawiera prawidłowego motywu.',
	'THEME_ERR_REFRESH_FS'		=> 'Ten motyw jest zapisywany w systemie plików, więc nie ma potrzeby go odświeżać.',
	'THEME_ERR_STYLE_NAME'		=> 'Musisz podać nazwę motywu.',
	'THEME_FILE'				=> 'Plik motywu',
	'THEME_EXPORT'				=> 'Eksportuj motywy',
	'THEME_EXPORT_EXPLAIN'		=> 'Tutaj możesz wyeksportować motyw w formie archiwum. Archiwum będzie zawierać wszystkie dane potrzebne do zainstalowania motywu na innym forum. Możesz też wybrać, czy bezpośrednio pobrać plik, czy umieścić go w katalogu store, aby później pobrać poprzez protokół FTP.',
	'THEME_EXPORTED'			=> 'Motyw został wyeksportowany i zapisany w %s.',
	'THEME_LOCATION'			=> 'Zapisz motyw w',
	'THEME_LOCATION_EXPLAIN'	=> 'Obrazki są zawsze zapisywane w systemie plików.',
	'THEME_NAME'				=> 'Nazwa motywu',
	'THEME_REFRESHED'			=> 'Motyw został odświeżony.',
	'THEME_UPDATED'				=> 'Motyw został zmieniony.',

	'UNDERLINE'				=> 'Podkreślenie',
	'UNINSTALLED_IMAGESET'	=> 'Niezainstalowane zestawy obrazków',
	'UNINSTALLED_STYLE'		=> 'Niezainstalowane style',
	'UNINSTALLED_TEMPLATE'	=> 'Niezainstalowane szablony',
	'UNINSTALLED_THEME'		=> 'Niezainstalowane motywy',
	'UNSET'					=> 'Niezdefiniowany',

));

?>