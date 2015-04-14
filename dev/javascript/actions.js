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

	// Verifica los cambios en el último input del cuestionario, muestra una imagen
	var result = 0;
	$('.question15').on('input', function(){
		if ( $('.lastone').val() != "" ) {
			result = parseInt($('.question1').val()) + parseInt($('.question2').val()) + parseInt($('.question3').val()) + parseInt($('.question4').val()) + parseInt($('.question5').val()) + parseInt($('.question6').val()) + parseInt($('.question7').val()) + parseInt($('.question8').val()) + parseInt($('.question9').val()) + parseInt($('.question10').val()) + parseInt($('.question11').val()) + parseInt($('.question12').val()) + parseInt($('.question13').val()) + parseInt($('.question14').val()) + parseInt($('.question15').val());
			console.log(result)
			if ( result < 45 ) {
				$('.semaforo_rojo').show();
			}
			if ( result >= 45 && result < 60 ) {
				$('.semaforo_amarillo').show();
			}
			if ( result >= 60 ) {
				$('.semaforo_verde').show();
			}
		}
	})

	// Código viejo
	$(".main_body").delegate(".navhead", "click", function(e) {
	    e.preventDefault(), $(this).next("ul").stop().slideToggle()
	});
	var e = 1,
	    s = 200;
	$(".bquestions").find("li").first().show(s).addClass("showed"), $(".nextq").click(function() {
	    1 == $(".cuestype").data("type") ? "" != $(".showed").find("input").val() && e < $(".bquestions").find("li").length && $(".showed").find("input").val() >= 1 && $(".showed").find("input").val() <= 5 && ($(".showed").addClass("temp").removeClass("showed"), $(".temp").next().show(s).addClass("showed"), $(".temp").hide(s).removeClass("temp"), e++, $(".progreso").attr("value", e), console.log(e)) : (console.log("entra al 2"), "" != $(".showed").find("select").val() && e < $(".bquestions").find("li").length && ($(".showed").addClass("temp").removeClass("showed"), $(".temp").next().show(s).addClass("showed"), $(".temp").hide(s).removeClass("temp"), e++, $(".progreso").attr("value", e), console.log(e))), e == $(".bquestions").find("li").length && ($(".sansw").show(s), $(".nextq").hide(s))
	})
});
