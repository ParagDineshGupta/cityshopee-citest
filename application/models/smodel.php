<?php
class Smodel extends CI_Model
{
  public function __construct()
        {
                parent::__construct();
               $this->load->database();
                 $this->load->library('session');
                 $this->load->database('cityshopee');
                
        }
function login($n,$p)
{

    $this->db->where("uname",$n);
    $this->db->where("password",$p);
    $data=$this->db->get("shopee");
    return $data->row();
}
function dataretrive($sid)
{
    $this->db->where("sid",$sid);
    $data=$this->db->get("shopee");
    return $data->row();
} 
function update1($post,$sid)
{

    $this->db->where("sid",$sid);
    $data=$this->db->update("shopee",$post);
   
} 
}
?>