  <?php
  /**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2008/08/19
 * @package dictionary
 **/
    class block_dictionary extends block_list {
    
	function init() {
	
        $this->title = get_string('dictionary', 'block_dictionary');
        $this->version = 2008081800;
		
    }
	
	
	function instance_allow_multiple() {
    return false;
	}
	
	function instance_allow_config() {
    return false;
}
	
	function get_content() {
	 global $CFG, $USER, $COURSE;
	 
	 $usedictionary = get_record("block_dictionary","courseid",$COURSE->id);
	 // Prevent warnings later.
	 if (!$usedictionary) {
	    $usedictionary = (object) array('id'=>0);
	 }
	 
	 if (!$usedictionary->id > 0) {
			$dictionaryname = get_string('nodictionary','block_dictionary');
			} else {
				if ($CFG->filter_dictionary_uri == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name; 
				} elseif ($CFG->filter_dictionary_uri1 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name1; 
				} elseif ($CFG->filter_dictionary_uri2 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name2; 
				} elseif ($CFG->filter_dictionary_uri3== $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name3; 
				} elseif ($CFG->filter_dictionary_uri4 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name4; 
				} elseif ($CFG->filter_dictionary_uri5 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name5;
				} elseif ($CFG->filter_dictionary_uri6 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name6; 
				} elseif ($CFG->filter_dictionary_uri7 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name7; 
				} elseif ($CFG->filter_dictionary_uri8 == $usedictionary->dictionary) {
					$dictionaryname = $CFG->filter_dictionary_name8; 
				} 
				
			}
	 
	 if (!isstudent($COURSE->id,$USER->id)) {
	 if($this->content !== NULL) {
            return $this->content;
        }
	
	        $this->content = new stdClass;
	        $this->content->footer = '';
	        $this->content->items = array();
			
			/// Display dictionary used
	        $this->content->items[] = get_string('selecteddictionary','block_dictionary').'<br>'.$dictionaryname;


			/// link to add dictionary
			if (!is_object($usedictionary) || !$usedictionary->id > 0) {
		        $this->content->items[] = "<a href=\"$CFG->wwwroot/blocks/dictionary/add.php?id=".$COURSE->id."\">".get_string('add', 'block_dictionary').'</a>';
			} else {
				$this->content->items[] = "<a href=\"$CFG->wwwroot/blocks/dictionary/edit.php?id=".$usedictionary->id."\">".get_string('edit', 'block_dictionary').'</a>';
			}
		} else {
		
		$this->content = new stdClass;
	        $this->content->footer = '';
	        $this->content->items = array();
			
			/// Display dictionary used
	        $this->content->items[] = '<center>'.get_string('activated','block_dictionary').'<br><b>'.$dictionaryname.'</b>';
			$this->content->items[] = '<p><font size=".1em">'.get_string('instructions','block_dictionary').'</font></p></center>';
		
		}
        
		return $this->content;
    }
	

    function instance_delete() {
	global $CFG,$COURSE;
        return delete_records('block_dictionary', 'courseid', $COURSE->id);
    }


}
	?>