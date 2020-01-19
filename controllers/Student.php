<?php
class Student extends CI_Controller {

        public function show_students()
        {
        	$data['student_list'] = array('Madu','lanti','yasiru');
        	$this->load->view('Student_record',$data);
        }
}
?>