<?php defined('BASEPATH') OR exit('NO DIRECT SCRIPT ACCESS ALLOWED');
class Shopkeeper extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("smodel");
		 $this->load->library('session');
		 $this->load->helper('url');
		 $this->load->library('upload');

		 $this->load->helper('form');
	} 

	public function index()
	{$wrong['message']='';
				$this->load->view('spk/slogin',$wrong);
		 
		 // $this->load->view('shopk');
		  // $this->load->view('spk/slogin');
		
		
	}
		public function signup()
	{
		 
		 $this->load->view('spk/shopk');
		  
	}
	function logout()
{
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    $this->index();
    // $this->load->view('spk/slogin'); 
}
	public function spk()
	{ 
		
		if(isset($_POST['submit']))
      { $n=$_POST['name'];
        $p=$_POST['pass'];
		$result=$this->smodel->login($n,$p);
		if (isset($result->sid)) {
				$this->session->sid=$result->sid;
				$this->session->sname=$result->uname;
				$this->session->sfile=$result->shopfile;
				$this->load->view('shops/sample.php',$result);
			}
			else{
				$wrong['message']='wrong password';
				$this->load->view('spk/slogin',$wrong);
			}
				
	}
	elseif (isset($this->session->sid)) {
		 $result=$this->smodel->dataretrive($this->session->sid);
			$this->load->view('shops/sample.php',$result);
	}
	else{
		 $wrong['message']='';
		$this->load->view('spk/slogin',$wrong);
	}
		
}
public function update()
{$this->load->library('upload');
		$config['upload_path'] = './images/'.$this->session->sfile.'/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		// $config['encrypt_name'] = TRUE;
		$config['max_size']     = '10240';
$config['max_width']     = '6000';
$config['max_height']     = '6000';


		$this->load->library('upload', $config);
		$this->upload->initialize($config);

	if (isset($_POST['submit1'])) {

if(isset($_FILES['menu1']['name']))
			{
             $_POST['menu1']=$_FILES['menu1']['name'];
             $this->upload->do_upload('menu1');
             }
             
$this->upload->initialize($config);
if(!empty($_FILES['menu2']['name']))
			{
             $_POST['menu2']=$_FILES['menu2']['name'];
             $this->upload->do_upload('menu2');
             }
$this->upload->initialize($config);
if(isset($_FILES['menu3']['name']))
			{
             $_POST['menu3']=$_FILES['menu3']['name'];
             $this->upload->do_upload('menu3');
             }
 
$this->upload->initialize($config);
if(isset($_FILES['qualitycard']['name']))
			{
             $_POST['qualitycard']=$_FILES['qualitycard']['name'];
             $this->upload->do_upload('qualitycard');
             }  
  if(isset($_FILES['offercard']['name']))
			{
             $_POST['offercard']=$_FILES['offercard']['name'];
             $this->upload->do_upload('offercard');
             }  

 foreach($_POST as $key => $value)
 { 
 	if(empty($value))
    unset($_POST[$key]);
                
 }
      
		unset($_POST['submit1']);
		$result=$this->smodel->update1($_POST,$this->session->sid);
		$this->spk();
	
	}
	//_______________________________________________________________________________________
	else if (isset($_POST['submit2'])) {
		
		if ( ! $this->upload->do_upload('simage'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			// $this->load->view('upload_success', $data);

	        if(isset($_FILES['simage']))
	        {
             $_POST['simage']=$_FILES['simage']['name'];
		    }

		}

if ( ! $this->upload->do_upload('logo'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			if(isset($_FILES['logo']))
			{
             $_POST['logo']=$_FILES['logo']['name'];
             }
		}

		 foreach($_POST as $key => $value)
 { 
 	if(empty($value))
    unset($_POST[$key]);
                
 }

	unset($_POST['submit2']);
	$result=$this->smodel->update1($_POST,$this->session->sid);
		$this->spk();
	}
	else if (isset($_POST['submit3'])) {
        unset($_POST['submit3']);
		$result=$this->smodel->update1($_POST,$this->session->sid);
		$this->spk();
	
	}
	else if (isset($_POST['submit4'])) {
        unset($_POST['submit4']);
		$result=$this->smodel->update1($_POST,$this->session->sid);
		$this->spk();
	
	}
	else
	{
$this->spk();
	}
}

}