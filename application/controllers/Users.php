<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    
	public $crud;
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();					
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'users';	
		$this->levelaccess = $this->session->userdata('userAccess');
		$this->load->helper('security');
    }

    public function index()
	{				
		$this->crud->columns('FirstName','userName','userAccess');
		$this->crud->display_as('FirstName','First Name')
			       ->display_as('userName','User Name')
			       ->display_as('userPassword','Password')
			       ->display_as('islogin','Is Login')
			       ->display_as('userAccess','Level Access');	
	   
	    $this->crud->fields('FirstName','LastName','userName','userPassword','userAccess','alvatar');
	 	$this->crud->set_field_upload('alvatar','assets/uploads/users');	
	 	$this->crud->set_subject($this->module);       	
		$this->crud->set_table($this->module);	
		
		if($this->levelaccess!='admin'){
			$this->crud->where('userAccess',$this->levelaccess);
			$this->crud->fields('FirstName','LastName','userName','userPassword','alvatar');
		}else{

		}
		$this->crud->callback_before_update(array($this,'encrypt_password'));
		$output = $this->crud->render();				
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}

	public function students()
	{				
		$this->crud->columns('studentNumber','FirstName','StudentYear');
		$this->crud->display_as('studentNumber','Student Number')
			       ->display_as('FirstName','First Name')
			       ->display_as('StudentYear','Year')
			       ->display_as('userPassword','Password')
			       ->display_as('islogin','Is Login')
			       ->display_as('userAccess','Level Access');	
	    $this->crud->required_fields('FirstName','studentNumber','userName',
	    					'userAccess','userAccess');	
	    $this->crud->fields('studentNumber','FirstName','LastName','studentAddress',
	    					'userName','StudentYear','emailAddress','alvatar','userAccess','userPassword');
	 	$this->crud->set_field_upload('alvatar','assets/uploads/users');	
	 	$this->crud->set_subject('Students');       	
		$this->crud->set_table($this->module);			
		$this->crud->where('userAccess','intern');	
		
		if($this->levelaccess=="supervisor") {
			$this->crud->unset_edit();
			$this->crud->unset_delete();						
			$this->crud->unset_add();
		}		
		$this->crud->callback_before_insert(array($this,'password_default'));
		$output = $this->crud->render();		
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}


	public function supervisor()
	{				
		$this->crud->columns('FirstName','userName','userAccess');
		$this->crud->display_as('FirstName','First Name')
			       ->display_as('userName','User Name')
			       ->display_as('userPassword','Password')
			       ->display_as('islogin','Is Login')
			       ->display_as('userAccess','Level Access');	
	   
	    $this->crud->fields('FirstName','LastName','userName','userPassword','userAccess','alvatar');
	 	$this->crud->set_field_upload('alvatar','assets/uploads/users');	
	 	$this->crud->set_subject('Supervisor');       	
		$this->crud->set_table($this->module);			
		$this->crud->where('userAccess','supervisor');	
		
		if($this->levelaccess=="supervisor") {
			$this->crud->unset_edit();
			$this->crud->unset_delete();						
			$this->crud->unset_add();
		}		
		$this->crud->callback_before_insert(array($this,'password_default'));
		$output = $this->crud->render();		
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}


	public function profile(){				
		redirect(base_url().'users/index/edit/'.$this->session->userdata('userID'));		
	}

	public function signout(){
		$this->Users_model->update_activity(FALSE);
        $newdata = array(
               'userID' => '',
                'FullName' => '',
                'userName' => '',
                'userAccess' => '',
                'alvatar' => ''
            );
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
		redirect('login');
	}

	public function encrypt_password($post_array, $primary_key = null)
	{	  		
		$post_array['userPassword'] = $post_array['userPassword'];
		return $post_array;
	  
	}

	public function password_default($post_array, $primary_key = null)
	{	  		
		$post_array['userPassword'] = 'qwerty';		
		return $post_array;
	  
	}
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */