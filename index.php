<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){

		});
			function validate(){
				console.log("Got here");
				var amount = document.getElementById("form");
				if(document.submitForm.amount.value == "" || document.submitForm.amount.value == "0.00 BTC")
				{
					var x = amount.appendChild(document.createElement("span"));
					x.appendChild(document.createTextNode("* Required Field"));
					return false;
				}		

				return true;			
			}
	</script>
</head>
<body>
	<div id='header'>
		<h1>BITCOIN TRACKER</h1>
	</div>
	<div id='middle'>
		<?php
			$url = 'https://coinbase.com/api/v1/prices/spot_rate';
			$result = file_get_contents($url);
			$decode = json_decode($result, true);
			$amount = $decode['amount'];
			echo '<h1 id="main">$' . ($amount) . '</h1>';
		?>
		<form name="submitForm" id='form' method="GET" onsubmit="return validate()">
			<input type="text" value='0.00 BTC' id='amount' name="amount" onblur="if (this.value == '') {this.value = '0.00 BTC';}" onfocus="if (this.value == '0.00 BTC') {this.value = '';}">
 			<button type="submit" name="check">Check</button>
 		</form>
	</div>
</body>
</html>