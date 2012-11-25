var jefformRec = jQuery.noConflict();
jefformRec(document).ready(function(){
	jefformRec("#reclamo_enviar").click(function() {
		
		var rec_nombre = jefformRec("#reclamo_nombre").val();
			rec_domicilio = jefformRec("#reclamo_domicilio").val();
			rec_dni = jefformRec("#reclamo_dni").val();
			rec_telefono = jefformRec("#reclamo_telefono").val();
			rec_email = jefformRec("#reclamo_email").val();
			rec_descripcion = jefformRec("#reclamo_descripcion").val();
			rec_detalle = jefformRec("#reclamo_detalle").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

		if (rec_nombre == "") {
		    jefformRec("#reclamo_nombre").focus();
		    return false;
		}else if (rec_domicilio == "") {
		    jefformRec("#reclamo_domicilio").focus();
		    return false;
		}else if (rec_dni == "") {
		    jefformRec("#reclamo_dni").focus();
		    return false;
		}else if(rec_email == "" || !validacion_email.test(rec_email)){
		    jefformRec("#reclamo_email").focus();
		    return false;
		}else {
			jefformRec('#progressbar').removeClass('ocultar');
			var datos = 'rec_nombre='+ rec_nombre +
						'&rec_domicilio='+ rec_domicilio +
						'&rec_dni='+ rec_dni +
						'&rec_telefono='+ rec_telefono +
						'&rec_email='+ rec_email +
						'&rec_descripcion='+ rec_descripcion +
						'&rec_detalle='+ rec_detalle;
			jefformRec.ajax({
	    		type: "POST",
	    		url: "libs/form_reclamo/envio.php",
	    		data: datos,
	    		success: function() {
					jefformRec('#progressbar').hide();
					jefformRec('form#form_reclamo').slideUp(1500).show;
					jefformRec('.reclamo_mensaje').removeClass("ocultar");
	    		},
				error: function() {
					jefformRec('#progressbar').hide();				
				}
	   		});
	 		return false;	
		}
	});
});