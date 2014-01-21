<?php

if( isset($_POST) ){
	//validation errors
	$formok = true;
	$errors = array();

	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');

	//form data
	$site = $_POST['radios'];
	$amountBTC = $_POST['amount'];

	//Default if site selection is empty
	//COULD BE WRONG WAY OF DOING THIS
	if(empty($site)){
		$site = "coinbase";
	}

	//Validate amountBTC is not empty
	if(empty($amountBTC)){
		$formok = false;
		$errors[] = "You have not entered an amount";
	}

	//Go forth if all is okay
	if($formok){
		if($site == "coinbase"){
			$url = 'https://coinbase.com/api/v1/prices/sell';
			$result = file_get_contents($url);
			$decode = json_decode($result, true);
			$amountMON = $decode['amount'];
		} else if($site == "mtgox"){
			$url = 'http://data.mtgox.com/api/1/BTCUSD/ticker';
			$result = file_get_contents($url);
			$decode = json_decode($result, true);
			$amountMON =  $decode["return"]["sell"]["value"];
		}

		$amountMON  *= $amountBTC;
		$amountMON = number_format((float)$amountMON, 2, '.', '');
		//echo '<h1 id="main">$' . ($amountMON) . '</h1>';
	}

	/*
	//Return values to give back to form
	$returndata = array(
		'calculatedAmount' => $amountMON,
		'form_ok' => $formok,
		'errors' => $errors
	);
	
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;

		//redirect back to form
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
	*/
	
	echo $amountMON;
}