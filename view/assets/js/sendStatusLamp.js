$("#buttonLamp").click(function () {
	var buttonValue = $("#buttonLamp").val();

	if (buttonValue == "Desligar") {
		document.querySelector("#buttonLamp").value = "Ligar";
		var status = 0;
	}else if(buttonValue == "Ligar") {
		document.querySelector("#buttonLamp").value = "Desligar";
		var status = 1;
	}

	$.post("controller/statusLamp.php", {status: status}, function(result) {
		console.log(result);
	})
});