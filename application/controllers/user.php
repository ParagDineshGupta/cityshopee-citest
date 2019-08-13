<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('umodel');
                 $this->load->helper('url');
        } 

	public function index()
	{
        $this->load->view('cust/inde');
	}

    public function categories()
    {
         
      $a= $this->input->get('area');
      $c= $this->input->get('submit');
        $result=$this->umodel->categories($a,$c);
         $data['aa']= $result;
         
        $this->load->view('cust/shops',$data);
         
    }
    public function shops()
  { 
   $myfile = $this->uri->segment(3);
 $myfolder=substr($myfile, 0, -4);
    $result=$this->umodel->detail($myfolder);
      $this->load->view('shops/sample2.php',$result); 
  }
   public function search()
    {
         
      $a= $this->input->get('search_bar');
        $result=$this->umodel->shop($a);
         $data['aa']= $result;
         
        $this->load->view('cust/shops',$data);
         
    }
    public function allshop()
    {
         
     
        $result=$this->umodel->allshop();
         $data['aa']= $result;
         
        $this->load->view('cust/shops',$data);
         
    }
      public function service()
    {     
       $this->load->view('cust/service');
         
    }
       public function emergency()
    {     
       $this->load->view('cust/emergency');
         
    }
     public function contact()
    {     
       $this->load->view('cust/contact');
         
    }
        
}
