<?php defined('BASEPATH') OR exit('NO DIRECT SCRIPT ACCESS ALLOWED');
class Admin extends CI_Controller{

public function __construct()
	{
		parent::__construct();
		$this->load->model("amodel");
		$this->load->helper('form');
		 $this->load->library('session');
		 $this->load->helper('url');
	}
public function index()
	{ 
		//$this->load->view('login');
		$this->admin();	

	}	
public function admin()
	{
		if(isset($_POST['submit']))
      { $n=$_POST['name'];
        $p=$_POST['pass'];
		$result=$this->amodel->login($n,$p);
		
		 if (isset($result->admin_id)) {
				$this->session->aid=$result->admin_id;
				$this->session->a_name=$result->admin_name;
				 $this->header();
			$this->load->view('adm/access');	
			}
		else
			$this->load->view('adm/login');
			
		 	
	}
	elseif (isset($this->session->aid)) {
		  $this->header();
			$this->load->view('adm/access');
	}
	else
		$this->load->view('adm/login');
}
public function header()
	{
		if (!isset($this->session->aid))
			{redirect("http://127.0.0.1/citest/index.php/admin");	}
		else
		{  $result=$this->amodel->request();
	       $this->load->view('adm/header',$result);
	    }
	}	 

	//add nsr me or bhi kuch krna hai
public function act(){
 $id=$this->uri->segment(3);
 $result=$this->amodel->request();
 	$fn=$this->amodel->act($id,$result->val);
 	$result=$this->amodel->request();
// 	 // $this->request($result->val);
	//$this->request();
$myfile = str_replace(' ', '',$fn->shop.$id);
// mkdir("application/views/shops/".$myfile);
mkdir("images/".$myfile);
//*******File code
//  			$fileName1 = "application/views/shops/sample.php";
// $fp1 = fopen($fileName1,"r");
// if( $fp1 == false )
// {
//   echo ( "Error in opening file" );
//   exit();
// }
// else{
	
// 	$fileName = "application/views/shops/".$myfile.'/'.$myfile.".php";
// $fp = fopen($fileName,"w");
// if( $fp == false )
// {
//   echo ( "Error in opening file" );
//   exit();
// }
//   $datas=" ";
// while(!feof($fp1))
// {
//   $datas=$datas.fgets($fp1);
// }	
// fwrite( $fp, $datas );

// fclose($fp);
// fclose($fp1);
// }


//**********
// $fileName1 = "application/views/shops/sample2.php";
// $fp1 = fopen($fileName1,"r");
// if( $fp1 == false )
// {
//   echo ( "Error in opening file" );
//   exit();
// }
// else{
// 	$myfile2=$myfile."view";
// 	// mkdir("application/views/shopview/".$myfile2);
// 	$fileName = "application/views/shops/".$myfile.'/'.$myfile2.".php";
// $fp = fopen($fileName,"w");
// if( $fp == false )
// {
//   echo ( "Error in opening file" );
//   exit();
// }
//   $datas=" ";
// while(!feof($fp1))
// {
//   $datas=$datas.fgets($fp1);
// }	
// fwrite( $fp, $datas );

// fclose($fp);
// fclose($fp1);
// }

$this->amodel->fileupload($myfile,$fn->sid);

//********end file code

// $to= "9584777921@springedge.com";
// $message= "Congratulations,Your shop has been registered\n";
// $from= "http://127.0.0.1/citest/index.php/admin/";
// $header = "from:".$from."\n";
// mail($to, '',$message, $headers);



	 redirect("http://127.0.0.1/citest/index.php/admin/request/".$result->val);
	 
}
public function suspend(){
 $id=$this->uri->segment(3);
 $result=$this->amodel->request();
 	$this->amodel->susp($id,$result->val);
 	$result=$this->amodel->request();
// 	 // $this->request($result->val);
	//$this->request();
	 redirect("http://127.0.0.1/citest/index.php/admin/request/".$result->val);
	 
}
public function reject(){
 $id=$this->uri->segment(3);
 $result=$this->amodel->request();
 	$this->amodel->rej($id,$result->val);
 	$result=$this->amodel->request();
// 	 // $this->request($result->val);
	//$this->request();
	 redirect("http://127.0.0.1/citest/index.php/admin/request/".$result->val);
	 
}
public function request()
	{   $limit = $this->uri->segment(3);
		 if($limit==" "){$result1=$this->amodel->request();
		 $limit=$result1->val;}
		 $this->header();
		   $result=$this->amodel->nsr($limit); 
		    $data['aa']= $result;
		   $this->load->view('adm/newshoprequest',$data);	
	}
public function view()
	{


		 $this->header();
		 $result=$this->amodel->shopee(); 
		    $data['aa']= $result;

		$this->load->view('adm/viewshop',$data);	
	}
function update(){
             $id = $this->uri->segment(3);
           
            if ($_POST) {
                $d = date('d-m-Y');
               $mydata = array("email"=>$_POST['em'],"shop"=>$_POST['shop'],"mob"=>$_POST['mob'],"shopkeeper"=>$_POST['skn']);            
               $this->amodel->updateshop($id,$mydata);
               redirect("admin/view");
           }else{
           	 $this->header();
            $data['aa'] =  $this->amodel->shopee2($id);
            $this->load->view("adm/updateshop",$data);
           }
        }
public function delete()
	{
    $id=$this->uri->segment(3);
    $this->amodel->delete($id);
    //delete related file
    //delete related row in db


 	redirect("http://127.0.0.1/citest/index.php/admin/view");

	}
public function read()
	{
		 $this->header();
		$this->load->view('adm/readdata');	
	}









































	
	
public function profile()
	{

// $my_file = 'file.txt';
// $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
		 $this->header();
		$this->load->view('adm/changeprofile');	
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
     $this->header();
}

}