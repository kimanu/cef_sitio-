$(document).ready(function (){
	$(".validinfo").on("click", function(){
		var invalid = 0;
		
		$(".cuestionario .bdata .emp-info").each(function () {
			if ($(this).val() === "") {
				invalid++;
			}
		});

		if(invalid > 0) {
			alert("Llene los campos vacios para continuar");
		} else {
			$(".questions, .enviaresp").slideDown();
		}
	});
});
