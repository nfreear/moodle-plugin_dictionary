<?php 
/**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2008/08/19
 * @package dictionary
 **/
    global $CFG,$COURSE;
    require_once('../../config.php');
    require_once($CFG->libdir.'/blocklib.php');

    $id         = required_param('id', PARAM_INT);  // course ID
    $instanceid = optional_param('instanceid', 0, PARAM_INT);
    $action     = optional_param('action', '', PARAM_ALPHA);

	$modrecord = get_record('block_dictionary','id', $id);
	$courseid = $modrecord->courseid;

    if (!$course = get_record('course', 'id', $courseid)) {
        error('Course ID was incorrect');
    }

    require_login($course->id);
    $context = get_context_instance(CONTEXT_COURSE, $courseid);


/// This block of code ensures that Quickmail will run 
///     whether it is in the course or not


	if ($form = data_submitted()) {   // data was submitted to be mailed
        confirm_sesskey();
		
		$courseid = $_REQUEST['courseid'];

        if (!empty($form->cancel)) {
            // cancel button was hit...
            redirect("$CFG->wwwroot/course/view.php?id=".$courseid);
        }
        
            // prepare an object for the insert_record function
            $log = new stdClass;
			$log->id = $id;
			$log->courseid = $courseid;
            $log->dictionary    = $_REQUEST['dictionary'];
            
            if (!update_record('block_dictionary', $log)) {
                error('No dictionary selected.');
            }
			redirect("$CFG->wwwroot/course/view.php?id=".$courseid);

            
        }
     
    

  

	print_header();
    print_box_start();
    require($CFG->dirroot.'/blocks/dictionary/edit.html');
    print_box_end();
    
    
    print_footer();
?>