<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Bitcoin Tracker</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="assets/scripts/formSubmit.js"></script>
	<!--script type='text/javascript'>

		function validate(){
			console.log("Got here");
			$form = document.submitForm;

			if(document.submitForm.childNodes.length > 15){
				document.submitForm.removeChild(document.submitForm.getElementsByTagName("span")[0]);
			}

			if(document.submitForm.amount.value == "" || document.submitForm.amount.value == "0.00 BTC")
			{
				var x = document.getElementById("form").appendChild(document.createElement("span"));
				x.appendChild(document.createTextNode("* Required Field"));
				return false;
			}		

			return true;			
		}

		function autoSubmit(){
		    var formObject = document.forms['choice_form'];
		    formObject.submit();
		}
	</script-->
</head>
<body>
	<div id='header'>
		<h1>BITCOIN TRACKER</h1>
	</div>
	<div id='middle'>
		<!--form name="submitForm" id='form' method="POST" onsubmit="return validate()" action="index.php"-->
		<form name="submitForm" id="form" method="POST" action="">
			<input type="radio" id="radio1" name="radios" value="coinbase" checked>
	   			<label for="radio1">Coinbase</label>
			<input type="radio" id="radio2" name="radios" value="mtgox">
	  			<label for="radio2">MtGox</label>
			<h1 id="main">$0.00</h1>
			<input type="text" value='0.00 BTC' id='amount' name="amount" onblur="if (this.value == '') {this.value = '0.00 BTC';}" onfocus="if (this.value == '0.00 BTC') {this.value = '';}">
 			<button type="submit" id="button" name="check">Check</button>
 			<span></span>
 		</form>
	</div>
</body>
</html>