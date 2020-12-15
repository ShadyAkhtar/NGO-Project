<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
<?php
        require '../partials/_header.php';
        ?>
	<h1>Donation Check Out</h1>
	<pre>
	</pre>
	<section class="container">
	<form method="post" action="pgRedirect.php">
		<div class="container">
<div class="text-center">
		<a class="text-center" href="../index.php">
		<img src="../img/logo1.png" alt="Sampurn Kirtiman" height="150px">
		</a><h2> Sampurn Kirtiman - Ek Asara </h2>
		<p class="lead">Your Small Donation Amount Will be Appreciated.</p>
		
		</div>

					<input hidden id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
				
				
			
					
				<input hidden id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				
			
				<div hidden class="form-group">
					<label>INDUSTRY_TYPE_ID ::*</label>
					<input id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
					</div>
				
					<div hidden class="form-group">
				<label>Channel ()::*</label>
					<input id="CHANNEL_ID" tabindex="4" class="form-control" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
						</div>

						<div class="form-group">
              <label for="Name">Name </label>
              <input type="text" class="form-control" id="vname" name="vname" placeholder="Name" required>
            </div>

			<div class="form-group">
              <label for="contact-phone">Phone No.</label>
              <input type="phone" class="form-control" id="vphone" name="vphone" placeholder="8888888888" maxlength="10" required>
            </div>

			<div class="form-group">
              <label for="contact-email">Email address</label>
              <input type="email" class="form-control" id="vmail" name="vmail" placeholder="name@example.com">
            </div>
			<div class="form-group">
              <label for="exampleFormControlTextarea1">What Inspired You ? (optional)</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="vinspire" rows="2" ></textarea>
              <div class="form-group">

						<div class="form-group">
					<label for="amountl">Donation Amount*</label>
					<input title="TXN_AMOUNT" id="amount" class="form-control" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
						</div>

						<div class="form-group">
					<input value="CheckOut" class="btn btn-success" type="submit"	onclick="">
					</div>
		</div>
		* - Mandatory Fields
	</form>

</section>
	<?php
        require '../partials/_footer.php';
        ?>
</body>
</html>