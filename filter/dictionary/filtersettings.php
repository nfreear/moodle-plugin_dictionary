<?php
/**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2008/08/19
 * @package dictionary
 **/
$items = array();
$items[] = new admin_setting_configtext('filter_dictionary_name', '', get_string('dictionaryname', 'block_dictionary'), 'Larouse', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri', '', get_string('dictionaryurl', 'block_dictionary'), 'http://www.larousse.fr/encyclopedie/#recherche/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name1', '', get_string('dictionaryname', 'block_dictionary'), 'Dictionary.com', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri1', '', get_string('dictionaryurl', 'block_dictionary'), 'http://dictionary.reference.com/browse/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name2', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (english)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri2', '', get_string('dictionaryurl', 'block_dictionary'), 'http://en.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name3', '', get_string('dictionaryname', 'block_dictionary'), utf8_encode('Wikipedia (français)'), PARAM_TEXT); // Fix UTF-8 encoding.
$items[] = new admin_setting_configtext('filter_dictionary_uri3', '', get_string('dictionaryurl', 'block_dictionary'), 'http://fr.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name4', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri4', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name5', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri5', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name6', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri6', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name7', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri7', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name8', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri8', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);

foreach ($items as $item) {
    $settings->add($item);
	}
?>