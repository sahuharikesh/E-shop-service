<!-- header part -->
<?php 
define('TITLE','Checkout');
define('PAGE','Checkout');
include('includes/header.php');
include('../connection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
   
}

$rEmail=$_SESSION['rEmail'];
$sql ="SELECT * FROM `user` WHERE email ='".$rEmail."'";
 $result= $conn->query($sql);
 if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
		$userId= $row["uid"];
		$mobile= $row["mobile"];
		$name= $row["name"];
     }
  }

if(isset($_POST['amount'])){
    $amount= $_POST['amount'];
}
?>

<div class="container py-5">
    <p class="blkColor text-white text-center  p-2">Checkout Details</p>
     <div class=" text-center  card bg-light">	 
		<form method="post" action="Paytm/PaytmKit/pgRedirect.php">
			<table class="table table-boardered ">
		<tbody>
			<tr>
				<td><label>ORDER ID:</label></td>
				<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
					name="ORDER_ID" autocomplete="off"
					value="<?php echo  "ORDS" . rand(10000,99999999)?>" class="form-control" readonly>
				</td>
			</tr>
			<tr>
				<td><label>CUSTOMER ID :</label></td>
				<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $userId;?>" class="form-control"></td>
			</tr>
			<tr>
				<td><label>CUSTOMER Name :</label></td>
				<td><input id="CUST_NAME" tabindex="2" maxlength="12" size="12" name="CUST_NAME" autocomplete="off" value="<?php echo $name;?>" class="form-control"></td>
			</tr>
			<tr>
				<td><label>CUSTOMER MOBILE:</label></td>
				<td><input id="MSISDN" tabindex="4" maxlength="12" size="12" name="MSISDN" autocomplete="off" value="<?php echo $mobile;?>" class="form-control"></td>
			</tr>
			<tr>
				<td><label>CUSTOMER EMAIL:</label></td>
				<td><input id="EMAIL" tabindex="4" maxlength="12" size="12" name="EMAIL" autocomplete="off" value="<?php echo $rEmail; ?>" class="form-control"></td>
			</tr>
			<tr>
				<td><label>Total Amount :</label></td>
				<td><input title="TXN_AMOUNT" tabindex="10"
					type="text" name="TXN_AMOUNT"
					value="<?php echo $amount; ?>" class="form-control" readonly>
					<input id="INDUSTRY_TYPE_ID" type="hidden"  name="INDUSTRY_TYPE_ID"  value="Retail" >
					<input id="CHANNEL_ID" type="hidden" name="CHANNEL_ID" autocomplete="off" value="WEB" >
				</td>
			</tr>

		</tbody>
		</table>
		<input value="Pay Now" type="submit" class="btn " name="pay"	onclick="">
		</form><br>
	 </div> 
 	</div>  
<!-- footer part -->
<?php include('includes/footer.php');?>