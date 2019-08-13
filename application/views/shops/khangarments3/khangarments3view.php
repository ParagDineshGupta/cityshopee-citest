<html>
<head>
<style>
/*img:hover
{
	width:auto;
	hight:auto;
}*/
 /*img {
    transition: -webkit-transform 0.25s ease;
    transition: transform 0.25s ease;
}*/

img:hover {
    -webkit-transform: scale(5);
    transform: scale(5);
}

 </style>
<script> 
function fun()
{

	 document.getElementById('id1').style.width = '1000px';
}
</script>

<title>Shop information</title>

<body style="margin:0px; top:0px ">

<div style=" width=100% ;min-height:60px ;background-color:#6c36c5"><span> &nbsp<a style="color:white;"  href="javascript:history.go(-1)">BACK</a></span> &nbsp &nbsp &nbsp <span ><a style="color:white;" href="<?php echo base_url();  ?>">HOME</a></span>
<center>
<span style="color:white;font-family:areil;font-size:24px;"><i><?php echo $shop ?></i></span>

</center>
</div>

 <div style=" width:70% ;float:left; background-color:#bec0e9 ;min-height:600px" >

 <div style="  background-color:;min-height:300px">
 Product List
 <center>

<br>
<table cellspacing="60">

 <tr>
 <td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu1)  ;?>" id="id1" onclick="fun1()" height=90px width=90px alt=menu1/></td>
<td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu2); ?> " height=90px width=90px  alt=menu2/></td>
<td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu3); ?> " height=90px width=90px  alt=menu2/></td>
</tr>
</table>
</center>
 </div>
<hr>
 <div style=" background-color:  ; min-height:300px ">
Other Cards
 <center>

<br>
<table cellspacing="60">

 <tr>
 <td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu1)  ;?>" id="id1" onclick="fun1()" height=90px width=90px alt=menu1/></td>
<td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu1); ?> " height=90px width=90px  alt=menu2/></td>
<td><img src="<?php echo base_url('images/'.$shopfile.'/'.$menu1); ?> " height=90px width=90px  alt=menu2/></td>
</tr>
</table>
</center>
 </div> 
 

 </div>
<div style="width:30%; float:right; background-color:#c0b8cf ;height:600px">
<center>
<h3 style=" font-family : areil ;color:white"  ><i>OWNER'S DETAILS<i><h3>


<img src="<?php echo base_url('images/'.$shopfile.'/'.$menu1)  ;?> " style=" width:60% ; height:50%"/>\

<br><br><br>
<table style=" font-family:areil ;font-size:20px ;cell-pading:10px" >
<tr>
<td>Name</td>
<td colspan=2><?php echo $shopkeeper ?></td>
</tr>

<tr>
<td>Contact</td>
<td><?php echo $mob ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $email ?></td>
</tr>

<tr>
<td>Shop Address</td>
<td><?php echo $address ?></td>
</tr>

<tr>
<td>Timming of Shop </td>
<td>10:00 am - 8:30 pm </td>
</tr>



</center>
</table>

</div>



</head>
</body>
</html>