var jefformRecRec = jQuery.noConflict();
jefformRec(document).ready(function(){
	jefformRec("#reclamo_enviar").click(function() {
		
		var rec_nombre = jefformRec("#reclamo_nombre").val();
			rec_apellidos = jefformRec("#reclamo_apellidos").val();
			rec_dni = jefformRec("#reclamo_dni").val();
			rec_edad = jefformRec("#reclamo_edad").val();
			rec_ocupacion = jefformRec("#reclamo_ocupacion").val();
			rec_email = jefformRec("#reclamo_email").val();
			rec_telmovil = jefformRec("#reclamo_telmovil").val();
			rec_telfijo = jefformRec("#reclamo_telfijo").val();
			rec_direccion = jefformRec("#reclamo_direccion").val();
			rec_prov_nombre = jefformRec("#reclamo_prov_nombre").val();
			rec_prov_apellidos = jefformRec("#reclamo_prov_apellidos").val();
			rec_prov_dni = jefformRec("#reclamo_prov_dni").val();
			rec_prov_email = jefformRec("#reclamo_prov_email").val();
			rec_prov_telefono = jefformRec("#reclamo_prov_telefono").val();
			rec_prov_direccion = jefformRec("#reclamo_prov_direccion").val();
			rec_fecha = jefformRec("#reclamo_fecha").val();
			rec_caso = jefformRec("#reclamo_caso").val();
			rec_solicita = jefformRec("#reclamo_solicita").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

		if (rec_nombre == "") {
		    jefformRec("#reclamo_nombre").focus();
		    return false;
		}else if (rec_apellidos == "") {
		    jefformRec("#reclamo_apellidos").focus();
		    return false;
		}else if (rec_dni == "") {
		    jefformRec("#reclamo_dni").focus();
		    return false;
		}else if(rec_email == "" || !validacion_email.test(rec_email)){
		    jefformRec("#reclamo_email").focus();
		    return false;
		}else {
			jefformRec('#progressbar').removeClass('ocultar');
			var datos = "rec_nombre="+rec_nombre+
						"&rec_apellidos="+rec_apellidos+
						"&rec_dni="+rec_dni+
						"&rec_edad="+rec_edad+
						"&rec_ocupacion="+rec_ocupacion+
						"&rec_email="+rec_email+
						"&rec_telmovil="+rec_telmovil+
						"&rec_telfijo="+rec_telfijo+
						"&rec_direccion="+rec_direccion+
						"&rec_prov_nombre="+rec_prov_nombre+
						"&rec_prov_apellidos="+rec_prov_apellidos+
						"&rec_prov_dni="+rec_prov_dni+
						"&rec_prov_email="+rec_prov_email+
						"&rec_prov_telefono="+rec_prov_telefono+
						"&rec_prov_direccion="+rec_prov_direccion+
						"&rec_fecha="+rec_fecha+
						"&rec_caso="+rec_caso+
						"&rec_solicita="+rec_solicita+
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