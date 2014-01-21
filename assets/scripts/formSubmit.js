$(function(){
	$("#button").click(function(e){

		var site = $("input[type='radio']:checked").val();
		var amount = $("input#amount").val();
		var form = $("#form");

		console.log("Clicked button, amount = " + amount);

		if(amount == "" ||amount == "0.00 BTC"){
			$("input#amount").focus();
			$("span").text("* Required Field");
			return false;
		}
		else{
			$("span").text("");
		}


		$.ajax({
			url: "assets/scripts/process.php",
			type: form.attr('method'),
			data: form.serialize(),
			success: function(res){
				$("#main").text("$" + res);

			}
		});
		e.preventDefault();
	});

	$("input[type='radio'").click(function(e){

		var site = $("input[type='radio']:checked").val();
		var amount = $("input#amount").val();
		var form = $("#form");


		$.ajax({
			url: "assets/scripts/process.php",
			type: form.attr('method'),
			data: form.serialize(),
			success: function(res){
				$("#main").text("$" + res);

			}
		});
	});


});