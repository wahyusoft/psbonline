<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mydocuments extends CI_Controller {
    
	public $crud;
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();					
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'documents';	
		$this->levelaccess = $this->session->userdata('userAccess');		
    }

    public function index()
	{				
		$this->crud->columns('notes','filename');
		$this->crud->display_as('filename','File')
			       ->display_as('notes','Note');	
	    $this->crud->required_fields('notes','filename');	
	    $this->crud->fields('notes','filename');		    
	 	$this->crud->set_subject($this->module);  	 	
		if($this->levelaccess!='admin'){
			$this->crud->where('userID',$this->session->userdata('userID'));		
		}		
		$this->crud->set_field_upload('filename','assets/uploads/documents');		
		$this->crud->set_table($this->module);			
		$output = $this->crud->render();				
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}

	
	
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */