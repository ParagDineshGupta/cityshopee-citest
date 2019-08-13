<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CityShopee</title>
<link rel="stylesheet" type="text/css" href="./style/style.css" />

<script type="text/javascript"> function fun1()
{document.getElementById("adv").style.display="none";
alert("hiii");
 document.getElementById("category").style.display="flex";
}

</script>
</head>
<body>

<div class="container">
<?php include("header.php"); ?>
<?php include("nevigation.php");?>

<div>
	<a href=http://localhost/cityshopee>click here for back</a><br><br>
<?php

$y=$_GET['Area'];
$z=$_GET['submit'];


$con=mysqli_connect('localhost','root');
if(!$con)
{die('could not conect'.mysql_error());
}
else
{mysqli_select_db($con,'CityShopee');
$q="select * from  shopee where delivery_locatons like '%".$y."%' and shop_type like '%".$z."%'";
$result=mysqli_query($con,$q);
 if($result)
{
	$num=mysqli_num_rows($result);
	echo "<div style='display:flex; width:100%;min-height:100%'>";
for($i=1;$i<=$num;$i++)
	{  $row=mysqli_fetch_array($result);
		echo "<div style='width:20%;height:20%;margin:15px;background:red'><a href=".$row['shopview'].".php> ".$row['shop']."</a></div>";
	}
	echo "</div>";
	}
else
{echo "no result found";} 
mysqli_close($con);
}
?>



</div>

</div>	


<?php



 ?>
