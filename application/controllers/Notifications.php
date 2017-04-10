<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifications extends CI_Controller {
    
	public $crud;
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();					
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'notifications';	
		$this->levelaccess = $this->session->userdata('userAccess');		
    }

    public function index($read='',$id='')    
	{						
		if(($read=='read')&&($id>0)){
			$this->Users_model->update_read($id,$this->session->userdata('userID'));
		}
		$this->crud->columns('subjecttxt','messagetxt','userID','latestpost');
		$this->crud->display_as('subjecttxt','Subject')
			       ->display_as('messagetxt','Message')
			       ->display_as('userID','Student')
			       ->display_as('latestpost','Date Post');	
	    $this->crud->required_fields('subjecttxt','messagetxt','userID','receiverID');	
	    $this->crud->fields('subjecttxt','messagetxt','userID','latestpost');	
	    $this->crud->change_field_type('latestpost','invisible'); 	
	 	$this->crud->set_subject($this->module);  
	 	$this->crud->callback_before_insert(array($this,'callback_insert'));   
	 	$query = $this->db->query("select userID,studentNumber,FirstName from users where userAccess='intern'");
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $key => $v) {
                $item_list[$v['userID']] = $v['studentNumber'].' - '.$v['FirstName']; 
            };
             $this->crud->field_type('userID', 'dropdown', $item_list);
        }	
		$this->crud->set_table($this->module);	
		if($this->levelaccess!='admin'){
			$this->crud->where('userID',$this->session->userdata('userID'));		
			$this->crud->unset_edit();
			$this->crud->unset_delete();						
			$this->crud->unset_add();
		}		
		$output = $this->crud->render();				
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}	

	function callback_insert($post_array)
	{
	  $post_array['latestpost'] = date('Y-m-d H:i:s');	
	  return $post_array;
	}

	
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */