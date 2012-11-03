//Variable que almacenará la posición del scroll, por defecto tiene valor 0.
var scrollCachePosition = 0;

var jpopup = jQuery.noConflict();
jpopup(function() {
	jpopup(document).ready(function() {
        scrollCachePosition = jpopup(window).scrollTop();
        //Envío el scroll a la posición 0 (left), 0 (top), es decir, arriba de todo.
        window.top.scroll(0,0);
 
        //Si el body es mas grande que la capa 'wrapper' incrementa la altura del body a la capa 'capaPopUp'.
        if (jpopup("body").outerHeight()>jpopup("#wrapper").outerHeight()){
            var altura=jpopup("body").outerHeight();
        }else{
        //Si la capa 'wrapper' es más grande que el body incrementa la altura de la capa 'wrapper' a la capa 'capaPopUp'.
            var altura=jpopup("#wrapper").outerHeight();
        }
        window.document.getElementById("capaPopUp").style.height=altura+"px";
        event.preventDefault();
        //Muestro la capa con el efecto 'slideToggle'.
        jpopup("#capaPopUp").slideToggle();
 
        //Calculo la altura de la capa 'popUpDiv' y lo divido entre 2 para darle un margen negativo.
        var altura=jpopup("#popUpDiv").outerHeight();
        jpopup("#popUpDiv").css("margin-top","-"+parseInt(altura/2)+"px");
 
        //Calculo la anchura de la capa 'popUpDiv' y lo divido entre 2 para darle un margen negativo.
        var anchura=jpopup("#popUpDiv").outerWidth();
        jpopup("#popUpDiv").css("margin-left","-"+parseInt(anchura/2)+"px");
 
        //Muestro la capa con el efecto 'slideToggle'.
        jpopup("#popUpDiv").slideToggle();
    });
    jpopup("#cerrar").click(function(event) {
        event.preventDefault();
        //Cierro las capas con el efecto 'slideToggle'.
        jpopup("#capaPopUp").slideToggle();
        jpopup("#popUpDiv").slideToggle();
        //Si la variable scrollCachePosition es mayor que 0 incrementará la posición del scroll al valor que se almacenó.
        if (scrollCachePosition > 0) {
            window.top.scroll(0,scrollCachePosition);
            //Reseteamos la variable scrollCachePosition a 0 para poder ejecutar el script tantas veces sea necesario.
            scrollCachePosition = 0;
        }
    });
});