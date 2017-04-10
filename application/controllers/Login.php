<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();	        				
	}

    public function index()
	{   		
        $this->load->view('login');	
	}

	public function check(){  
        $this->form_validation->set_rules('username', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){   
             $str = validation_errors();
             $res = $this->my_template->loadMessage(2,$str);  
             header('Content-Type: application/json');
             echo json_encode(array('ok'=>0,  'msg'=>$res));
             exit;
         }else{ 

             $return = $this->Users_model->check_login();
             if(!$return){
                $res = $this->my_template->loadMessage(2,"You don't have access permission.");  
                header('Content-Type: application/json');                
                echo json_encode(array('ok'=>0,  'msg'=>$res));
                exit;
             }else{
                //check users
                $sesID = $this->session->userdata('userID');
                $data =  $this->Users_model->get_data_byId($sesID);
                if ($data->userPassword == 'qwerty') {
                    $url_location1 = 'users';
                    $url_location2 = 'profile';
                } else {    
                    $url_location1 = 'home'; 
                    $url_location2 = '';
                }    
                echo json_encode(array( 'ok'=>1,  
                                        'urlpath1'=> strval($url_location1),
                                        'urlpath2'=> strval($url_location2)));
                exit;
             }             
         }
        
    }
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */