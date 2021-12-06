$(document).ready(function() {
	
	// Carousel FAQ init
	$('.owl-carousel').owlCarousel({
		loop:true,
		
		margin:20,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})	
	
    
	// Clicco sul pulsante per andare avanti o indietro nel form multi-step
    $(document).on("click", ".form-content__step, button[type='submit']", function(){
        
		let error = false; // parto dal presupposto che non vi siano errori
		let div = $(this).closest(".form-holder");
		
        const thisStepContent = $(this).closest(".card"); // dom della card contenente lo step
        const thisStep = thisStepContent.data("step");  // recupero il numero di step attuale da id specifico della card dello step
        const goto = $(this).data("goto"); // recupero numero di step a cui passare dal pulsante cliccato
        const nextStep = $(div).find(".content-step-"+goto);// creo dom id dello step a cui passare
        const direction = (goto > thisStep) ? "forward" : "back"; // se lo step a cui andare è maggior di quello attuale sto andando forward, se no back

		
		// recupro tutti i campi obbligatori dello step attuale
		const requiredFields = thisStepContent.find("[required]");
		
		/**
		 * Se l'utente vuole andare allo step successivo controllo se ho dei campi obbligatori
		 * In caso affermativo li scorro per vedere se sono compilati. In caso negativo li contrassegno di rosso  
		 * e setto la variabile di flag "error" a true in modo da impedire che si passi allo step successivo
		 */
		if(requiredFields.length && direction == "forward"){
			// loop dei campi
			requiredFields.each(function(i,e){
				// cambi metodo di validazione in base al tipo di campo (per ora contemplato solo checkbox e select)
				const fieldType = $(this).prop("type");
				if(fieldType == "checkbox"){
					if( !$(this).prop("checked") ){
						$(this).next("label").addClass("form_error"); // aggiungo classe errore a label
						error = true; // non procedere
					}
				}else{
					if($(this).val() == ''){
						$(this).addClass("form_error"); // aggiungo classe errore a select
						error = true; // non preocedere
					}
				}
				
			}); // fine loop campi obbligatori
		}
		
		if(error) return;
		
		if(goto == 5){
			//const action = $("form#form-in-hero").attr("action");
			const action = $(div).find("form").attr("action");
			submitForm(action, div)
			return;
		}
        
		// se esiste il panel dello step nel dom e non ho errori passo a tale panel
        if(nextStep.length ){
            
            /* cambio numero dello step preventivo */
            activateNumber(goto, div);

            /* cambio panel dello step preventivo */
            thisStepContent.removeClass("form-content--active");
			// in base alle direzione cambio le classi del panello. Saranno poi i stile nel css ad occuparsi del'animazione
            if(direction == "forward"){
                thisStepContent.addClass("form-content--previous");
                nextStep.addClass("form-content--active");
            }else{
                nextStep.removeClass("form-content--previous").addClass("form-content--active");
            }

        }
        
    });
	
	// tolgo eventuale classe di errore se modifico i valori del campo
    $(document).on("change", "select", function(){
		$(this).removeClass("form_error");
	});
    $(document).on("change", "input[type='checkbox']", function(){
		$(this).next("label").removeClass("form_error");
	});
    $(document).on("change", "input.form_error", function(){
		$(this).removeClass("form_error");
	});
    $(document).on("submit", "form", function(e){
		e.preventDefault();
	});
    
});

/**
 * Funzione che attiva il gisuto numero di step sopra il modulo contatti
 */
function activateNumber(step, div){
    if(step < 1 || step > 4) return;
    $(div).find(".step-preventivo__numero").removeClass("step-preventivo--attivo");
    $(div).find(".step-preventivo[data-step='"+step+"'] .step-preventivo__numero").addClass("step-preventivo--attivo");
}

function submitForm(action, div){
	let formData = $(div).find("form").serializeArray();
	
	$.post(
		action,
		{data: formData},
		function(response){
			if(response.result){
				showThankYouPage();
			}else{
				alert("Errore durante invio richiesta!");
				
			}
		},
		"json"
	);
}

function showThankYouPage(){
	// per ora così
	window.location = "/grazie.php";
}

var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})

