<?php

i18n::include_locale_file('mysite', 'es_ES');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}


// Output for class or file: Cliente
$lang['es_ES']['Cliente']['CLIENT'] = 'Cliente';
$lang['es_ES']['Cliente']['PROYECTNAME'] = 'Nombre del proyecto';
$lang['es_ES']['Cliente']['YEAR'] = 'Año del proyecto';
$lang['es_ES']['Cliente']['DESCRIPTION'] = 'Datos adicionales del proyecto';

// Output for class or file: Page
$lang['es_ES']['Page']['FILESTAB'] = 'Archivos';
$lang['es_ES']['Page']['URLSEGMENT'] = 'url de esta página';
$lang['es_ES']['Page']['SHOWINHEADERMENU'] = 'Mostrar en el menú de la cabecera';
$lang['es_ES']['Page']['SHOWINFOOTERMENU'] = 'Mostrar en el menú del pié de página';
$lang['es_ES']['Page']['FEATURE'] = 'Destacar';
$lang['es_ES']['Page']['FRASE'] = 'Frase';
$lang['es_ES']['Page']['SEARCH'] = 'Buscar';
                              

// Output for class or file: Page_results
$lang['es_ES']['Page_results']['RESULTS'] = 'Resultados para la palabra: ';
$lang['es_ES']['Page_results']['READMOREABOUT'] = 'leer más acerca de ';
$lang['es_ES']['Page_results']['READMORE'] = 'leer más';
$lang['es_ES']['Page_results']['SEARCHEMPTY'] = 'no hay resultados';
$lang['es_ES']['Page_results']['NEXTPAGE'] = 'siguiente';
$lang['es_ES']['Page_results']['PREVPAGE'] = 'previo';
$lang['es_ES']['Page_results']['NORESULTS'] = 'no se encontraron resultados';
$lang['es_ES']['Page']['TRANSLATIONS'] = 'Seleccione lenguaje';
$lang['es_ES']['Head']['GOTO'] = 'ir a';


$lang['es_ES']['Head']['SLOGAN'] = 'Evidencia sobre el efecto de intervenciones en los sistemas de salud,<br />relevantes para países de ingresos bajos y medios';
$lang['es_ES']['Head']['SUPPORTSUMMARIES'] = 'Resúmenes Support';
$lang['es_ES']['HomePage']['SUPPORTSTRUCTUREDSUMMARIESOFSYSTEMATICREVIEWS'] = 'Resúmenes estructurados SUPPORT de revisiones sistemáticas';
$lang['es_ES']['HomePage']['BROWSESUMMARIES'] = 'Listar resúmenes';
$lang['es_ES']['Search']['OR'] = 'o ';

$lang['es_ES']['SearchResults']['PAGE'] = 'página';
$lang['es_ES']['SearchResults']['OF'] = 'de';

$lang['es_ES']['SupportSearchSidebar']['FILTERRESULTS'] = 'Filtrar Resultados';
$lang['es_ES']['SupportSearchSidebar']['PERCATEGORY'] = 'Por categoría';
$lang['es_ES']['SupportSearchSidebar']['ALLSUMMARIES'] = 'Todos los resúmenes';
$lang['es_ES']['SupportSearchSidebar']['PERYEAR'] = 'Por año';
$lang['es_ES']['SupportSearchSidebar']['ALL'] = 'Todos';
$lang['es_ES']['SupportSearchSidebar']['LASTYEAR'] = 'Último año';
$lang['es_ES']['SupportSearchSidebar']['LATEST5YEARS'] = 'Últimos 5 años';
$lang['es_ES']['SupportSearchSidebar']['LATEST10YEARS'] = 'Últimos 10 años';
