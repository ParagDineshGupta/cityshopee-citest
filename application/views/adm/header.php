<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    color: darkslateblue;
}
th, td {
    padding: 15px;
}
</style>
	<style type="text/css">

	body{
		background-color:white;
		text-transform:capitalize;
		/* background-image: url('../img/projects-background.jpg');*/
	}

	.flex-container {/*header*/
  display: flex;
  flex-flow: row nowrap;
  background-color: #01010f2e;
   margin: 5px;
   position: fixed;
    top: 0px;
   /* width:100%;*/
   height: 120px;
}

 .flex-container a {padding: 14px 16px;
    text-decoration: none;
}
.flex-container>div {
  background-color: #f1f1f1;
  margin: 10px;
  padding:5px;
  font-size: 30px;
}

article{
	position: relative;
	top:130px;
	 background-image: url('../img/projects-background.jpg');
	min-height: 500px;
}
</style>

</head>
<body >
<header class="flex-container">

 <div><button onclick="location.reload();" style="padding:12px">REFRESH</button>
 </div> 

<div class="setting">
       
	      <div style="display:flex;">
	      	
	      	<a href="<?php  echo site_url(); ?>/admin/request/<?php echo $val ?>"><b style="background:red;"><?php echo $val ?></b>New Shop Request</a>
	        <a href="<?php echo site_url(); ?>/admin/view">View shop</a>
	      
	 
	        <a href="<?php echo site_url(); ?>/admin/profile">Profile change</a>
	        <a href="<?php echo site_url(); ?>">USER VIEW</a>
	         <a href="<?php echo site_url(); ?>/shopkeeper/signup">Shopkeeper Registration</a>
	      </div>
</div>

<div><form action="<?php echo site_url(); ?>/admin/logout" >
	<input type="submit" value="LOGOUT" id="logout" style="padding:12px" >
	</form>
</div>

</header>

