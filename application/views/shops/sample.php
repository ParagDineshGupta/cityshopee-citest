

<html>
<head>
<title>update information</title>
<style>
body{
  background-color: #7472de;
  text-transform:capitalize;
}
form {background-color: whitesmoke;
  /* Just to center the form on the page */
  margin: 0 auto;
  width: 450px;
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

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;
}

.button {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
  margin-left: .5em;
}
</style>
</head>
<body>
  <a href="<?php echo site_url(); ?>/shopkeeper/logout" style="background:white">logout</a>
<center>
<?php echo form_open_multipart('shopkeeper/update'); ?>
<fieldset>
<legend> Shop Data</legend>
<table>
<tr>
<td>Upload Menu1</td>
<td><input type="file" name="menu1" accept="image/*"  required></td>
</tr>

<tr>
<td>Upload Menu2</td>
<td><input type="file" name="menu2" accept="image/*"  ></td>
</tr>

<tr>
<td>Upload Menu3</td>
<td><input type="file" name="menu3" accept="image/*" value="<?php echo "" ; ?>"></td>
</tr>

<tr>
<td>Quality card</td>
<td><input type="file" name="qualitycard" accept="image/*" value="<?php echo "" ; ?>"></td>
</tr>
<tr>
<td>Offer Card</td>
<td><input type="file" name=" offercard" accept="image/*" value="<?php echo "" ; ?>"></td>
</tr>
</table>
</fieldset>
<br>
<tr>
<td><input type="submit" name="submit1" value="submit"/></td>
<td><input type = "reset" value="reset"/></td>
</tr>
<?php echo form_close();?>

<br>

<?php echo form_open_multipart('shopkeeper/update'); ?>
<fieldset>
<legend>Personal Information</legend>
<table>

<tr>
<td>Name</td>
<td><input type="text" name="shopkeeper" value="<?php echo $shopkeeper; ?>" /></td>
</tr>


<tr>
<td>Contact number</td>

<td><input type="tel" name="mob" value="<?php echo $mob ; ?>" required /></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" value="<?php echo $email ; ?>" ></td>
</tr>


<tr>
<td>Address</td>
<td><input type="text" name="address" value="<?php echo $address ; ?>"/></td>
</tr>

<tr>
<td>Upload Your Image</td>
<td>
<input type="file" name="simage" accept="image/*"  >
</td>
</tr>


<tr>
<td>Upload Shop logo</td>
<td>
<input type="file" name="logo" accept="image/*" >
</td>

</tr>

</table>
</fieldset>

</br>



<tr>
<td><input type="submit" name="submit2" value="submit"/></td>

<td><input type = "reset" value="reset"/></td>
</tr>


<?php echo form_close();?>


<br>

<form action="<?php echo site_url(); ?>/shopkeeper/update" method="post" >
<fieldset>
<legend>Change Your shop timing and status </legend>
<table>
<tr>
  <script type="text/javascript">

  function fun2(){
    var status=document.getElementById('sstatus').value;
    if(status=='close')
    { 
      document.getElementById('reason').style.display="contents";
    }
    if(status=='open')
    { 
      document.getElementById('reason').style.display="none";
    }
      
  }

  </script>
<td>Shop Status</td>
<td><select id="sstatus" name="sstatus"  onchange="fun2();"><option>open</option><option <?php if($sstatus=="close") echo "selected"; ?>>close</option></select></td>
</tr>
<tr id="reason" <?php if($sstatus=="open") echo "hidden"; ?> >
<td>Reason</td>
<td><textarea name="close_reason" placeholder="Customer message,example: Shop will be close for 3 days from 21/03 to 23/03"  ><?php echo $close_reason ; ?></textarea></td>
</tr>

<tr>
<td>Shop Opening Time</td>
<td><input type="time" name="opening_time" value="<?php echo $opening_time ; ?>"/></td>
</tr>
<tr>
<td>Shop Closing Time</td>
<td><input type="time" name="closing_time" value="<?php echo $closing_time ; ?>"/></td>
</tr>

</table>

</fieldset><br>
<tr>
<td><input type="submit" name="submit4" value="submit"/></td></tr>
<br>

<tr>
<td><input type = "reset" value="reset"/></td>
</tr>
<br>

</form>

<br>
<form action="<?php echo site_url(); ?>/shopkeeper/update" method="post" >
<fieldset>
<legend>Change Your username and password </legend>
<table>
<tr>
<td>User Name</td>
<td><input type="text" name="uname" value="<?php echo $uname ; ?>"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?php echo $password ; ?>"/></td>
</tr>

</table>

</fieldset><br>
<tr>
<td><input type="submit" name="submit3" value="submit"/></td></tr>
<br>

<tr>
<td><input type = "reset" value="reset"/></td>
</tr>
<br>

</form>
</center>
</body>

</html>
