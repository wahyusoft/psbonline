<?php
/**
 * Description of Users_model
 *
 * @author wahyu
 */
class Users_model extends CI_model{

	private $sessionID;

	public function __construct() {
        parent::__construct();       
        $this->sessionID = $this->my_template->mySessionID();       
        $this->table = 'users';       
    }

    public function get_data_byId($sessionID){
        $result = $this->db->get_where($this->table,array('userID'=>$sessionID));        
        return $result->row();
    }

      

    public function check_login(){
        $username = filter_string($this->input->post("username",true));
        $password = filter_string($this->input->post("password",true));
        $levelaccess = $this->input->post("student",true);
        $valpass = $password;       
        $result = $this->db->query("SELECT * FROM users WHERE userName='".strval($username)."'  AND userPassword='".$valpass."' "); 
        if ($result->num_rows() > 0){
            $row = $result->row();
            $newdata = array(
                'userID' => $row->userID,
                'FullName' => $row->FirstName.' '.$row->LastName,
                'userName' => $row->userName,
                'userAccess' => $row->userAccess,
                'alvatar' => $row->alvatar
            );
            $this->session->set_userdata($newdata);
            $this->update_activity(TRUE);
            return TRUE;
        }
        return FALSE;
    }


    public function update_activity($islogin){
        $array_data  = ($islogin)? array('lastlogin' => date('Y-m-d H:i:s'), 'islogin'=>1) : array('islogin'=>0);
        $this->db->where('userID', $this->sessionID);
        $this->db->update($this->table, $array_data);   
    }

    public function simpan_daftar($mypin){
        $tgl = filter_string($this->input->post("tgllahir",true));
        $data = array(
           'nama' => filter_string($this->input->post("nama",true)),
           'nis' => filter_string($this->input->post("nis",true)),
           'jk' => filter_string($this->input->post("jk",true)),
           'tmplahir' => filter_string($this->input->post("tmplahir",true)),
           'tgllahir' => convert_format($tgl),
           'agama' => filter_string($this->input->post("agama",true)),
           'anakke' => filter_string($this->input->post("anakke",true)),
           'jumsdrkandung' => filter_string($this->input->post("jumsdrkandung",true)),
           'jumsdrtiri' => filter_string($this->input->post("jumsdrtiri",true)),
           'hobi' => filter_string($this->input->post("hobi",true)),
           'dusun' => filter_string($this->input->post("dusun",true)),
           'rt' => filter_string($this->input->post("rt",true)),
           'rw' => filter_string($this->input->post("rw",true)),
           'desa' => filter_string($this->input->post("desa",true)),
           'kecamatan' => filter_string($this->input->post("kecamatan",true)),
           'kodepos' => filter_string($this->input->post("kodepos",true)),
           'namaayah' => filter_string($this->input->post("namaayah",true)),
           'namaibu' => filter_string($this->input->post("namaibu",true)),
           'pekerjaanayah' => filter_string($this->input->post("pekerjaanayah",true)),
           'pekerjaanibu' => filter_string($this->input->post("pekerjaanibu",true)),
           'agamaayah' => filter_string($this->input->post("agamaayah",true)),
           'agamaibu' => filter_string($this->input->post("agamaibu",true)),
           'pendidikanayah' => filter_string($this->input->post("pendidikanayah",true)),
           'pendidikanibu' => filter_string($this->input->post("pendidikanibu",true)),
           'penghasilanayah' => $this->input->post("penghasilanayah",true),
           'penghasilanibu' => $this->input->post("penghasilanibu",true),
           'dusunortu' => filter_string($this->input->post("dusunortu",true)),
           'rtortu' => filter_string($this->input->post("rtortu",true)),
           'rwortu' => filter_string($this->input->post("rwortu",true)),
           'desaortu' => filter_string($this->input->post("desaortu",true)),
           'kecamatanortu' => filter_string($this->input->post("kecamatanortu",true)),
           'namawali' => filter_string($this->input->post("namawali",true)),
           'kerjawali' => filter_string($this->input->post("kerjawali",true)),
           'agamawali' => filter_string($this->input->post("agamawali",true)),
           'dusunwali' => filter_string($this->input->post("dusunwali",true)),
           'rtwali' => filter_string($this->input->post("rtwali",true)),
           'rwwali' => filter_string($this->input->post("rwwali",true)),
           'desawali' => filter_string($this->input->post("desawali",true)),
           'kecamatanwali' => filter_string($this->input->post("kecamatanwali",true)),
           'asalsekolah' => filter_string($this->input->post("asalsekolah",true)),
           'alamatsekolah' => filter_string($this->input->post("alamatsekolah",true)),
           'prestasi17' => filter_string($this->input->post("prestasi17",true)),
           'prestasi27' => filter_string($this->input->post("prestasi27",true)),
           'prestasi18' => filter_string($this->input->post("prestasi18",true)),
           'prestasi28' => filter_string($this->input->post("prestasi28",true)),
           'prestasi19' => filter_string($this->input->post("prestasi19",true)),
           'prestasi29' => filter_string($this->input->post("prestasi29",true)),
           'thnmasuk' => filter_string($this->input->post("thnmasuk",true)),
           'thnlulus' => filter_string($this->input->post("thnlulus",true)),
           'kejuaraantingkat' => filter_string($this->input->post("kejuaraantingkat",true)),
           'juarake' => filter_string($this->input->post("juarake",true)),
           'jenis' => filter_string($this->input->post("jenis",true)),
           'userID'=>0,
           'jenis' => filter_string($this->input->post("jenis",true)),
           'jalur' => filter_string($this->input->post("jalur",true)),
           'tglpost'=>date('Y-m-d H:i:s'),
           'pin'=>$mypin
        );
        return $this->db->insert('pendaftaran', $data); 
        
    }

    public function datapendaftar(){
        $this->db->order_by("pendaftarId", "desc"); 
        return $this->db->get('pendaftaran');

    }

    public function pendaftarID($ID){
        $result = $this->db->get_where('pendaftaran',array('pendaftarId'=>$ID));        
        return $result->row();
    }

    public function pendaftarPIN($ID){
        $result = $this->db->get_where('pendaftaran',array('pin'=>$ID));        
        return $result->row();
    }

    

  }