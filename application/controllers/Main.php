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
             $mypin = RandomString(5);
             $return = $this->Users_model->simpan_daftar($mypin);
             if(!$return){
                $res = $this->my_template->loadMessage(2,"Pendaftaran gagal.");  
                header('Content-Type: application/json');                
                echo json_encode(array('ok'=>0,  'msg'=>$res));
                exit;
             }else{
               $res = $this->my_template->loadMessage(1,"Pendaftaran berhasil.");  
                header('Content-Type: application/json');   
                $button= '<a class="btn btn-primary" href="'.base_url().'main/downloadpdf/'.$mypin.'" role="button"><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download PDF</a>';             
                echo json_encode(array('ok'=>0,  'msg'=>$res,'btn'=>$button));
                exit;
             }             
         }        
    }

    public function downloadpdf($id){           
        include("./vendor/autoload.php");        
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        define('DOMPDF_ENABLE_REMOTE',true);        
        require_once './vendor/dompdf/dompdf/dompdf_config.inc.php';
        $dompdf = new DOMPDF();
        $data['siswa']=$this->Users_model->pendaftarPIN($id);
        $html = $this->load->view('pendaftar/cetak',$data,true);        
        $dompdf->load_html($html);
        $dompdf->set_paper('legal', 'potrait');
        $dompdf->render();
        $namax=$data['siswa']->nama;
        $dompdf->stream("formulir-$namax.pdf");

    }
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */