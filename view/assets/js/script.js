setInterval(
	function () {
		$.post("controller/verifyNotifications.php", function(result) {
			if (result == 1) {
				$("#bodyBackground").removeClass("apagado");
				$("#bodyBackground").addClass("aceso");
			}
			if (result == 0) {
				$("#bodyBackground").removeClass("aceso");
				$("#bodyBackground").addClass("apagado");
			}
		})
	}, 500
);