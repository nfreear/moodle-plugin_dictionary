<?php
/**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2008/08/19
 * @package dictionary
 **/

    require_once('../../config.php');
    require_once($CFG->libdir.'/blocklib.php');

    $id         = required_param('id', PARAM_INT);  // course ID
    $instanceid = optional_param('instanceid', 0, PARAM_INT);
    $action     = optional_param('action', '', PARAM_ALPHA);



    if (!$course = get_record('course', 'id', $id)) {
        error('Course ID was incorrect');
    }

    require_login($course->id);
    $context = get_context_instance(CONTEXT_COURSE, $course->id);



/// This block of code ensures that Quickmail will run 
///     whether it is in the course or not


	if ($form = data_submitted()) {   // data was submitted to be mailed
        confirm_sesskey();

        if (!empty($form->cancel)) {
            // cancel button was hit...
            redirect("$CFG->wwwroot/course/view.php?id=".$id);
        }
        
            // prepare an object for the insert_record function
            $log = new stdClass;
            $log->courseid   = $course->id;
            $log->dictionary    = $_REQUEST['dictionary'];
            
            if (!insert_record('block_dictionary', $log)) {
                error('No dictionary selected.');
            }
			redirect("$CFG->wwwroot/course/view.php?id=".$id);

            
        }
     
    

  


    print_simple_box_start('center');
    require($CFG->dirroot.'/blocks/dictionary/add.html');
    print_simple_box_end();
    
    
    print_footer($course);
?>