<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller {
    
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();							
		$this->module = 'attendance';	
		$this->levelaccess = $this->session->userdata('userAccess');			
    }

    public function index()    
	{						
		$data['attendance'] = $this->Users_model->check_attendance();
		if (isset($data['attendance'] )){
			$data['ad'] = $this->Users_model->details_attendance($data['attendance']->attendanceID);
		} else{
			$data['ad'] = '';
		}	
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$data);
	}	

	public function postdata(){
		$this->Users_model->postattendance();
		redirect(base_url().'attendance');
	}

	
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */