<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
    
	public $crud;
	public $module;	
	public $levelaccess;
	
    public function __construct() {
        parent::__construct();					
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'evaluation';	
		$this->levelaccess = $this->session->userdata('userAccess');		
    }

    public function index($read='',$id='')    
	{						

		$this->crud->columns('userID','work_regular','readines');
		$this->crud->display_as('userID','Student')
				   ->display_as('work_regular','Work Regular')	
				   ->display_as('readines','Readines')	
			       ->display_as('reviwerID','Reviewer');	
	    $this->crud->required_fields('userID','work_regular','readines','reviwerID');	
	    $this->crud->fields('userID','work_regular','readines','reviwerID');		    
	 	$this->crud->set_subject($this->module);  
	 	

	 	$query = $this->db->query("select userID,studentNumber,FirstName from users where userAccess='intern'");
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $key => $v) {
                $item_list[$v['userID']] = $v['studentNumber'].' - '.$v['FirstName']; 
            };
             $this->crud->field_type('userID', 'dropdown', $item_list);
        }

        if($this->levelaccess == 'admin'){
        	$query1 = $this->db->query("select userID,FirstName from users where userAccess='supervisor'");
		    if($query1->num_rows() > 0){
		            foreach ($query1->result_array() as $key1 => $v1) {
		                $item_list1[$v1['userID']] = $v1['FirstName']; 
		            };
		             $this->crud->field_type('reviwerID', 'dropdown', $item_list1);
		    }	
        }elseif($this->levelaccess== 'supervisor'){
        	$this->crud->callback_before_insert(array($this,'callback_insert'));
        	$this->crud->field_type('reviwerID', 'hidden');  
        }


       $point = array('Poor' => 'Poor' ,
       				  'Below Average' => 'Below Average',
       				  'Average' => 'Average',
       				  'Above Average' => 'Above Average',
       				  'Outstanding' => 'Outstanding' );  
       	$this->crud->field_type('work_regular','dropdown', $point);
       	$this->crud->field_type('readines','dropdown', $point);
		$this->crud->set_table($this->module);	
			
		$output = $this->crud->render();				
		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
	}	

	function callback_insert($post_array)
	{
	  $post_array['reviwerID'] = $this->session->userdata('userID');	
	  return $post_array;
	}

	
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */