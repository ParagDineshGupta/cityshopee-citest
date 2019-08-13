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
<article><table ><tr><th>S.NO.</th><th>Registration Time</th><th>Shop Name</th><th>Shopkeeper</th><th>Contact No.</th><th>2nd Contact No.</th><th>Email</th><th>Address</th><th>shop_type</th><th>delivery_locatons</th><th>Action</th></tr>
<?php
	$s = 1; 
	foreach ($aa as $row) {
	?>
	<tr>
		<td><?php echo $s; ?></td>
		<td><?php echo $row->date_time; ?></td>
		<td><?php echo $row->shop; ?></td>
		<td><?php echo $row->shopkeeper; ?></td>
		<td><?php echo $row->mob; ?></td>
		<td><?php echo $row->altermob; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->address; ?></td>
		<td><?php echo $row->shop_type; ?></td>
		<td><?php echo $row->delivery_locatons	; ?></td>
		<td> <a onclick="return act(<?php echo $s; ?>,'<?php echo $row->shop ; ?>','ADD')" href="<?php echo site_url(); ?>/admin/act/<?php echo $row->sid; ?>">ADD</a>/
			<a  onclick="return act(<?php echo $s.",'".$row->shop; ?>','SUSPEND')" href="<?php echo site_url(); ?>/admin/suspend/<?php echo $row->sid; ?>">SUSPEND</a>/
			<a  onclick="return act(<?php echo $s.",'".$row->shop; ?>','REJECT');" href="<?php echo site_url(); ?>/admin/reject/<?php echo $row->sid; ?>">REJECT</a>
			<!-- <td id="nsr"></td> -->
	</tr>
	<?php $s++;} ?>
</table></article>
</body>
</html>

