<?php 

/**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2008/08/19
 * @package dictionary
 **/
function dictionary_filter($courseid,$text) {
	global $CFG, $COURSE;
	
	//require_js($CFG->wwwroot.'/filter/dictionary/dictionary.php');
	$usedictionary = get_record("block_dictionary","courseid",$COURSE->id);
	
	// Check we have an object before de-referencing 
	// (prevent PHP notice "Trying to get property of non-object..")
	if (is_object($usedictionary) && $usedictionary->id >=1) {
//	if ($usedictionary->id >=1) {
		$dictionaryhtml = '<span ondblclick="getSelText(\''.$usedictionary->dictionary.'\')">'.$text.'</span>';
	} else {
		$dictionaryhtml = $text; //if no records found do nothing to text
	}
	
	return $dictionaryhtml;
		
}


?>