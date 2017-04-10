<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {
    
    public $crud;
    public $module;     
    
    public function __construct() {
        parent::__construct();                  
        $this->crud = new grocery_CRUD();
     
        $this->crud->unset_back_to_list();
        $this->crud->set_theme('datatables');
        $this->module = 'users';            
        $state_code = $this->crud->getState();        
        if($state_code == 'list') {
                redirect("registration/index/add/");
        }
        $segment_object = $this->crud->getStateInfo();
    }

    public function index()
	{   		
        $this->crud->columns('studentNumber','FirstName','StudentYear');
        $this->crud->display_as('studentNumber','Student Number')
                   ->display_as('FirstName','First Name')
                   ->display_as('StudentYear','Year')
                   ->display_as('emailAddress','Email');
                   
        $this->crud->required_fields('FirstName','studentNumber','userName','StudentYear','emailAddress'); 
        $this->crud->add_fields('studentNumber','FirstName','LastName','studentAddress','userName','StudentYear','emailAddress','alvatar','userPassword');
        $this->crud->field_type('userPassword', 'hidden');        
        $this->crud->set_field_upload('alvatar','assets/uploads/users');    
        $this->crud->set_subject($this->module);        
        $this->crud->set_table($this->module);  
        $this->crud->callback_before_insert(array($this,'password_default'));
        $output = $this->crud->render();        
        $this->load->view('signup',$output);	
	}


    public function password_default($post_array, $primary_key = null)
    {           
        $post_array['userPassword'] = 'qwerty';
        $post_array['userAccess'] = 'intern';
        return $post_array;
      
    }
         
	
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */