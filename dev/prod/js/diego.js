$(document).ready(function (){
	$(".validinfo").on("click", function(){
		var invalid = 0;
		
		$(".cuestionario .bdata .emp-info").each(function () {
			if ($(this).val() === "") {
				invalid++;
			}
		});

		if(invalid > 0) {
			alert("Cambia mensaje para cuando los campos estén vacíos");
		} else {
			$(".questions, .enviaresp").slideDown();
		}
	});
});
