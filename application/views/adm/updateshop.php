update
<script type="text/javascript">
function act(no,shp,action)
{
var a=confirm("do you want to "+action+" row "+no+"  "+shp);
if(a == true)
{return true;}
else
{return false;}
}



</script>
<article>
<form method="post">
<table cellpadding="10" cellspacing="0" align="center" border="5">
	<tr>
		<td>shopkeeper name</td>
		<td>
			<input type="text" name="skn" value="<?php echo $aa->shopkeeper; ?>">
			
		</td>
	</tr>
	<tr>
		<td>shop name</td>
		<td>
			<input type="text" name="shop" value="<?php echo $aa->shop; ?>">
			
		</td>
	</tr>
	<tr>
		<td>mobile</td>
		<td><input type="tel" name="mob" value="<?php echo $aa->mob; ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="em" value="<?php echo $aa->email; ?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="sub" value="Send">
		</td>
	</tr>
</table>
</form>


	</article>
</body>
</html>

