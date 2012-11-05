<base href ="http://dosdemayofinal.marostsac.com">

<!-- ESTILOS -->
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/estilos.css">

<!-- FONT -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

<!-- MODERNIZR -->
<script src="js/vendor/modernizr-2.6.1.min.js"></script>

<!-- TABS -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/tabs.js"></script>        

<!-- SLIDE SUPERIOR -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
var jSlider=jQuery.noConflict();
jSlider(document).ready(function() {
    jSlider('#slider').nivoSlider({
        effect:'sliceUpDown',
        slices:17,
        animSpeed:500,
        pauseTime:8000,
        startSlide:0,
        directionNav:false,
        directionNavHide:false,
        controlNav:true,
        controlNavThumbs:false,
        controlNavThumbsFromRel:false,
        controlNavThumbsSearch: '.jpg',
        controlNavThumbsReplace: '_thumb.jpg',
        keyboardNav:true,
        pauseOnHover:true,
        manualAdvance:false,
        captionOpacity:1,
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){}
    });
});
</script>

<!-- SLIDE NOTAS -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
var jSlideNI=jQuery.noConflict();
jSlideNI(document).ready(function() {
    jSlideNI('.slider-bxslider').nivoSlider({
        effect:'sliceUpDown',
        slices:5,
        animSpeed:500,
        pauseTime:8000,
        startSlide:0,
        directionNav:false,
        directionNavHide:false,
        controlNav:true,
        controlNavThumbs:false,
        controlNavThumbsFromRel:false,
        controlNavThumbsSearch: '.jpg',
        controlNavThumbsReplace: '_thumb.jpg'
    });
});
</script>

<!-- MENU -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
var jMenu=jQuery.noConflict();
jMenu(document).ready(function(){
    jMenu('#nav>li').hover(
        function(){
        jMenu('.submenu',this).stop(true,true).slideDown('fast');
        jMenu('.submenu-prensa',this).stop(true,true).slideDown('fast');
        },
        function(){
        jMenu('.submenu',this).slideUp('fast');
        jMenu('.submenu-prensa',this).slideUp('fast');
        }
    );
});
</script>

<!-- TELEFONO -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="libs/marquee/jquery.marquee.js"></script>
<script>
var jMarq = jQuery.noConflict();
jMarq(document).ready(function(){
    jMarq("#marquee").marquee();
});
</script>

<!-- ESPECIALIDADES -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/marquee-especialidades.js"></script>

<!-- ANALISIS CLINICOS -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/marquee-apoyo-diagnostico.js"></script>

<!-- ESCRIBANOS -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="libs/blockui/jquery.blockUI.js"></script>
<script >
var jcladd = jQuery.noConflict();
jcladd(document).ready(function() { 
    jcladd('#popupen-escribanos').click(function() { 
        jcladd.blockUI({ message: jcladd('#popup-escribanos'), css: {top: '20%'} }); 
    });
    
    jcladd('#popup-esc-cerrar').click(function() { 
        jcladd.unblockUI(); 
        return false; 
    });
     
});
</script>

<!-- MAPA -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="libs/blockui/jquery.blockUI.js"></script>
<script >
var jMapUbi = jQuery.noConflict();
jMapUbi(document).ready(function() { 
    jMapUbi('#popupen-ubicanos').click(function() { 
        jMapUbi.blockUI({ message: jMapUbi('#popup-ubicanos'), css: {top: '5%', left: '22%'} }); 
    });
    
    jMapUbi('#popup-ubi-cerrar').click(function() { 
        jMapUbi.unblockUI(); 
        return false; 
    });
     
});
</script>

<!-- TELEFONO -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="libs/blockui/jquery.blockUI.js"></script>
<script >
var jMapUbi = jQuery.noConflict();
jMapUbi(document).ready(function() { 
    jMapUbi('#ver_telf').click(function() { 
        jMapUbi.blockUI({ message: jMapUbi('#popup-telefono'), css: {top: '20%'} }); 
    });
    
    jMapUbi('#popup-tel-cerrar').click(function() { 
        jMapUbi.unblockUI(); 
        return false; 
    });
     
});
</script>

<!-- ACORDEON -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script>
var jAcod=jQuery.noConflict();
jAcod(document).ready(function(){
    jAcod(".nwn-lista").accordion({
        heightStyle: "content"
    });
});
</script>

<?php if($script_popup==true){ ?>
<!-- POPUP -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="/js/popup.js"></script>
<?php } ?>