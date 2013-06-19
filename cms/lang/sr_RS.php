<?php

/**
 * Serbian (Serbia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('sr_RS', $lang) && is_array($lang['sr_RS'])) {
	$lang['sr_RS'] = array_merge($lang['en_US'], $lang['sr_RS']);
} else {
	$lang['sr_RS'] = $lang['en_US'];
}

$lang['sr_RS']['AssetAdmin']['CHOOSEFILE'] = 'Изаберите датотеку';
$lang['sr_RS']['AssetAdmin']['DELETEDX'] = 'Обрисано %s датотека. %s';
$lang['sr_RS']['AssetAdmin']['FILESREADY'] = 'Датотеке спремне за достављање:';
$lang['sr_RS']['AssetAdmin']['FOLDERDELETED'] = 'фасцикла обрисана.';
$lang['sr_RS']['AssetAdmin']['FOLDERSDELETED'] = 'фасцикли обрисано.';
$lang['sr_RS']['AssetAdmin']['MENUTITLE'] = 'Датотеке и слике';
$lang['sr_RS']['AssetAdmin']['MENUTITLE'] = 'Fajlovi & Slike';
$lang['sr_RS']['AssetAdmin']['MOVEDX'] = 'Премештено %s датотека';
$lang['sr_RS']['AssetAdmin']['NEWFOLDER'] = 'Нова фасцикла';
$lang['sr_RS']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Нема датотека за достављање';
$lang['sr_RS']['AssetAdmin']['NOWBROKEN'] = 'Ове стране сада имају неисправне линкове:';
$lang['sr_RS']['AssetAdmin']['SAVEDFILE'] = 'Сачувана датотека %s';
$lang['sr_RS']['AssetAdmin']['SAVEFOLDERNAME'] = 'Сачувај име фасцикле';
$lang['sr_RS']['AssetAdmin']['THUMBSDELETED'] = 'Сви некоришћени умањени прикази су обрисани';
$lang['sr_RS']['AssetAdmin']['UPLOAD'] = 'Достави датотеке приказане испод';
$lang['sr_RS']['AssetAdmin']['UPLOADEDX'] = 'Достављено %s датотека';
$lang['sr_RS']['AssetAdmin_left.ss']['CREATE'] = 'Направи';
$lang['sr_RS']['AssetAdmin_left.ss']['DELETE'] = 'Избриши';
$lang['sr_RS']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Избриши изабране фасцикле';
$lang['sr_RS']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Дозволи распоређивање превлачењем';
$lang['sr_RS']['AssetAdmin_left.ss']['FOLDERS'] = 'Фасцикле';
$lang['sr_RS']['AssetAdmin_left.ss']['GO'] = 'Иди';
$lang['sr_RS']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Изаберите фасцикле које желите да избришете и кликните на дугме';
$lang['sr_RS']['AssetAdmin_left.ss']['TOREORG'] = 'Да бисте организовали фасцикле, превуците их по вашој жељи.';
$lang['sr_RS']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Изаберите страну са леве стране.';
$lang['sr_RS']['AssetAdmin_right.ss']['WELCOME'] = 'Добродошли у';
$lang['sr_RS']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Немате дозволу да достављате датотеке у ову фасциклу.';
$lang['sr_RS']['AssetTableField']['CAPTION'] = 'Наслов';
$lang['sr_RS']['AssetTableField']['CREATED'] = 'Прво достављено';
$lang['sr_RS']['AssetTableField']['DIM'] = 'Димензије';
$lang['sr_RS']['AssetTableField']['DIMLIMT'] = 'Ограничи димензије искачућег прозора';
$lang['sr_RS']['AssetTableField']['FILENAME'] = 'Име датотеке';
$lang['sr_RS']['AssetTableField']['GALLERYOPTIONS'] = 'Опције галерије';
$lang['sr_RS']['AssetTableField']['IMAGE'] = 'Слика';
$lang['sr_RS']['AssetTableField']['ISFLASH'] = 'Је Флеш документ';
$lang['sr_RS']['AssetTableField']['LASTEDIT'] = 'Последње промењено';
$lang['sr_RS']['AssetTableField']['MAIN'] = 'Опште';
$lang['sr_RS']['AssetTableField']['NOLINKS'] = 'На ову датотеку не показује ниједна страна.';
$lang['sr_RS']['AssetTableField']['OWNER'] = 'Власник';
$lang['sr_RS']['AssetTableField']['PAGESLINKING'] = 'Следеће стране показују на ову датотеку:';
$lang['sr_RS']['AssetTableField']['POPUPHEIGHT'] = 'Висина искачућег прозора';
$lang['sr_RS']['AssetTableField']['POPUPWIDTH'] = 'Ширина искачућег прозора';
$lang['sr_RS']['AssetTableField']['SIZE'] = 'Величина';
$lang['sr_RS']['AssetTableField.ss']['DELFILE'] = 'Избриши ову датотеку';
$lang['sr_RS']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Превуците на фасциклу са леве стране да бисте преместили датотеку';
$lang['sr_RS']['AssetTableField']['SWFFILEOPTIONS'] = 'Опције SWF датотеке';
$lang['sr_RS']['AssetTableField']['TITLE'] = 'Наслов';
$lang['sr_RS']['AssetTableField']['TYPE'] = 'Тип';
$lang['sr_RS']['AssetTableField']['URL'] = 'URL';
$lang['sr_RS']['CMSMain']['CANCEL'] = 'Откажи';
$lang['sr_RS']['CMSMain']['CHOOSEREPORT'] = '(Изаберите извештај)';
$lang['sr_RS']['CMSMain']['COMPARINGV'] = 'Упоређујете верзије #%d и #%d';
$lang['sr_RS']['CMSMain']['COPYPUBTOSTAGE'] = 'Да ли заиста желите да копирате објављени садржај на живи сајт?';
$lang['sr_RS']['CMSMain']['EMAIL'] = 'Е-пошта';
$lang['sr_RS']['CMSMain']['GO'] = 'Иди';
$lang['sr_RS']['CMSMain']['MENUTITLE'] = 'Садржај сајта';
$lang['sr_RS']['CMSMain']['MENUTITLE'] = 'Sadrzaj Webstranice';
$lang['sr_RS']['CMSMain']['METADESCOPT'] = 'Опис';
$lang['sr_RS']['CMSMain']['METAKEYWORDSOPT'] = 'Кључне речи';
$lang['sr_RS']['CMSMain']['NEW'] = 'Нова ';
$lang['sr_RS']['CMSMain']['NOCONTENT'] = 'нема садржаја';
$lang['sr_RS']['CMSMain']['NOTHINGASSIGNED'] = 'Тренутно немате додељених задатака.';
$lang['sr_RS']['CMSMain']['NOWAITINGON'] = 'Не чекате ни на кога.';
$lang['sr_RS']['CMSMain']['NOWBROKEN'] = 'Следеће стране сада имају неважеће линкове:';
$lang['sr_RS']['CMSMain']['NOWBROKEN2'] = 'Власницима је послата е-пошта да би поправили те стране.';
$lang['sr_RS']['CMSMain']['OK'] = 'У реду';
$lang['sr_RS']['CMSMain']['PAGEDEL'] = '%d обрисана страна';
$lang['sr_RS']['CMSMain']['PAGENOTEXISTS'] = 'Ова страна не постоји';
$lang['sr_RS']['CMSMain']['PAGEPUB'] = '%d објављена страна';
$lang['sr_RS']['CMSMain']['PAGESDEL'] = '%d обрисаних страна';
$lang['sr_RS']['CMSMain']['PAGESPUB'] = '%s објављених страна';
$lang['sr_RS']['CMSMain']['PAGETYPEOPT'] = 'Тип стране';
$lang['sr_RS']['CMSMain']['PRINT'] = 'Штампај';
$lang['sr_RS']['CMSMain']['PUBALLCONFIRM'] = 'Објавите сваку страну на овом сајту копирањем садржај на жив сајт.';
$lang['sr_RS']['CMSMain']['PUBALLFUN'] = 'Функција „Објави све“ ';
$lang['sr_RS']['CMSMain']['PUBALLFUN2'] = 'Притиском на ово дугме постићи ћете исто што и одласком на сваку страну и притискањем дугмета „објави“ . Намењена је за коришћене након великих измена садржаја као када се сајт први пут објављује.';
$lang['sr_RS']['CMSMain']['PUBPAGES'] = 'Завршено: Објављено %d страна';
$lang['sr_RS']['CMSMain']['REMOVEDFD'] = 'Уклоњено са сајта са нацртима';
$lang['sr_RS']['CMSMain']['REMOVEDPAGE'] = 'Страна \'%s\' је уклоњена са објављеног сајта';
$lang['sr_RS']['CMSMain']['RESTORED'] = '\'%s\' је успешно враћен';
$lang['sr_RS']['CMSMain']['ROLLBACK'] = 'Врати се на ову верзију';
$lang['sr_RS']['CMSMain']['ROLLEDBACKPUB'] = 'Враћено на објављену еврзију. Број нове верзије је #%d';
$lang['sr_RS']['CMSMain']['ROLLEDBACKVERSION'] = 'Враћено на верзију #%d. Број нове верзије је #%d.';
$lang['sr_RS']['CMSMain']['SAVE'] = 'Сачувај';
$lang['sr_RS']['CMSMain']['SENTTO'] = 'Послато %s %s на одобравање.';
$lang['sr_RS']['CMSMain']['STATUSOPT'] = 'Статус';
$lang['sr_RS']['CMSMain']['TOTALPAGES'] = 'Укупно страна:';
$lang['sr_RS']['CMSMain']['VERSIONSNOPAGE'] = 'Не могу да пронађем страну #%d';
$lang['sr_RS']['CMSMain']['VIEWING'] = 'Гледате верзију #%d, направљену %s';
$lang['sr_RS']['CMSMain']['VISITRESTORE'] = 'посетите restorepage/(ID)';
$lang['sr_RS']['CMSMain']['WAITINGON'] = 'Чекате друге да пораде на <b>%d</b> страна.';
$lang['sr_RS']['CMSMain']['WORKTODO'] = 'Морате да радите на <b>%d</b> страна.';
$lang['sr_RS']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Додато на сајт са нацртима и још увек није објављено';
$lang['sr_RS']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Додај критеријум...';
$lang['sr_RS']['CMSMain_left.ss']['BATCHACTIONS'] = 'Рутинске акције';
$lang['sr_RS']['CMSMain_left.ss']['CHANGED'] = 'промењено';
$lang['sr_RS']['CMSMain_left.ss']['CLOSEBOX'] = 'кликните да бисте затворили одељак';
$lang['sr_RS']['CMSMain_left.ss']['COMPAREMODE'] = 'Мод за упоређивање (кликните на две испод)';
$lang['sr_RS']['CMSMain_left.ss']['CREATE'] = 'Направи';
$lang['sr_RS']['CMSMain_left.ss']['DEL'] = 'обрисано';
$lang['sr_RS']['CMSMain_left.ss']['DELETECONFIRM'] = 'Избриши изабране стране';
$lang['sr_RS']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Обрисано са сајта са нацртима али је још увек на главном сајту';
$lang['sr_RS']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Измењено на сајту са нацртима али још увек није објављено';
$lang['sr_RS']['CMSMain_left.ss']['EDITEDSINCE'] = 'Измењено ';
$lang['sr_RS']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Дозволи разврставање системом „превуци и пусти“';
$lang['sr_RS']['CMSMain_left.ss']['GO'] = 'Иди';
$lang['sr_RS']['CMSMain_left.ss']['KEY'] = 'Кључ:';
$lang['sr_RS']['CMSMain_left.ss']['NEW'] = 'ново';
$lang['sr_RS']['CMSMain_left.ss']['OPENBOX'] = 'кликните да бисте отворили овај одељак';
$lang['sr_RS']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Историја верзија стране';
$lang['sr_RS']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Објави изабране стране';
$lang['sr_RS']['CMSMain_left.ss']['SEARCH'] = 'Претрага';
$lang['sr_RS']['CMSMain_left.ss']['SEARCHTITLE'] = 'Претражите URL-ове, наслове, меније и садржај';
$lang['sr_RS']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Изаберите стране које желите да промените и кликните на акцију:';
$lang['sr_RS']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Прикажи само промењене стране';
$lang['sr_RS']['CMSMain_left.ss']['SHOWUNPUB'] = 'Прикажи необјављене верзије';
$lang['sr_RS']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Садржај сајта и структура';
$lang['sr_RS']['CMSMain_left.ss']['SITEREPORTS'] = 'Извештаји о сајту';
$lang['sr_RS']['CMSMain_right.ss']['ANYMESSAGE'] = 'Да ли имате неку поруку за вашег уредника?';
$lang['sr_RS']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Изаберите страну са леве стране.';
$lang['sr_RS']['CMSMain_right.ss']['LOADING'] = 'учитавам...';
$lang['sr_RS']['CMSMain_right.ss']['MESSAGE'] = 'Порука';
$lang['sr_RS']['CMSMain_right.ss']['SENDTO'] = 'Пошаљи на';
$lang['sr_RS']['CMSMain_right.ss']['STATUS'] = 'Статус';
$lang['sr_RS']['CMSMain_right.ss']['SUBMIT'] = 'Пошаљи на одобравање';
$lang['sr_RS']['CMSMain_right.ss']['WELCOMETO'] = 'Добродошли у ';
$lang['sr_RS']['CMSMain_versions.ss']['AUTHOR'] = 'Аутор';
$lang['sr_RS']['CMSMain_versions.ss']['NOTPUB'] = 'Није објављено';
$lang['sr_RS']['CMSMain_versions.ss']['PUBR'] = 'Објављивач';
$lang['sr_RS']['CMSMain_versions.ss']['UNKNOWN'] = 'Непознато';
$lang['sr_RS']['CMSMain_versions.ss']['WHEN'] = 'Када';
$lang['sr_RS']['CommentAdmin']['ACCEPT'] = 'Прихвати';
$lang['sr_RS']['CommentAdmin']['APPROVED'] = 'Прихваћено %s коментара.';
$lang['sr_RS']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Одобрени коментари';
$lang['sr_RS']['CommentAdmin']['AUTHOR'] = 'Аутор';
$lang['sr_RS']['CommentAdmin']['COMMENT'] = 'Коментар';
$lang['sr_RS']['CommentAdmin']['COMMENTS'] = 'Коментари';
$lang['sr_RS']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Коментари који чекају на одобрење';
$lang['sr_RS']['CommentAdmin']['DATEPOSTED'] = 'Датум слања';
$lang['sr_RS']['CommentAdmin']['DELETE'] = 'Обриши';
$lang['sr_RS']['CommentAdmin']['DELETEALL'] = 'Обриши све';
$lang['sr_RS']['CommentAdmin']['DELETED'] = 'Обрисано %s коментара.';
$lang['sr_RS']['CommentAdmin']['MARKEDSPAM'] = '%s коментара означено као спам.';
$lang['sr_RS']['CommentAdmin']['MENUTITLE'] = 'Коментари';
$lang['sr_RS']['CommentAdmin']['MENUTITLE'] = 'Komentari';
$lang['sr_RS']['CommentAdmin']['NAME'] = 'Име';
$lang['sr_RS']['CommentAdmin']['PAGE'] = 'Страна';
$lang['sr_RS']['CommentAdmin']['SPAM'] = 'Спам';
$lang['sr_RS']['CommentAdmin']['SPAMMARKED'] = 'Означи као спам';
$lang['sr_RS']['CommentAdmin_left.ss']['COMMENTS'] = 'Коментари';
$lang['sr_RS']['CommentAdmin_right.ss']['WELCOME1'] = 'Добродошли у';
$lang['sr_RS']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Одобрени';
$lang['sr_RS']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Чекају на одобрење';
$lang['sr_RS']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Коментари';
$lang['sr_RS']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Спам';
$lang['sr_RS']['CommentList.ss']['CREATEDW'] = 'Коментари су направљени кад год се одвија један од послова - објављивање, одбијање, подношење.';
$lang['sr_RS']['CommentList.ss']['NOCOM'] = 'Нема коментара на ову страницу.';
$lang['sr_RS']['CommentTableField']['FILTER'] = 'Филтер';
$lang['sr_RS']['CommentTableField']['SEARCH'] = 'Претрага';
$lang['sr_RS']['CommentTableField.ss']['APPROVE'] = 'одобри';
$lang['sr_RS']['CommentTableField.ss']['APPROVECOMMENT'] = 'Одобри овај коментар';
$lang['sr_RS']['CommentTableField.ss']['DELETE'] = 'обриши';
$lang['sr_RS']['CommentTableField.ss']['DELETEROW'] = 'Обриши овај ред';
$lang['sr_RS']['CommentTableField.ss']['EDIT'] = 'Измени';
$lang['sr_RS']['CommentTableField.ss']['MARKASSPAM'] = 'Означи овај коментар као спам';
$lang['sr_RS']['CommentTableField.ss']['NOITEMSFOUND'] = 'Нема пронађених ставки';
$lang['sr_RS']['CommentTableField.ss']['SPAM'] = 'спам';
$lang['sr_RS']['ImageEditor.ss']['ACTIONS'] = 'акције';
$lang['sr_RS']['ImageEditor.ss']['APPLY'] = 'примени';
$lang['sr_RS']['ImageEditor.ss']['CANCEL'] = 'откажи';
$lang['sr_RS']['ImageEditor.ss']['CROP'] = 'исеци';
$lang['sr_RS']['ImageEditor.ss']['CURRENTACTION'] = 'тренутна акција';
$lang['sr_RS']['ImageEditor.ss']['EXIT'] = 'излаз';
$lang['sr_RS']['ImageEditor.ss']['HEIGHT'] = 'висина';
$lang['sr_RS']['ImageEditor.ss']['REDO'] = 'понови';
$lang['sr_RS']['ImageEditor.ss']['ROT'] = 'ротирај';
$lang['sr_RS']['ImageEditor.ss']['SAVE'] = 'сачувај слику';
$lang['sr_RS']['ImageEditor.ss']['UNDO'] = 'опозови';
$lang['sr_RS']['ImageEditor.ss']['UNTITLED'] = 'Ненасловљени документ';
$lang['sr_RS']['ImageEditor.ss']['WIDTH'] = 'ширина';
$lang['sr_RS']['LeftAndMain']['CHANGEDURL'] = 'URL промењен на \'%s\'';
$lang['sr_RS']['LeftAndMain']['COMMENTS'] = 'Komentari';
$lang['sr_RS']['LeftAndMain']['FILESIMAGES'] = 'Fajlovi i slike';
$lang['sr_RS']['LeftAndMain']['HELP'] = 'Помоћ';
$lang['sr_RS']['LeftAndMain']['PAGETYPE'] = 'Тип стране:';
$lang['sr_RS']['LeftAndMain']['PERMAGAIN'] = 'Одјављени сте са CMS-а. Уколико желите да се поново пријавите, унесите корисничко име и лозинку.';
$lang['sr_RS']['LeftAndMain']['PERMALREADY'] = 'Не можете да приступите овом делу CMS-а. Ако желите да се пријавите као неко други, урадите то испод';
$lang['sr_RS']['LeftAndMain']['PERMDEFAULT'] = 'Унесите своју имејл адресу и лозинку за приступ CMS-у.';
$lang['sr_RS']['LeftAndMain']['PLEASESAVE'] = 'Сачувајте страну: ова страна не може да буде ажурирана јер још увек није сачувана.';
$lang['sr_RS']['LeftAndMain']['REPORTS'] = 'Izvestaj';
$lang['sr_RS']['LeftAndMain']['REQUESTERROR'] = 'Грешка у захтеву';
$lang['sr_RS']['LeftAndMain']['SAVED'] = 'сачувано';
$lang['sr_RS']['LeftAndMain']['SAVEDUP'] = 'Сачувано';
$lang['sr_RS']['LeftAndMain']['SECURITY'] = 'Bezbednost';
$lang['sr_RS']['LeftAndMain']['SITECONTENT'] = 'Sadrzaj sajta';
$lang['sr_RS']['LeftAndMain']['SITECONTENTLEFT'] = 'Садржај сајта';
$lang['sr_RS']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Ово је';
$lang['sr_RS']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'верзија коју тренутно имате је технички CVS грана';
$lang['sr_RS']['LeftAndMain.ss']['ARCHS'] = 'Сајт са архивом';
$lang['sr_RS']['LeftAndMain.ss']['DRAFTS'] = 'Сајт са нацртима';
$lang['sr_RS']['LeftAndMain.ss']['EDIT'] = 'Измени';
$lang['sr_RS']['LeftAndMain.ss']['EDITINCMS'] = 'Измени ову страну у CMS-у';
$lang['sr_RS']['LeftAndMain.ss']['EDITPROFILE'] = 'Профил';
$lang['sr_RS']['LeftAndMain.ss']['LOADING'] = 'Учитавање...';
$lang['sr_RS']['LeftAndMain.ss']['LOGGEDINAS'] = 'Пријављен као';
$lang['sr_RS']['LeftAndMain.ss']['LOGOUT'] = 'одјави се';
$lang['sr_RS']['LeftAndMain.ss']['PUBLIS'] = 'Жив сајт';
$lang['sr_RS']['LeftAndMain.ss']['REQUIREJS'] = 'CMS захтева да имате укључен ЈаваСкрипт.';
$lang['sr_RS']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe сајт';
$lang['sr_RS']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Преглед стране:';
$lang['sr_RS']['LeftAndMain']['STATUSTO'] = 'Статус промењен на \'%s\'';
$lang['sr_RS']['LeftAndMain']['TREESITECONTENT'] = 'Садржај сајта';
$lang['sr_RS']['MemberList.ss']['FILTER'] = 'Филтер';
$lang['sr_RS']['MemberList_PageControls.ss']['DISPLAYING'] = 'Приказујем';
$lang['sr_RS']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'чланова';
$lang['sr_RS']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'чланова';
$lang['sr_RS']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'чланова';
$lang['sr_RS']['MemberList_PageControls.ss']['OF'] = 'од';
$lang['sr_RS']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'чланова';
$lang['sr_RS']['MemberList_PageControls.ss']['TO'] = 'до';
$lang['sr_RS']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Погледај првих';
$lang['sr_RS']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Погледај следећих';
$lang['sr_RS']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Погледај претходних';
$lang['sr_RS']['MemberList_Table.ss']['EMAIL'] = 'Адреса е-поште';
$lang['sr_RS']['MemberList_Table.ss']['FN'] = 'Име';
$lang['sr_RS']['MemberList_Table.ss']['PASSWD'] = 'Лозинка';
$lang['sr_RS']['MemberList_Table.ss']['SN'] = 'Презиме';
$lang['sr_RS']['MemberTableField']['ADD'] = 'Додај';
$lang['sr_RS']['MemberTableField']['ADDEDTOGROUP'] = 'Члан додат групи';
$lang['sr_RS']['MemberTableField']['ADDINGFIELD'] = 'Додавање није успело';
$lang['sr_RS']['MemberTableField']['ANYGROUP'] = 'Било која група';
$lang['sr_RS']['MemberTableField']['ASC'] = 'растућем редоследу';
$lang['sr_RS']['MemberTableField']['DESC'] = 'опадајућем редоследу';
$lang['sr_RS']['MemberTableField']['EMAIL'] = 'Имејл';
$lang['sr_RS']['MemberTableField']['FILTER'] = 'Филтер';
$lang['sr_RS']['MemberTableField']['FILTERBYGROUP'] = 'Филтрирај по групи';
$lang['sr_RS']['MemberTableField']['FIRSTNAME'] = 'Име';
$lang['sr_RS']['MemberTableField']['ORDERBY'] = 'Сортирај по';
$lang['sr_RS']['MemberTableField']['SEARCH'] = 'Претрага';
$lang['sr_RS']['MemberTableField.ss']['ADDNEW'] = 'Додај нов ';
$lang['sr_RS']['MemberTableField.ss']['DELETEMEMBER'] = 'Избриши овог члана';
$lang['sr_RS']['MemberTableField.ss']['EDITMEMBER'] = 'Измени овог члана';
$lang['sr_RS']['MemberTableField.ss']['SHOWMEMBER'] = 'Прикажи овог члана';
$lang['sr_RS']['MemberTableField']['SURNAME'] = 'Презиме';
$lang['sr_RS']['PageComment']['COMMENTBY'] = 'Коментарисао \'%s\' у %s';
$lang['sr_RS']['PageComment']['PLURALNAME'] = 'Komentari Stranice';
$lang['sr_RS']['PageComment']['SINGULARNAME'] = 'Komentar Stranice';
$lang['sr_RS']['PageCommentInterface']['POST'] = 'Пошаљи';
$lang['sr_RS']['PageCommentInterface']['SPAMQUESTION'] = 'Питање за заштиту од спама: %s';
$lang['sr_RS']['PageCommentInterface.ss']['COMMENTS'] = 'Коментари';
$lang['sr_RS']['PageCommentInterface.ss']['NEXT'] = 'следеће';
$lang['sr_RS']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Нико није коментарисао ову страну.';
$lang['sr_RS']['PageCommentInterface.ss']['POSTCOM'] = 'Пошаљите свој коментар';
$lang['sr_RS']['PageCommentInterface.ss']['PREV'] = 'претходно';
$lang['sr_RS']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'RSS довод за коментаре на овој страници';
$lang['sr_RS']['PageCommentInterface']['YOURCOMMENT'] = 'Коментари';
$lang['sr_RS']['PageCommentInterface']['YOURNAME'] = 'Ваше име';
$lang['sr_RS']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Питање за заштиту од спама: %s';
$lang['sr_RS']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Порука коју сте послали је:';
$lang['sr_RS']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Спам је пронађен!!';
$lang['sr_RS']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'одобри овај коментар';
$lang['sr_RS']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'овај коментар није спам';
$lang['sr_RS']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'овај коментар је спам';
$lang['sr_RS']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Послао ';
$lang['sr_RS']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'уклони овај коментар';
$lang['sr_RS']['ReportAdmin']['MENUTITLE'] = 'Izvestaji';
$lang['sr_RS']['ReportAdmin_left.ss']['REPORTS'] = 'Извештаји';
$lang['sr_RS']['ReportAdmin_right.ss']['WELCOME1'] = 'Добродошли у ';
$lang['sr_RS']['ReportAdmin_right.ss']['WELCOME2'] = 'одељак за извештавање. Изаберите жељени извештај са леве стране.';
$lang['sr_RS']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Извештаји';
$lang['sr_RS']['SecurityAdmin']['ADDMEMBER'] = 'Додај члана';
$lang['sr_RS']['SecurityAdmin']['MENUTITLE'] = 'Безбедност';
$lang['sr_RS']['SecurityAdmin']['MENUTITLE'] = 'Zastita';
$lang['sr_RS']['SecurityAdmin']['NEWGROUP'] = 'Нова група';
$lang['sr_RS']['SecurityAdmin']['SAVE'] = 'Сачувај';
$lang['sr_RS']['SecurityAdmin']['SGROUPS'] = 'Безбедносне групе';
$lang['sr_RS']['SecurityAdmin_left.ss']['CREATE'] = 'Направи';
$lang['sr_RS']['SecurityAdmin_left.ss']['DEL'] = 'Избриши';
$lang['sr_RS']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Избриши изабране групе';
$lang['sr_RS']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Дозволи распоређивање превлачењем';
$lang['sr_RS']['SecurityAdmin_left.ss']['GO'] = 'Иди';
$lang['sr_RS']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Безбедносне групе';
$lang['sr_RS']['SecurityAdmin_left.ss']['SELECT'] = 'Изаберите стране које желите да избришете и кликните на дугме';
$lang['sr_RS']['SecurityAdmin_left.ss']['TOREORG'] = 'Да бисте организовали свој сајт, превуците стране како желите.';
$lang['sr_RS']['SecurityAdmin_right.ss']['WELCOME1'] = 'Добродошли у ';
$lang['sr_RS']['SecurityAdmin_right.ss']['WELCOME2'] = 'одељак за администрацију безбедности. Изаберите групу са леве стране.';
$lang['sr_RS']['SideReport']['EMPTYPAGES'] = 'Празне стране';
$lang['sr_RS']['SideReport']['LAST2WEEKS'] = 'Стране мењане у задње две недеље';
$lang['sr_RS']['SideReport']['REPEMPTY'] = 'Извештај %s је празан.';
$lang['sr_RS']['StaticExporter']['BASEURL'] = 'Основни URL';
$lang['sr_RS']['StaticExporter']['EXPORTTO'] = 'Извези у ову фасциклу';
$lang['sr_RS']['StaticExporter']['FOLDEREXPORT'] = 'Фасцикла за извожење';
$lang['sr_RS']['StaticExporter']['NAME'] = 'Извези статичне садржаје';
$lang['sr_RS']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Нема пронађених слика у';
$lang['sr_RS']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(изаберите фасциклу)';
$lang['sr_RS']['ViewArchivedEmail.ss']['CANACCESS'] = 'Можете да приступите архивираном садржају на овом линку:';
$lang['sr_RS']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Замољени сте да погледате садржај овог сајта';
$lang['sr_RS']['WaitingOn.ss']['ATO'] = 'додељено';
$lang['sr_RS']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Доступни виџети';
$lang['sr_RS']['WidgetAreaEditor.ss']['INUSE'] = 'Виџети који се тренутно користе';
$lang['sr_RS']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Тренутно нема доступних виџета.';
$lang['sr_RS']['WidgetEditor.ss']['DELETE'] = 'Обриши';

?>