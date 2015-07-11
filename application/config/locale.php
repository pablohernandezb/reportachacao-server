<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * @package  Core
 *
 * Default language locale name(s).
 * First item must be a valid i18n directory name, subsequent items are alternative locales
 * for OS's that don't support the first (e.g. Windows). The first valid locale in the array will be used.
 * @see http://php.net/setlocale
 */
$config['language'] = array('en_ES', 'English (US)');

/**
 * All Available Languages
 * Activate new languages by adding them to this array
 */
$config['all_languages'] = array ( 'en_US'=>'English (US)', 'fr_FR'=>'Français', 'es_VE'=>'Spanish (VE)', 'es_PE'=>'Spanish (PE)', 'es_ES'=>'Spanish (ES)', 'es_AR'=>'Spanish (AR)');

/**
 * Locale timezone. Defaults to use the server timezone.
 * @see http://php.net/timezones
 */
$config['timezone'] = 'America/Caracas';

/**
 * Force text-direction to be either LTR or RTL
 * Possible values: 'rtl' 'ltr' or FALSE
 * @see Ush_Locale::is_rtl_language()
 */
$config['force_text_direction'] = FALSE;
