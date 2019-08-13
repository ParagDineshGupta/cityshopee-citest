<?php 
class Amodel extends CI_Model{
	public function __construct()
        {
                parent::__construct();
                $this->load->database();
                // Your own constructor code
        }
function login($n,$p)
{
    $this->load->database('sell');
    $this->db->where("admin_name",$n);
    $this->db->where("password",$p);
    $data=$this->db->get("admin_tbl");
    return $data->row();
} 
function request()
{
    
    $data=$this->db->get("newshops");
    return $data->row();
}
function nsr($limit)
{
    $this->db->limit($limit);
    $this->db->where("check","unchecked");
    $data=$this->db->get("shopkeepers");
    return $data->result();
} 
function act($id,$vv)
{
    $mydata=array("check"=>"checked");
    $this->db->where("sid",$id);
    $data=$this->db->update("shopkeepers",$mydata);

   $v=array("val"=>$vv-1);
    $this->db->update("newshops",$v);

$this->db->where("sid",$id);
    $data=$this->db->get("shopkeepers");
    $mydata=$data->row();
    $mydata->date_time=date('Y-m-d H:i:s');
     $mydata->sid=' ';
     $mydata->shopview=' ';
     $mydata->shopfile=' ';
       $mydata->uname= $mydata->shopkeeper;
       $mydata->password= $mydata->mob;
       $mydata->sstatus='close';
       $mydata->timing='';

     unset($mydata->check);
     //array_pop($mydata->check);
     $this->db->insert("shopee",$mydata);
        $insert_id = $this->db->insert_id();
        $mydata->sid= $insert_id; 
    //abhi or bhi hai
    return $mydata;

   
}

function fileupload($f1,$id)
{
    $mydata=array("shopfile"=>$f1);
    $this->db->where("sid",$id);
    $data=$this->db->update("shopee",$mydata);

}
function rej($id,$vv)
{
    $mydata=array("check"=>"deleted");
    $this->db->where("sid",$id);
    $data=$this->db->update("shopkeepers",$mydata);

   $v=array("val"=>$vv-1);
    $this->db->update("newshops",$v);    
} 
function susp($id,$vv)
{$v=array("val"=>$vv-1);
    $this->db->update("newshops",$v);
 $mydata=array("check"=>"suspended");
    $this->db->where("sid",$id);
    $data=$this->db->update("shopkeepers",$mydata);

}
function shopee()
{
    
    $data=$this->db->get("shopee");
    return $data->result();
}  
function shopee2($id)
{
     $this->db->where("sid",$id);
    $data=$this->db->get("shopee");
    return $data->row();
}
function delete($id)
{
     $this->db->where("sid",$id);
    $data=$this->db->delete("shopee"); 
}
function updateshop($id,$mydata)
{
    $this->db->where("sid",$id);
$data=$this->db->update("shopee",$mydata);   
    
}

}
?>