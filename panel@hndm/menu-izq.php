<script type="text/javascript" src="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/js/jscript_jquery.dimensions.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/js/jscript_jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/js/jscript_jzScrollHorizontalPane.js"></script>
<script type="text/javascript">
var jmnpr = jQuery.noConflict();
jmnpr(document).ready(function(){
	if(jmnpr("#nav")) {
		jmnpr("#nav dd").hide();
		jmnpr("#nav dt b").click(function() {
			if(this.className.indexOf("clicked") != -1) {
				jmnpr(this).parent().next().slideUp(200);
				jmnpr(this).removeClass("clicked");
			}
			else {
				jmnpr("#nav dt b").removeClass();
				jmnpr(this).addClass("clicked");
				jmnpr("#nav dd:visible").slideUp(200);
				jmnpr(this).parent().next().slideDown(500);
			}
			return false;
		});
	}
});
</script>

<dl id="nav">

  <dt class="items"><b>Opciones</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/categorias/listar.php">
          Categorias</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/alianzas/listar.php">
          Alianzas</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/apoyo-diagnostico/listar.php">
          Apoyo al Diagnóstico</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/atencion-asegurado/listar.php">
          Atención al Asegurado</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/atencion-ciudadano/listar.php">
          Atención al Ciudadano</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/campanias/noticias/listar.php">
          Campañas</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/capacitacion/listar.php">
          Capacitación</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/cas/noticias/listar.php">
          CAS</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/equipos-tecnologia/listar.php">
          Equipos de Última Tecnología</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/especialidades/listar.php">
        	Especialides</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/historia/listar.php">
          Historia</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/informacion-institucional/listar.php">
          Información Institucional</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/info-variada/noticias/listar.php">
          Información Variada</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/libro-reclamaciones/listar.php">
          Libro de Reclamaciones</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/lista-empresas/listar.php">
          Lista de Empresas</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/normatividad/noticias/listar.php">
          Normatividad</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/noticias/listar.php">
          Noticias</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/nuestras-oficinas/listar.php">
          Nuestras Oficinas</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/oportunidad-laboral/noticias/listar.php">
          Oportunidad Laboral</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/popup/noticias/listar.php">
          POPUP</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/proezas-medicas/listar.php">
        	Proezas Médicas</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/reconocimientos-institucionales/listar.php">
          Reconocimientos Institucionales</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/slide-superior/listar.php">
          Slider Superior</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Videos</b></dt>
  <dd>
    <ul class="items">
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/videos/noticias/form-agregar.php">
        	Agregar</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/videos/noticias/listar.php">
        	Listar</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Transparencia</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/transparencia/noticias/form-agregar.php">
          Agregar</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/transparencia/noticias/listar.php">
          Listar</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Teléfonos</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/telefonos/anexos/listar.php">
          Anexos</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Epidemiologica</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/sala-situacional/noticias/listar.php">
          Sala Situacional</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/epidemiologico/noticias/listar.php">
          Boletín Epidemiologico</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Tarifario</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/tarifario/medicamentos/listar.php">
          Medicamentos</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/tarifario/procedimientos/listar.php">
          Procedimientos</a></li>
    </ul>
  </dd>
  <dt class="items"><b>Directorio</b></dt>
  <dd>
    <ul class="items">
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/directorio/medicos/listar.php">
          Médicos</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/directorio/funcionarios/listar.php">
          Otros Funcionarios</a></li>
      <li>
        <a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/directorio/medicos-otros/listar.php">
          Otros Médicos</a></li>
    </ul>
  </dd>
  <div class="espacio"></div>
  <dt class="items"><b>Usuario</b></dt>
  <dd>
    <ul>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/usuarios/administracion/form-agregar.php">
        	Agregar</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/usuarios/administracion/listar.php">
        	Listar</a></li>
    </ul>
  </dd>
</dl>
<!--FIN MENU NAV-->