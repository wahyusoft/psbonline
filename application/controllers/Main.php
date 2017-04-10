<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();					
		
	}	

    public function index()
	{   
		$data['title'] = 'Dashboard ';
		$data['pendaftar'] = $this->Users_model->datapendaftar();
        $this->load->view('main',$data);		
	}

	public function cetak(){		
		$this->load->view('pendaftar/cetak');
	}

	public function register(){  
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('tmplahir', 'Tgl lahir', 'required');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('alamatsekolah', 'Alamat sekolah', 'required');
        $this->form_validation->set_rules('asalsekolah', 'Asal sekolah', 'required');
        if ($this->form_validation->run() == FALSE){   
             $str = validation_errors();
             $res = $this->my_template->loadMessage(2,$str);  
             header('Content-Type: application/json');
             echo json_encode(array('ok'=>0,  'msg'=>$res));
             exit;
         }else{ 

             $return = $this->Users_model->simpan_daftar();
             if(!$return){
                $res = $this->my_template->loadMessage(2,"Pendaftaran gagal.");  
                header('Content-Type: application/json');                
                echo json_encode(array('ok'=>0,  'msg'=>$res));
                exit;
             }else{
               $res = $this->my_template->loadMessage(1,"Pendaftaran berhasil.");  
                header('Content-Type: application/json');                
                echo json_encode(array('ok'=>0,  'msg'=>$res));
                exit;
             }             
         }
        
    }
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */