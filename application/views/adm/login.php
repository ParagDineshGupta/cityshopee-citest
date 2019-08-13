

<html>
<head>
<title>shopkeeper login</title>
<style>
body{
	background-color: #7472de;
}

form {
	background-color: whitesmoke;
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

</style>
</head>
<body><a href="<?php  echo site_url(); ?>">User Area</a>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> 

<form method="post" action="<?php  echo site_url(); ?>/admin/admin" >
	<center>

<table><caption>ADMIN LOGIN</caption>
<tr>
<td>User Name</td>
<td><input type="text" name="name" autocomplete="off" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"  minlength="6"/></td>
</tr>

</table>

<br>
<tr>
<td><input type="submit" name="submit" value="Login"/></td></tr>
<br>


<br>

</form>
</center>
</body>

</html>
