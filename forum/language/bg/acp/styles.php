<?php
/**
*
* acp_styles [Bulgarian]
*
* @package language
* @version $Id: styles.php 9046 2008-11-02 16:19:11Z nacholibre $
* @copyright (c) 2005 phpBB Group
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'В imageset-овете се съдържа информация за размера на всеки графичен файл. От тук можете да променяте, експортирате или изтривате съществуващи imagesets или да импортирате/активирате нови.',
	'ACP_STYLES_EXPLAIN'	=> 'Управлението на стиловете става от тук. Стила се състои от шаблон, тема и imageset. Можете да променяте съществуващите стилове, изтривате, деактивирате, активирате, създавате или импортвате. Чрез функцията за преглед, можете да прегледате стила преди да го приложите на форума. Стила по подразбиране е маркиран с (*). На всеки стил е изведена информация колко хора го използват.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Тук можете да променяте, изтривате, експортирате, импортирате и да преглеждате шаблони.',
	'ACP_THEMES_EXPLAIN'	=> 'От тук можете да създавате, инсталирате, променяте, изтривате или експортирате теми. Темата е комбинация от цветове и изображение свързани в едно. Препоръчително е когато създавате нова тема да използвате съществуваща като базова.',
	'ADD_IMAGESET'			=> 'Създай imageset',
	'ADD_IMAGESET_EXPLAIN'	=> 'Тук можете да създавате imagesets. В зависимост от сървъра и правата на файловете ще бъдат показвани различни опции. За пример можете да създадете imageset базиран на съществуващ. Също така можете да качвате или импортирате imagesets.',
	'ADD_STYLE'				=> 'Създай стила',
	'ADD_STYLE_EXPLAIN'		=> 'От тук можете да създавате нови стилове. В зависимост от сървъра и правата на файловете ще бъдат показвани различни опции. За пример вие можете да създадете стил базиран на вече съществуващ. Също така можете да качвате или импортирате стилове.',
	'ADD_TEMPLATE'			=> 'Създай шаблона',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Тук можете да добавяте нови шаблони. В зависимост от сървъра и правата на файловете ще бъдат показвани различни опции. За пример можете да създадете шаблон базиран на съществуващ. Също така можете да качвате или импортирате шаблони.',
	'ADD_THEME'				=> 'Създай темата',
	'ADD_THEME_EXPLAIN'		=> 'От тук можете да добавяте нова тема. В зависимост от сървъра и правата на файловете ще бъдат показвани различни опции. За пример можете да създадете тема базирана на вече съществуваща. Също така можете да качвате или импортирате теми.',
	'ARCHIVE_FORMAT'		=> 'Тип на архива',
	'AUTOMATIC_EXPLAIN'      => 'Остави празно ако искаш да се изпълнява автоматично.',

	'BACKGROUND'			=> 'Фон',
	'BACKGROUND_COLOUR'		=> 'Цвят на фона',
	'BACKGROUND_IMAGE'		=> 'Фон изображение',
	'BACKGROUND_REPEAT'		=> 'Повторение на фон',
	'BOLD'					=> 'Удебелено',

	'CACHE'							=> 'Кеш',
	'CACHE_CACHED'					=> 'Кеширано',
	'CACHE_FILENAME'				=> 'Шаблон файл',
	'CACHE_FILESIZE'				=> 'Размер на файла',
	'CACHE_MODIFIED'				=> 'Модифициран',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Сигурен ли си, че искаш да обновиш цялата информация? Настройките от предишния imageset ще бъдат заместени.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Сигурен ли си, че искаш да изтриеш кешираните версии на файловете на шаблона?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Сигурен ли си, че искаш да замениш цялата информация за шаблона в базата данни с файловете във файловата система? Всички стари модификации ще бъдат заместени.',
	'CONFIRM_THEME_REFRESH'			=> 'Сигурен ли си, че искаш да замениш цялата информация за темата в базата данни с файловете във файловата система? Старите модификации ще бъдат изгубени.',
	'COPYRIGHT'						=> 'Авторско право',
	'CREATE_IMAGESET'				=> 'Създай нов imageset',
	'CREATE_STYLE'					=> 'Създай нов стил',
	'CREATE_TEMPLATE'				=> 'Създай нов шаблон',
	'CREATE_THEME'					=> 'Създай нова тема',
	'CURRENT_IMAGE'					=> 'Сегашно изображение',

	'DEACTIVATE_DEFAULT'		=> 'Не можеш да деактивираш стила.',
	'DELETE_FROM_FS'			=> 'Изтрий от системата',
	'DELETE_IMAGESET'			=> 'Изтрий imageset',
	'DELETE_IMAGESET_EXPLAIN'	=> 'От тук можете да изтривате избраните imageset-ове от базата данни. Ако имате нужните права можете дори да триете от файловата система. Изтритите неща не могат да бъдат връщани.',
	'DELETE_STYLE'				=> 'Изтрий стила',
	'DELETE_STYLE_EXPLAIN'		=> 'От тук можете да изтривате избраните стилове. Не може да изтриеш всички елементи на стила от тук. Трябва да бъдат индивидуално изтрити. Изтритите файлове не могат да бъдат връщани.',
	'DELETE_TEMPLATE'			=> 'Изтрий шаблона',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Тук можете да изтриете избрания шаблон от базата данни. Ако имате нужните права можете да триете директно от файловата система. Изтритите файлове не могат да бъдат връщани.',
	'DELETE_THEME'				=> 'Изтрий темата',
	'DELETE_THEME_EXPLAIN'		=> 'Тук можете да триете избраните теми от базата данни. Ако имате нужните права можете да триете директно от файловата система. Веднъж изтрити, файловете не могат да бъдат върнати.',
	'DETAILS'					=> 'Детайли',
	'DIMENSIONS_EXPLAIN'		=> 'Ако избереш ще бъдат включени параметрите за ширина/височина.',

	
	'EDIT_DETAILS_IMAGESET'				=> 'Промени детайлите на imageset-а',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Тук можете да променяте различни настройки на imageset-овете.',
	'EDIT_DETAILS_STYLE'				=> 'Промяна на стил',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Като използвате формата долу Вие можете да модифицирате съществуващ стил. Можете да променяте комбинацията от шаблон, тема и imageset. Също така можете да направите избрания стил по подразбиране.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Промяна на детайлите на шаблона',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Тук можете да променяте различни настройки на шаблоните. ',
	'EDIT_DETAILS_THEME'				=> 'Промяна на детайлите на темата',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Тук можете да променяте различни настройки на темите.',
	'EDIT_IMAGESET'						=> 'Промяна на imageset',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Тук можете да променяте индивидуалните изображения в imageset-a. За всяко изображение можете да зададете произволни размери. Бъдете внимателни с промяната на размерите.',
	'EDIT_TEMPLATE'						=> 'Промяна на шаблона',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Тук можеш да променяш шаблона директно. При направена промяна няма връщане назад. Ако PHP може да пише в/у файловете на шаблона всяка направена настройка ще бъде директно прилагана. Ако PHP не може да пише в/у файловете те ще бъдат копирани в базата данни. Внимавайте когато променяте шаблона си.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Файловете на шаблона са недостъпни за писане. Шаблона е записан в базата данни.',
	'EDIT_THEME'						=> 'Промяна на темата',
	'EDIT_THEME_EXPLAIN'				=> 'Тук можеш да промениш избраната тема, сменяне на цветове, изображения и други. Можеш да превключваш от лек интерфейс на интерфейс за напреднали, който е с повече опции.',
	'EDIT_THEME_STORED_DB'				=> 'Нямам нужните права за писане в/у файла. Файла е записан в базата данни.',
	'EDIT_THEME_STORE_PARSED'         => 'Въпросната тема изисква парсиран stylesheet. Това може да стане, ако е запаметена в базата данни.',
	'EDITOR_DISABLED'					=> 'Едитора на темплейти е изключен.',
	'EXPORT'							=> 'Експортирай',

	'FOREGROUND'			=> 'Преден план',
	'FONT_COLOUR'			=> 'Цвят на шрифта',
	'FONT_FACE'				=> 'Лице на шрифта',
	'FONT_FACE_EXPLAIN'		=> 'Можеш да избереш различни шрифтове разделени със запетая. Ако потребителя няма инсталиран първия шрифт друг работещ ще бъде избран.',
	'FONT_SIZE'				=> 'Размер на шрифта',

	'GLOBAL_IMAGES'			=> 'Глобално',

	'HIDE_CSS'				=> 'Скрий суровия CSS',

	'IMAGE_WIDTH'				=> 'Ширина',
	'IMAGE_HEIGHT'				=> 'Височина',
	'IMAGE'						=> 'Изображение',
	'IMAGE_NAME'				=> 'Име',
	'IMAGE_PARAMETER'			=> 'Параметър',
	'IMAGE_VALUE'				=> 'Стойност',
	'IMAGESET_ADDED'			=> 'Imageset-a е добавен във файловата система.',
	'IMAGESET_ADDED_DB'			=> 'Imageset-a е добавен в базата данни.',
	'IMAGESET_DELETED'			=> 'Imageset-а е успешно изтрит.',
	'IMAGESET_DELETED_FS'		=> 'Imageset-а е изтрит от базата данни, но някой файлове може да са останали.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Детайлите на imageset-а са успешно променени.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Изберете архивиращ метод.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Авторското право не може да бъде по-дълго от 60 знака.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Името на imageset-а може да съдържа само alphanumeric знаци, -, +, _ и пространство.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Вече има imageset с такова име.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Името на imageset-a не може да бъде по-дълго от 30 знака.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Архива не съдържа валиден imageset.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Трябва да въведеш име на imageset-а.',
	'IMAGESET_EXPORT'			=> 'Експорт imageset',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Тук можете да експортирате imageset. Архива ще съдържа всичката нужна информация за инсталация на изображенията на друг форум. Можете да свалите файловете на компютъра и да ги качите ръчно.',
	'IMAGESET_EXPORTED'			=> 'Imageset-a е успешно експортиран и записан в %s.',
	'IMAGESET_NAME'				=> 'Име на imageset-a',
	'IMAGESET_REFRESHED'		=> 'Imageset-a е успешно обновен.',
	'IMAGESET_UPDATED'			=> 'Imageset-а е успешно обновен.',
	'ITALIC'					=> 'Наклонен текст',

	'IMG_CAT_BUTTONS'		=> 'Бутони',
	'IMG_CAT_CUSTOM'		=> 'Изображения по избор',
	'IMG_CAT_FOLDERS'		=> 'Икони на тема',
	'IMG_CAT_FORUMS'		=> 'Икони на форум',
	'IMG_CAT_ICONS'			=> 'Главни икони',
	'IMG_CAT_LOGOS'			=> 'Логота',
	'IMG_CAT_POLLS'			=> 'Икони гласуване',
	'IMG_CAT_UI'			=> 'Главни елементи от интерфейса на потребителите',
	'IMG_CAT_USER'			=> 'Допълнителни изображения',

	'IMG_SITE_LOGO'			=> 'Главно лого',
	'IMG_UPLOAD_BAR'		=> 'Качване',
	'IMG_POLL_LEFT'			=> 'Анкета в ляво и',
	'IMG_POLL_CENTER'		=> 'Анкета център',
	'IMG_POLL_RIGHT'		=> 'Анкета в дясно и',
	'IMG_ICON_FRIEND'		=> 'Добави като приятел',
	'IMG_ICON_FOE'			=> 'Добави като враг',

	'IMG_FORUM_LINK'			=> 'Форум връзка',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Заключен форум',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Подфорум',
	'IMG_FORUM_UNREAD'			=> 'Форум непрочетени мнения',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Форум непрочетени мнения заключен',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Под форум непрочетени мнения',
	'IMG_SUBFORUM_READ'			=> 'Легенда подфоруми',
	'IMG_SUBFORUM_UNREAD'		=> 'Непрочетени мнения в подфорумите',
	
	'IMG_TOPIC_MOVED'			=> 'Преместена тема',

	'IMG_TOPIC_READ'				=> 'Тема',
	'IMG_TOPIC_READ_MINE'			=> 'Тема (моя)',
	'IMG_TOPIC_READ_HOT'			=> 'Популярна тема',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Популярна тема (моя)',
	'IMG_TOPIC_READ_LOCKED'			=> 'Заключена тема',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Заключена тема (моя)',

	'IMG_TOPIC_UNREAD'				=> 'Тема непрочетени мнения',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Моя тема непрочетени мнения',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Популярна тема непрочетени мнения',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Моя популярна тема непрочетени мнения',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Заключена тема непрочетени',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Моя заключена тема непрочетени',

	'IMG_STICKY_READ'				=> 'Закачена тема',
	'IMG_STICKY_READ_MINE'			=> 'Закачена тема (моя)',
	'IMG_STICKY_READ_LOCKED'		=> 'Заключена Закачена тема',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Заключена Закачена тема (моя)',
	'IMG_STICKY_UNREAD'				=> 'Закачена тема непрочетени мнения',
	'IMG_STICKY_UNREAD_MINE'		=> 'Моя закачена тема непрочетени мнения',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Заключена Закачена тема непрочетени мнения',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Моя Заключена Закачена тема непрочетени мнения',

	'IMG_ANNOUNCE_READ'					=> 'Важна тема',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Моя Важна тема',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Важна тема Заключена',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Моя Важна тема Заключена',
	'IMG_ANNOUNCE_UNREAD'				=> 'Важна тема непрочетени мнения',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Моя Важна тема непрочетени мнения',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Заключена Важна тема непрочетени мнения',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Моя Заключена Важна тема непрочетени мнения',

	'IMG_GLOBAL_READ'					=> 'Съобщение',
	'IMG_GLOBAL_READ_MINE'				=> 'Мое Съобщение',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Заключено Съобщение',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Мое Заключено Съобщение',
	'IMG_GLOBAL_UNREAD'					=> 'Съобщение непрочетени мнения',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Мое Съобщение непрочетени мнения',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Заключено Съобщение непрочетени мнения',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Мое Заключено Съобщение непрочетени мнения',

	'IMG_PM_READ'		=> 'Прочетени лични съобщения',
	'IMG_PM_UNREAD'		=> 'Непрочетени лични съобщения',
	
    'IMG_ICON_BACK_TOP'		=> 'Нагоре',
	
	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Изпрати email',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Изпрати съобщение',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Уеб-сайт',

	'IMG_ICON_POST_DELETE'			=> 'Изтрий мнението',
	'IMG_ICON_POST_EDIT'			=> 'Промени мнението',
	'IMG_ICON_POST_INFO'			=> 'Покажи детайлите на мнението',
	'IMG_ICON_POST_QUOTE'			=> 'Цитирай',
	'IMG_ICON_POST_REPORT'			=> 'Сигнализирай',
	'IMG_ICON_POST_TARGET'			=> 'Мини мнение',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Ново мини мнение',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Прикачени файлове',
	'IMG_ICON_TOPIC_LATEST'			=> 'Последно мнение',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Последното непрочетено мнение',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Сигнализирани мнения',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Неодобрение мнения',

	'IMG_ICON_USER_ONLINE'		=> 'Потребител online',
	'IMG_ICON_USER_OFFLINE'		=> 'Потребител offline',
	'IMG_ICON_USER_PROFILE'		=> 'Покажи профил',
	'IMG_ICON_USER_SEARCH'		=> 'Търси мнения',
	'IMG_ICON_USER_WARN'		=> 'Предупреди потребител',

	'IMG_BUTTON_PM_FORWARD'		=> 'Пренасочи личните съобщения',
	'IMG_BUTTON_PM_NEW'			=> 'Ново лично съобщение',
	'IMG_BUTTON_PM_REPLY'		=> 'Отговори на личното съобщение',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Темата е заключена',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Нова тема',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Отговори',

	'IMG_USER_ICON1'		=> 'Изображение 1',
	'IMG_USER_ICON2'		=> 'Изображение 2',
	'IMG_USER_ICON3'		=> 'Изображение 3',
	'IMG_USER_ICON4'		=> 'Изображение 4',
	'IMG_USER_ICON5'		=> 'Изображение 5',
	'IMG_USER_ICON6'		=> 'Изображение 6',
	'IMG_USER_ICON7'		=> 'Изображение 7',
	'IMG_USER_ICON8'		=> 'Изображение 8',
	'IMG_USER_ICON9'		=> 'Изображение 9',
	'IMG_USER_ICON10'		=> 'Изображение 10',

	'INCLUDE_DIMENSIONS'		=> 'Прибави измеренията',
	'INCLUDE_IMAGESET'			=> 'Прибави imageset',
	'INCLUDE_TEMPLATE'			=> 'Прибави шаблона',
	'INCLUDE_THEME'				=> 'Прибави темата',
	'INHERITING_FROM'			=> 'Наследена от',
	'INSTALL_IMAGESET'			=> 'Инсталирай imageset',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Тук можете да инсталирате избрания imageset. Можете да промените някой настройки или да инсталирате всички по подразбиране.',
	'INSTALL_STYLE'				=> 'Инсталирай стила',
	'INSTALL_STYLE_EXPLAIN'		=> 'Тук можете да инсталирате нов стил. Всички съществуващи елементи ще бъдат заместени. Някой от стиловете изискват инсталирани елементи.',
	'INSTALL_TEMPLATE'			=> 'Инсталирай шаблона',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Тук можете да инсталирате нов шаблон. В зависимост от конфигурацията на сървъра ще бъдат показвани различни опции.',
	'INSTALL_THEME'				=> 'Инсталирай темата',
	'INSTALL_THEME_EXPLAIN'		=> 'Тук можете да инсталирате избраната тема. Можете да променяте някой от опциите или да инсталирате всичко по подразбиране.',
	'INSTALLED_IMAGESET'		=> 'Инсталирани imageset-ове',
	'INSTALLED_STYLE'			=> 'Инсталирани стилове',
	'INSTALLED_TEMPLATE'		=> 'Инсталирани шаблони',
	'INSTALLED_THEME'			=> 'Инсталирани теми',
    'KEEP_IMAGESET'             => 'Запази "%s" имиджсет-а',
    'KEEP_TEMPLATE'             => 'Запази "%s" темплейта',
    'KEEP_THEME'                => 'Запази "%s" темата',


	'LINE_SPACING'				=> 'Разстояние м/у редовете',
	'LOCALISED_IMAGES'			=> 'Локализирани',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Тази настройка е наследена и не може да се промени.',

	
	'NO_CLASS'					=> 'Не мога да намеря клас-а в stylesheet-а.',
	'NO_IMAGESET'				=> 'Не мога да намеря imageset във файловата система.',
	'NO_IMAGE'					=> 'Няма',
	'NO_IMAGE_ERROR'			=> 'Не мога да намеря изображението.',
	'NO_STYLE'					=> 'Не мога да намеря стилове във файловата система.',
	'NO_TEMPLATE'				=> 'Не мога да намеря шаблони във файловата система.',
	'NO_THEME'					=> 'Не мога да намеря теми във файловата система.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Няма',
	'NO_UNINSTALLED_STYLE'		=> 'Няма',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Няма',
	'NO_UNINSTALLED_THEME'		=> 'Няма',
	'NO_UNIT'					=> 'Без',

	'ONLY_IMAGESET'			=> 'Това е последният останал imageset, не можеш да го изтриеш.',
	'ONLY_STYLE'			=> 'Това е последният останал стил, не можеш да го изтриеш.',
	'ONLY_TEMPLATE'			=> 'Това е последният останал шаблон, не можеш да го изтриеш.',
	'ONLY_THEME'			=> 'Това е последната останала тема, не можеш да я изтриеш.',
	'OPTIONAL_BASIS'		=> 'Препоръчително',

	'REFRESH'					=> 'Обнови',
	'REPEAT_NO'					=> 'Няма',
	'REPEAT_X'					=> 'Хоризонтално',
	'REPEAT_Y'					=> 'Вертикално',
	'REPEAT_ALL'				=> 'И в двете посоки',
	'REPLACE_IMAGESET'			=> 'Imageset',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Imageset-a, които ще замести изтрития.',
	'REPLACE_STYLE'				=> 'Стил',
	'REPLACE_STYLE_EXPLAIN'		=> 'Стила, който ще замести изтрития.',
	'REPLACE_TEMPLATE'			=> 'Шаблон',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Шаблона, който ще замести изтрития.',
	'REPLACE_THEME'				=> 'Тема',
	'REPLACE_THEME_EXPLAIN'		=> 'Темата, която ще замести изтритата.',
	'REPLACE_WITH_OPTION'      => 'Замени с "%s"',
	'REQUIRES_IMAGESET'			=> 'Този стил изисква %s imageset да бъде инсталиран.',
	'REQUIRES_TEMPLATE'			=> 'Този стил изисква %s шаблона да бъде инсталиран.',
	'REQUIRES_THEME'			=> 'Този стил изисква %s темата да бъде инсталирана.',

	'SELECT_IMAGE'				=> 'Избери изображение',
	'SELECT_TEMPLATE'			=> 'Избери файл-а',
	'SELECT_THEME'				=> 'Избери файл (тема)',
	'SELECTED_IMAGE'			=> 'Избрано изображение',
	'SELECTED_IMAGESET'			=> 'Избран imageset',
	'SELECTED_TEMPLATE'			=> 'Избран шаблон',
	'SELECTED_TEMPLATE_FILE'	=> 'Избран файл',
	'SELECTED_THEME'			=> 'Избрана тема',
	'SELECTED_THEME_FILE'		=> 'Избран файл (тема)',
	'STORE_DATABASE'			=> 'База данни',
	'STORE_FILESYSTEM'			=> 'Файлова система',
	'STYLE_ACTIVATE'			=> 'Активирай',
	'STYLE_ACTIVE'				=> 'Активен',
	'STYLE_ADDED'				=> 'Стила е добавен успешно.',
	'STYLE_DEACTIVATE'			=> 'Деактивирай',
	'STYLE_DEFAULT'				=> 'По подразбиране',
	'STYLE_DELETED'				=> 'Стила е изтрит успешно.',
	'STYLE_DETAILS_UPDATED'		=> 'Стила е променен успешно.',
	'STYLE_ERR_ARCHIVE'			=> 'Избери архивиращ метод.',
	'STYLE_ERR_COPY_LONG'		=> 'Авторското право не може да бъде по-дълго от 60 знака.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Трябва да избереш поне един елемент.',
	'STYLE_ERR_NAME_CHARS'		=> 'Името на стила може да съдържа само alphanumeric знаци, -, +, _ и празно място.',
	'STYLE_ERR_NAME_EXIST'		=> 'Вече съществува стил с такова име.',
	'STYLE_ERR_NAME_LONG'		=> 'Името на стила не може да бъде по-дълго от 30 знака.',
	'STYLE_ERR_NO_IDS'			=> 'Трябва да избереш шаблон, imageset и тема за този стил.',
	'STYLE_ERR_NOT_STYLE'		=> 'Качения от Вас файл не съдържа стил в себе си.',
	'STYLE_ERR_STYLE_NAME'		=> 'Трябва да въведеш име на стила.',
	'STYLE_EXPORT'				=> 'Експортирай стила',
	'STYLE_EXPORT_EXPLAIN'		=> 'Тук можете да експортирате стил. В стила не е нужно да съдържа всички елементи, но трябва да съдържа поне един. Можете да свалите файла на компютъра си и да го качите ръчно.',
	'STYLE_EXPORTED'			=> 'Стила е експортиран успешно и записан в %s.',
	'STYLE_IMAGESET'			=> 'Imageset',
	'STYLE_NAME'				=> 'Име',
	'STYLE_TEMPLATE'			=> 'Шаблон',
	'STYLE_THEME'				=> 'Тема',
	'STYLE_USED_BY'				=> 'Използва се от (включително и роботи)',

	'TEMPLATE_ADDED'			=> 'Шаблона е добавен и записан във файловата система.',
	'TEMPLATE_ADDED_DB'			=> 'Шаблона е добавен и записан в базата данни.',
	'TEMPLATE_CACHE'			=> 'Кеш на шаблона',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'По подразбиране phpBB кешира компилираната версия на шаблона. Така намалява тежестта в/у сървъра при всяко зареждате на страница. Тук можете да проверите кеша на всеки файл.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Кеша е изчистен успешно.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Няма кеширани шаблони.',
	'TEMPLATE_DELETED'			=> 'Шаблона е изтрит успешно.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Този темплейт не може да бъде изтрит, защото една или повече теми наследяват от него:',
	'TEMPLATE_DELETED_FS'		=> 'Шаблона е изтрит от базата данни, но някой файлове може да са останали.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Детайлите на шаблона са успешно променени.',
	'TEMPLATE_EDITOR'			=> 'HTML редактор',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Шаблон редактор',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Избери архивиращ метод.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Кеш директорията не може да бъде отворена.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Авторските права не могат да бъда по-дълги от 60 знака.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Името на шаблона може да съдържа само alphanumeric знаци, -, +, _ и празно място.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Шаблон с такова име вече съществува.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Името на шаблона не трябва да надхвърля 30 знака.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Архива не съдържа валиден шаблон.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Новият темплейт сет изисква темата %s да бъде инсталирана.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Трябва да въведеш имена на шаблоните.',
	'TEMPLATE_EXPORT'			=> 'Експортирай шаблоните',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Тук можеш да експортираш шаблон. Архива ще съдържа нужната информация за инсталиране на шаблона на друг форум. Можете да свалите файла на компютъра и да качите файловете ръчно.',
	'TEMPLATE_EXPORTED'			=> 'Шаблона е успешно експортиран и съхранен в %s.',
	'TEMPLATE_FILE'				=> 'Файл',
	'TEMPLATE_FILE_UPDATED'		=> 'Шаблон файла е качен успешно.',
	'TEMPLATE_INHERITS'			=> 'Този темплейт сет наследява от %s и не може да има различни настройки.',
	'TEMPLATE_LOCATION'			=> 'Съхрани шаблоните в',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Изображенията винаги се съхраняват във файловата система.',
	'TEMPLATE_NAME'				=> 'Име на шаблона',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Грешка при опит за писане върху файла %s. Проверете правата на директорията и файловете.',
	'TEMPLATE_REFRESHED'		=> 'Шаблона е успешно обновен.',

	'THEME_ADDED'				=> 'Новата тема е добавена във файловата система.',
	'THEME_ADDED_DB'			=> 'Новата тема е добавена в базата данни.',
	'THEME_CLASS_ADDED'			=> 'Класа по избор е добавен успешно.',
	'THEME_DELETED'				=> 'Темата е изтрита успешно.',
	'THEME_DELETED_FS'			=> 'Темата е изтрита успешно, но някой файлове може да са останали във файловата система.',
	'THEME_DETAILS_UPDATED'		=> 'Детайлите на темата са успешно променени.',
	'THEME_EDITOR'				=> 'CSS редактор',
	'THEME_EDITOR_HEIGHT'		=> 'Редактор на тема',
	'THEME_ERR_ARCHIVE'			=> 'Избери архивиращ метод.',
	'THEME_ERR_CLASS_CHARS'		=> 'Само alphanumeric знаци плюс ., :, -, _ и # са валидни клас имена.',
	'THEME_ERR_COPY_LONG'		=> 'Авторските права не може да бъдат по-дълги от 60 знака.',
	'THEME_ERR_NAME_CHARS'		=> 'Името на темата може да съдържа само alphanumeric знаци, -, +, _ и празно място.',
	'THEME_ERR_NAME_EXIST'		=> 'Тема с такова име вече съществува.',
	'THEME_ERR_NAME_LONG'		=> 'Името на темата не може да бъде по-дълго от 30 знака.',
	'THEME_ERR_NOT_THEME'		=> 'Архива не съдържа валидна тема.',
	'THEME_ERR_REFRESH_FS'		=> 'Темата е записана във файловата система.',
	'THEME_ERR_STYLE_NAME'		=> 'Трябва да избереш име на темата.',
	'THEME_FILE'				=> 'Файл (тема)',
	'THEME_EXPORT'				=> 'Експортирай темата',
	'THEME_EXPORT_EXPLAIN'		=> 'Тук можете да експортирате тема. Архива ще съдържа всичката нужна информация за да инсталирате темата на друг форум. Можете да свалите файла на компютъра и да го качите ръчно.',
	'THEME_EXPORTED'			=> 'Темата е експортирана успешно и запазена в %s.',
	'THEME_LOCATION'			=> 'Съхрани stylesheet в',
	'THEME_LOCATION_EXPLAIN'	=> 'Изображенията винаги се съхраняват във файловата система.',
	'THEME_NAME'				=> 'Име на темата',
	'THEME_REFRESHED'			=> 'Темата е обновена успешно.',
	'THEME_UPDATED'				=> 'Класа е променен успешно.',

	'UNDERLINE'				=> 'Подчертан текст',
	'UNINSTALLED_IMAGESET'	=> 'Не инсталирани imageset-ове',
	'UNINSTALLED_STYLE'		=> 'Не инсталирани стилове',
	'UNINSTALLED_TEMPLATE'	=> 'Не инсталирани шаблони',
	'UNINSTALLED_THEME'		=> 'Не инсталирани теми',
	'UNSET'					=> 'Неопределен',

));

?>