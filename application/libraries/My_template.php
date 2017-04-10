<?php if(!defined('BASEPATH')) exit('Tidak boleh ngakses langsung mas bro !');
/**
 * Description of My_template
 *
 * @author wahyu widodo
 */
class My_template {
	
	var $template_data = array();
	
	public function __construct(){
		$this->ci = & get_instance();			
	}	
	
	public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }
	
	public function loadAdmin($view_name = '' , $view_data = array(), $return = FALSE){
        $this->cekAuth();
        $userID = $this->ci->session->userdata('userID');
    	$this->set('contents', $this->ci->load->view($view_name, $view_data, TRUE));	
        $this->set('fullname', $this->ci->session->userdata("FullName"));    
        $this->set('userAccess', $this->ci->session->userdata("userAccess"));
        $this->set('picture', $this->ci->session->userdata("alvatar")); 
		$this->ci->load->view('layout_admin',$this->template_data, $return);
	}
	
	public function MenuAdmin(){		
		$nav = '<ul class="sidebar-menu">
				 <li class="header">Menu</li>';
        $level = $this->ci->session->userdata("userAccess");
        $array_menu = array(""=>"Dashboard",
                            "pendaftar"=>"Pendaftar Masuk",
                            "users"=>"Pengguna Sistem");
        $icons = array('dashboard','users','users');			
          
		$i=0;
		foreach($array_menu as $row=>$key){
			$is_Act = $this->ci->uri->segment(1);	
			$css = ($is_Act==$row)? 'class="active"' : '';
			$nav.='<li '.$css.' >'.anchor(base_url().$row,'<i class="fa fa-'.$icons[$i].'"></i> <span>'.$key).'</span></li>';
			$i++;
		}
		$nav .='</ul>';
		return $nav;		
	}

    
  public function cekAuth(){
        $name = $this->ci->session->userdata('userName');
        if(trim($name) == "" ){            
            $msg = ' <div class="alert alert-danger alert-block fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><strong>You do not have access this pages.</strong></p>
                            <p></p>
                      </div>';
            header('Content-Type: application/json');
            $res = $this->loadMessage(2,"You don't have access permission.");  
            header('Content-Type: application/json');                
            echo json_encode(array('ok'=>0,  'msg'=>$res));           
            redirect(site_url("login"));
            exit;
        }
    }

    
    public function mySessionID(){
        $userID = $this->ci->session->userdata('userID');
        return empty($userID)? 1 : $userID;
    }

    public function loadMessage($msgType,$text_message){
        switch ($msgType) {
            case 1 :  $msgType = 'alert-success'; 
                      $msgTitle = 'Success!';
                      $msgIcon = 'fa-check';
                break;
            case 2 :  $msgType = 'alert-danger';                    
                      $msgTitle = 'Error!';  
                      $msgIcon = 'fa-times-circle';
                break;
            case 3 : $msgType = 'alert-warning';                    
                     $msgTitle = 'Warning!';
                     $msgIcon = 'fa-times';
                break;
            case 4 : $msgType = 'alert-info';                    
                     $msgTitle = 'Info!';
                     $msgIcon = 'fa-info-circle';
                break;           
        } 
        return ' <div class="alert '.$msgType.' alert-block fade in alert-dismissable">                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><div style="float:left;margin-right:10px;"><i class="fa '.$msgIcon.' icon"></i></div>  <strong>'.$msgTitle.'</strong></p>
                    <p>'.$text_message.'</p>
              </div>';        
    }
	
}

?>