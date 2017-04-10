<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftar extends CI_Controller {
    
    public $crud;
    public $module;     
    
    public function __construct() {
        parent::__construct();                  
        $this->crud = new grocery_CRUD();        
        $this->crud->set_theme('datatables');
        $this->module = 'pendaftaran';                            
    }

    public function index()
	{   
        $this->crud->columns('nama','asalsekolah','tglpost');
        $this->crud->display_as('nama','Nama Lengkap')
                   ->display_as('asalsekolah','Sekolah Asal')    
                   ->display_as('tglpost','Tgl Daftar');   
        $this->crud->required_fields('nis','nama','tmplahir','tgllahir','dusun','namaayah','asalsekolah');                   
        $this->crud->set_subject($this->module);                            
        $this->crud->set_table($this->module);          
        $output = $this->crud->render();                
        $this->my_template->loadAdmin('pendaftar/index',$output);
	}

    public function downloadpdf($id){   
        $this->my_template->cekAuth();      
        include("./vendor/autoload.php");        
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        define('DOMPDF_ENABLE_REMOTE',true);        
        require_once './vendor/dompdf/dompdf/dompdf_config.inc.php';
        $dompdf = new DOMPDF();
        $data['siswa']=$this->Users_model->pendaftarID($id);
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