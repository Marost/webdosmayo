<base href ="http://dosdemayofinal.marostsac.com">

<!-- ESTILOS -->
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/estilos.css">

<!-- FONT -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

<!-- MODERNIZR -->
<script src="/js/vendor/modernizr-2.6.1.min.js"></script>

<!-- TABS -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/tabs.js"></script>        

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

<!-- SLIDE NOTAS -->
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
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script  src="/libs/blockui/jquery.blockUI.js"></script>
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

<!-- LISTA -->
<link rel="stylesheet" href="/libs/progressbar/ui.progress-bar.css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/libs/progressbar/progress.js"></script>

<!-- SLIDE NOTICIA -->
<link href="/libs/allinone_banner/allinone_bannerWithPlaylist.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
<script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
<script src="/libs/allinone_banner/allinone_bannerWithPlaylist.js"></script>
<!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
var jNotSld=jQuery.noConflict();
jNotSld(document).ready(function(){
    jNotSld('.imagen_slide').allinone_bannerWithPlaylist({
        skin: 'pureGallery',
        width: 620,
        height: 360,
        borderWidth: 0,
        playlistWidth:90,
        origThumbImgW:90,
        origThumbImgH:90
    });
});
</script>

<!-- SLIDER PATRIMONIO HISTORICO -->
<link href="/libs/allinone_banner/allinone_bannerRotator.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
        thumbsWrapperMarginBottom:5
    });
});
</script>

<!-- SLIDER CAMPAÑAS -->
<link href="/libs/allinone_banner/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
<script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
<script src="/libs/allinone_banner/allinone_carousel.js"></script>
<!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
var jCampEsp=jQuery.noConflict();
jCampEsp(document).ready(function(){
    jCampEsp('#nw-campania-esp .nws-contenido div').allinone_carousel({
        skin: 'charming',
        width: 370,
        height: 300,
        autoPlay: 3,
        resizeImages:true,
        autoHideBottomNav:false,
        showElementTitle:false,
        verticalAdjustment:50,
        showPreviewThumbs:false,
        numberOfVisibleItems:5,
        nextPrevMarginTop:23,
        playMovieMarginTop:0,
        bottomNavMarginBottom:-10
    }); 
});
</script>