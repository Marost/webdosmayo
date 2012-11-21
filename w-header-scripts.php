<base href ="<?php echo $web; ?>">

<!-- ESTILOS -->
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/estilos.css">

<!-- FONT -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

<!-- MODERNIZR -->
<script src="/js/vendor/modernizr-2.6.1.min.js"></script>

<?php if($script_tabs==true){ ?>
    <!-- TABS -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/tabs.js"></script>        
<?php } ?>

<!-- SLIDE SUPERIOR -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/jquery.nivo.slider.pack.js"></script>
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

<?php if($script_slnot_prin==true){ ?>
    <!-- SLIDE NOTAS - PAGINA PRINCIPAL-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/js/jquery.nivo.slider.pack.js"></script>
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
<?php } ?>

<!-- MENU -->
<link rel="stylesheet" href="/libs/sherpa/styles/960_fluid.css" />
<link rel="stylesheet" href="/libs/sherpa/styles/main.css" />
<link rel="stylesheet" href="/libs/sherpa/styles/bar_nav.css" />
<link rel="stylesheet" href="/libs/sherpa/styles/skins/theme_blue.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="/libs/sherpa/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="/libs/sherpa/scripts/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="/libs/sherpa/scripts/sherpa_ui.js"></script>

<!-- TELEFONO EFECTO -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/libs/marquee/jquery.marquee.js"></script>
<script>
var jMarq = jQuery.noConflict();
jMarq(document).ready(function(){
    jMarq("#marquee").marquee();
});
</script>

<!-- ESPECIALIDADES -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/marquee-especialidades.js"></script>

<!-- ANALISIS CLINICOS -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/marquee-apoyo-diagnostico.js"></script>

<!-- POPUP ESCRIBANOS -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/libs/blockui/jquery.blockUI.js"></script>
<script >
var jcladd = jQuery.noConflict();
jcladd(document).ready(function() { 
    jcladd('.p-escribanos').click(function() { 
        jcladd.blockUI({ message: jcladd('#popup-escribanos'), css: {top: '20%'} }); 
    });
    
    jcladd('#popup-esc-cerrar').click(function() { 
        jcladd.unblockUI(); 
        return false; 
    });
     
});
</script>

<!-- POPUP ESCRIBANOS - ENVIO -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/libs/form_escribanos/envio.js"></script>

<!-- POPUP MAPA -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="/libs/blockui/jquery.blockUI.js"></script>
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

<!-- POPUP TELEFONO -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="/libs/blockui/jquery.blockUI.js"></script>
<script >
var jTelf = jQuery.noConflict();
jTelf(document).ready(function() { 
    jTelf('#ver_telf').click(function() { 
        jTelf.blockUI({ message: jTelf('#popup-telefono'), css: {top: '20%'} }); 
    });
    
    jTelf('#popup-tel-cerrar').click(function() { 
        jTelf.unblockUI(); 
        return false; 
    });
     
});
</script>

<!-- POPUP INTRANET -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="/libs/blockui/jquery.blockUI.js"></script>
<script >
var jIntran = jQuery.noConflict();
jIntran(document).ready(function() { 
    jIntran('#enl-intranet').click(function() { 
        jIntran.blockUI({ message: jIntran('#popup-intranet'), css: {top: '20%'} }); 
    });
    
    jIntran('#popup-intranet-cerrar').click(function() { 
        jIntran.unblockUI(); 
        return false; 
    });
     
});
</script>

<?php if($script_acordeon==true){ ?>
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
<?php } ?>

<?php if($script_popup==true){ ?>
    <!-- POPUP PAGINA PRINCIPAL-->
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script  src="/js/popup.js"></script>
<?php } ?>

<?php if($script_direcinterno==true){ ?>
    <!-- DIRECTORIO INTERNO -->
    <link rel="stylesheet" href="/libs/progressbar/ui.progress-bar.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/libs/progressbar/progress.js"></script>
<?php } ?>

<?php if($script_slide_noticia==true){ ?>
<!-- SLIDE NOTICIA -->
<link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
<script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
<script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
<script src="/libs/allinone_banner/reflection.js" type="text/javascript"></script>
<!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
var jNotSld=jQuery.noConflict();
jNotSld(document).ready(function(){
    jNotSld('.imagen_slide div').allinone_thumbnailsBanner({
        skin: 'cool',
        numberOfThumbsPerScreen:4,
        width: 620,
        height: 360,
        thumbsWrapperMarginTop:0
    });
});
</script>
<?php } ?>

<!-- SLIDER PATRIMONIO HISTORICO -->
<link href="/libs/allinone_banner/allinone_bannerRotator.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
<script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
<script src="/libs/allinone_banner/allinone_bannerRotator.js"></script>
<!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
var jPatHist=jQuery.noConflict();
jPatHist(document).ready(function(){
    jPatHist('#patrimonio-historico div').allinone_bannerRotator({
        skin: 'classic',
        width: 220,
        height: 150,
        thumbsWrapperMarginBottom:5,
        showAllControllers: false,
        showNavArrows: false,
        showBottomNav: false,
        showCircleTimer: false
    });
});
</script>

<?php if($script_campana==true){ ?>
    <!-- SLIDER CAMPAÑAS -->
    <link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
    <script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
    <script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
    <script src="/libs/allinone_banner/reflection.js" type="text/javascript"></script>
    <!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
    <script>
    var jCampEsp=jQuery.noConflict();
    jCampEsp(document).ready(function(){
        jCampEsp('#nw-campania-esp .nws-contenido div').allinone_thumbnailsBanner({
            skin: 'cool',
            numberOfThumbsPerScreen:2,
            width: 350,
            height: 300,
            thumbsWrapperMarginTop:0
        });
    });
    </script>
<?php } ?>


<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20229980-23']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<?php if($script_tarifario==true){ ?>
    <!-- TARIFARIO TABLA -->
    <link rel="stylesheet" type="text/css" href="/libs/creative_table/css/creative.css">
    <script src="/libs/creative_table/js/jquery-1.4.2.min.js"></script>
    <script src="/libs/creative_table/js/creative_table_ajax-1.3.js"></script>
<?php } ?>

<?php if($script_historia==true){ ?>
    <!-- HISTORIA -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        var jHist = jQuery.noConflict();
        jHist(document).ready(function(){
            jHist.post("historia-datos.php", {tipo: 1},
            function(data){
                jHist("#progressbar").removeClass("ocultar");
                jHist("#tarifario_contenido").html(data);
                jHist("#progressbar").addClass("ocultar");
            });
            
            jHist("#tarifario_cabecera ul li").click(function(){
                jHist("#progressbar").removeClass("ocultar");
                jHist("#tarifario_cabecera ul li").removeClass("selected");
                jHist(this).addClass("selected");
                var tipo = jHist(this).attr("rel");
                jHist.post("historia-datos.php", {tipo: tipo},
                function(data){
                    jHist("#tarifario_contenido").html(data);
                    jHist("#progressbar").addClass("ocultar");
                });
            })
            
        });
    </script>
<?php } ?>

<!-- LIBRO DE RECLAMACIONES -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/libs/form_reclamo/envio.js"></script>