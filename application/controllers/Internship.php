<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internship extends CI_Controller {
    
	public $crud;
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();					
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'internship';				
    }

    public function index()
	{				
		$this->crud->columns('programs','terms','weeks','hours');
		$this->crud->display_as('programs','Programs')
				   ->display_as('terms','Terms')	
				   ->display_as('weeks','Weeks')	
			       ->display_as('hours','Hours');	
	    $this->crud->required_fields('programs','terms','weeks','hours');	
	    $this->crud->fields('programs','terms','weeks','hours');		    
	 	$this->crud->set_subject($this->module);  	 						
		$this->crud->set_table($this->module);			
		$output = $this->crud->render();				
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}

	public function trainingagreement(){
		$this->my_template->loadAdmin($this->module.'/trainingagreement','');
	}

	public function trackingform(){
		$return = $this->Users_model->submit_trainingAgreement();
		if ($return == 1){
			redirect(base_url().'timeio');
		}
	}

	
	
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */