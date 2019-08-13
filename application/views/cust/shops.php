<html>
<head>
    <title>SHOPS</title>
</head>
<body>
	 <?php include("header.php"); ?>
 <?php include("nevigation.php");?>
<?php 
if($aa){ ?>

	<div style='display:flex; width:100%;min-height:100%;    background-color: #fff2da;'>
		<?php
foreach ($aa as $row) { ?>

	    <a style='width:20%;height:20%;margin:15px;background:#baceb645' href="<?php echo site_url()."/user/shops/".$row->shopfile; ?>.php">
	    	<div >
	    		<b><?php echo $row->shopkeeper; ?></b><br>
	    		<?php echo $row->mob; ?><center>
	    		<h2 style="margin: 0px;"><?php echo $row->shop; ?></h2>
	    		<h4><?php echo $row->address; ?></h4>
	    		<br>
</center>
	    	</div>
	    </a>    
<?php
}
?>
   </div>  
   <?php
}
else
{echo "<br><br><br><br><br><center><h1>No result found</h1></center>";} 

?>


</body>
</html>