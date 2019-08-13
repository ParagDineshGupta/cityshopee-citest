view
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
<article><table>
<?php
	$s = 1; 
	foreach ($aa as $row) {
	?>
	<tr>
		<td><?php echo $s; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->shop; ?></td>
		<td><?php echo $row->shopkeeper; ?></td>
		<td><?php echo $row->mob; ?></td>
		<td><?php echo $row->date_time; ?></td>
		<td> <a onclick="return act(<?php echo $s; ?>,'<?php echo $row->shop ; ?>','Update')" href="<?php echo site_url(); ?>/admin/update/<?php echo $row->sid; ?>">Update</a>/
			<a  onclick="return act(<?php echo $s.",'".$row->shop; ?>','Delete')" href="<?php echo site_url(); ?>/admin/delete/<?php echo $row->sid; ?>">Delete</a>/
			<a  onclick="return act(<?php echo $s.",'".$row->shop; ?>','Read data');" href="<?php echo site_url(); ?>/admin/readdata/`<?php echo $row->sid; ?>">Read data</a>
			<td id="nsr"></td>
	</tr>
	<?php $s++;} ?>
</table></article>
</body>
</html>


