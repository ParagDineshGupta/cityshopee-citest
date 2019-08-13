<body style=" background-color:#2e97af " >
	<?php include("header.php"); ?>
<?php include("nevigation.php");?>
	
	<?php
$con=mysqli_connect('localhost','root');
if(!$con)
{die('could not conect'.mysql_error());
}
else
{mysqli_select_db($con,'CityShopee');
$q="select * from  emergencyNumber where type='IMP' ";
$result=mysqli_query($con,$q);
 if($result)
{
	$num=mysqli_num_rows($result);
	echo "<table width='50%'><tr><td><b>Institute</b> </td><td><b>Telephone/Other Number</b> </td> </tr>";
for($i=1;$i<=$num;$i++)
	{  $row=mysqli_fetch_array($result);

		echo "<tr><td>".$row['institute']."</td><td>".$row['number']."</td></tr>"  ;
	}
echo "</table>";
	}
else
{echo "no result found";} 
mysqli_close($con);
}
?>


</body>