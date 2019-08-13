
<?php
$con=mysqli_connect('localhost','root')or die("conection probleam");
mysqli_select_db($con,'cityshopee');
if (mysqli_connect_errno($con)) {//it return 0 in succesful conection
 echo "Database connection failed!: " . mysqli_connect_error();}
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
td >*{
	width:100%;
}

</style>
<style>
body{
	background-color: #7472de;
}

form {
	background-color: whitesmoke;
  /* Just to center the form on the page */
  margin: 0 auto;
  width: 60%;
  /* To see the outline of the form */
  padding: 1.5em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 300px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

</style>

<?php  if(isset($_POST['submit']))
{
	$x1=$_POST['sn'];
	$x2=$_POST['skn'];
	$x3=$_POST['em'];
	$x4=$_POST['mob'];
	if(isset($_POST['amob']))
	$x5=$_POST['amob'];
else
	$x5='';
	$x6=$_POST['address'];
	 $x7 = implode("_",$_POST['st']);

	// $x7=$_POST['st'];

	$x8=implode("-",$_POST['lod']);
     $d=date('Y-m-d H:i:s');

	$q="insert into shopkeepers values
	('','$x1','$x2',$x4,$x5,'$x3','$x6','$x7','$x8','$d','unchecked')";
$result=mysqli_query($con,$q)or die("ERROR:report to Admin");
if($result=='TRUE'){
	mysqli_query($con,"update newshops set val=val+1 ")or die("ERROR");
	echo "<script type=\"text/javascript\">alert('your information saved');</script>";

	mysqli_close($con);
	?>
 	<script type="text/javascript">
 alert("Please Contact  With Us Once at guptaparag1996@gmail.com");
</script>
<?php

redirect('', 'refresh');

?>
<!-- redirect -->
<?php
}

}
?>
<!-- style="background: #4978ce66;"
 --><body  style="background: images/cat1.jpg;"><a href="<?php  echo site_url(); ?>">HOME</a>
<form action="#" method="post" >
	<center>
		<table id="signup"  width="500px" align="center" border="0" cellpadding="4px" cellspacing="8px" id="reg">
		
			<caption><h2>Register Your Shop</h2></caption>
			*:ALL FILED ARE REQUIRED
		<tr>
			<td>SHOPKEEPER NAME*</td>
			<td><input type="text" name="skn" autocomplete="off" placeholder="proprietor name" required></td>
		</tr>	
		<tr>	
			<td>SHOP NAME*</td>
			<td><input type="text" name="sn" required placeholder="Ex.Shri Ram Kirana Store " ></td>
		</tr>
		<tr>	
			<td>ADDRESS* </td>
			<td><textarea name="address" rows="2" placeholder="" requird></textarea>
			</td>
		</tr>
		<tr>	
			<td>EMAIL*</td>
			<td><input type="email" name="em" required></td>
		</tr>	
		<tr>	
			<td><span>MOBILE*</span></td>
			<td>	<input type="tel" name="mob" maxlength="10" minlength="10" placeholder="10 digit number" required>
			</td>
		</tr>
		<tr>	
			<td><span>ALTERNATE MOBILE*</span></td>
			<td>	<input type="tel" name="amob" maxlength="10" minlength="10" placeholder="10 digit number" required>
			</td>
		</tr>
		
		<tr>	
			<td>SHOP TYPE*</td>
			<td><select name="st[]" multiple style="height: 200px;">
     <option value="grocery" selected>GROCERY</option>
     <option value="food">FOOD</option>
     <option value="clothing">CLOTHING</option>
     <option value="medicines" >MEDICINES</option>
     <option value="electronicAppliances" >ELECTRONIC APPLIANCES</option>
     <option value="refreshments" >REFRESHMENTS</option>
     <option value="homeDecor" >HOME DECOR</option>
     <option value="dailyNeeds" >DAILY NEEDS</option>
     <option value="stationery" >STATIONERY</option>
     <option value="footwear" >FOOTWEAR</option>

</select>
			</td>
		</tr>
		<tr>	
			<td>SELECT LOCATIONS OF DELIVERY*</td>
			<td><select name="lod[]" multiple style="height: 100px;">
   <option value="iet" selected>IET</option>
      <option value="itPark">IT PARK</option>
      <option value="bhavarkua" selected>BHAVARKUA</option>
      <option value="navlakha">NAVLAKHA</option>
      <option value="towerSquare">TOWER SQUARE</option> 
 
 

</select>
			</td>
		</tr>
		<!-- <tr><td>Shop Opening time</td><td><input type="time" id="myTime" value="22:15:00"></td></tr> -->
		
        <tr>	
        	<td><input type="reset" name="reset"></td>
	        <td><input type="submit" name="submit"></td>
		</tr>
	    </table>
    </center>
  
</form>
Contact us:guptaparag1996@gmail.com

</body>