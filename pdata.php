
<?php 

require 'db.php';
$pid = $_POST['pid'];
$c = mysqli_fetch_assoc(mysqli_query($con,"select * from tbl_order where id=".$pid.""));
$uinfo = mysqli_fetch_assoc(mysqli_query($con,"select * from register where id=".$c['uid'].""));
$ainfo = mysqli_fetch_assoc(mysqli_query($con,"select * from address where id=".$c['aid'].""));

?>

<h5><b>Customer Name :- <?php echo $uinfo['fname'].' '.$uinfo['lname'];?></b></h5>
<h5><b>Address :- <?php echo $ainfo['add1'].','.$ainfo['add2'].','.$ainfo['city'].'-'.$ainfo['pincode'];?></b></h5>

<table class="table table-responsive">
<tr>
<th>Sr No.</th>
<th>Prodct Name</th>
<th>Prodct Image</th>
<th>Prodct Net</th>
<th>Prodct Gross</th>
<th>Prodct Type</th>
<th>Prodct Price</th>
<th>Product Qty</th>
</tr>
<?php 
$prid = explode(',',$c['pid']);
$qty = explode(',',$c['qty']);
$pcount = count($qty);
$op = 0;
for($i=0;$i<$pcount;$i++)
{
	$op = $op + 1;
$pinfo = mysqli_fetch_assoc(mysqli_query($con,"select * from product where id=".$prid[$i].""));
	?>
<tr>
<td><?php echo $op;?></td>
<td><?php echo $pinfo['name'];?></td>
<td><img src="<?php echo $pinfo['image'];?>" width="100px"/></td>
<td><?php echo $pinfo['net'];?></td>
<td><?php echo $pinfo['gross'];?></td>
<td><?php echo $pinfo['types'];?></td>
<td><?php echo $pinfo['price'];?></td>
<td><?php echo $qty[$i];?></td>
</tr>
<?php } ?>
</table>
<h5><b>Payment Method :-</b><span class="badge badge-primary"> <?php echo $c['type'];?></span></h5>
<h5><b>Total Price  :-</b><span class="badge badge-primary"> <?php echo $c['total'];?></span></h5>
<h5><b>Order Status  :-</b><span class="badge badge-primary"> <?php echo $c['status'];?></span></h5>