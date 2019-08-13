<?php 
class Umodel extends CI_Model{
	public function __construct()
        {
                parent::__construct();
                $this->load->database();
                // Your own constructor code
        }


public function categories($a,$c)
{
     $this->db->like('delivery_locatons',$a);
     $this->db->like('shop_type',$c);
     $this->db->where('sstatus','open');
    $data=$this->db->get('shopee');
   return $data->result();
}
public function shop($a)
{
    
     $this->db->like('shop',$a);
       $this->db->where('sstatus','open');
    $data=$this->db->get('shopee');
   return $data->result();
}
public function allshop()
{
    
    
    $data=$this->db->get('shopee');
   return $data->result();
}
public function detail($myfile)
{
	
	 $this->db->like('shopfile',$myfile);
    $data=$this->db->get('shopee');
   return $data->row();
}


















        
    }
?>    