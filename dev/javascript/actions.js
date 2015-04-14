// Verifica si hay campos vacíos antes de mostrar el cuestionario
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

// Verifica los cambios en el último input del cuestionario, muestra una imagen