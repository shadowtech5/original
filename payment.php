<?php
	$payment = $_GET['payment'];
	include 'db_connnection.php';

	$payment_sql = "SELECT * from booking where payment_id ='".$_GET['payment']."' and status is NULL";
	$payment_retval = mysql_query( $payment_sql, $conn );
	if(! $payment_retval ) {
		die('Could not get data: ' . mysql_error());
	} 
	if(mysql_num_rows($payment_retval)>0)
	{
		while($row_payment = mysql_fetch_array($payment_retval, MYSQL_ASSOC))
		{
			$amount = $row_payment['amount'];
		}
		$amount = $amount * 100;

?>
	<button id="rzp-button1">Pay</button>
<?php
}
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var payment = '<?php echo $payment; ?>';
var amount = '<?php echo $amount; ?>';
var email = 'tets@jhfj.vom';
var options = {
    "key": "rzp_test_gAODKulfPAH2ba",
    "amount": amount, // 2000 paise = INR 20
    "name": "BMA",
    "description": "Purchase Description",
    "image": "img/logo.png",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        var s = response.razorpay_payment_id;
        var ss = "confirm.php?id=".concat(s);
        var sss = ss.concat("&payment_id=")
        var ssss = sss.concat(payment);
        console.log(sss);
        window.location.href = ssss;

    },
    "prefill": {
        "name": "",
        "email": email,
    },
    "theme": {
        "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById("rzp-button1").onclick = function(e){
	<?php
	$payment_sql = "SELECT * from booking where payment_id ='".$_GET['payment']."' and status is NULL";
	$payment_retval = mysql_query( $payment_sql, $conn );
	if(mysql_num_rows($payment_retval)>0)
	{
	?>
    rzp1.open();
    e.preventDefault();
    <?php
	}
	?>
}
</script>