<?php 
include("conexion.php");
include("Variables.php");
include("Head.php");
if ($Usuario != ""){
  echo "
<style>
  p{margin: 0 0 10px !important;}
</style>
<div onclick='Refe_Ex()' class='menu-toggle Area_Oscura Ocultar_A'></div>
<div class='navbar-fixed-top navbar navbar-warning' style='background:#0277bd'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-warning-collapse'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a href='#' onclick='Refe_Ex()' class='menu-toggle navbar-brand'>
        <img href='javascript:void(0)' class='img-responsive center-block' src='img/Menu.svg' alt='icon'>
      </a>
    </div>
    <div class='navbar-collapse collapse navbar-warning-collapse'>
      <ul class='nav navbar-nav navbar-right'>
        <li class='dropdown'>
          <a href='javascript:void(0)' data-target='#' class='dropdown-toggle' data-toggle='dropdown'>";
            echo $NombreCompleto;
          echo "
          <span> </span><b class='caret'></b></a>
          <ul class='dropdown-menu'>";
          echo '
            <li><a href="index.php?cerrar=cerrar">Salir</a></li>';
          echo "
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class='container'>
  <div id='wrapper' class='active'>  
    <div id='sidebar-wrapper' style='background:#fff'>
      <div class='row'>
        <div class='container-fluid img-responsive' style='background-image:url(../Img_Web/Logo.png); background-repeat: no-repeat; background-size: 291px 110px; filter: blur(0px); height:110px; width:332px; margin-top: 8px'> 
        </div>
        <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Formulario.php?T=0' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Información del Congreso</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Categoria.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Crear Categorias</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top:;' class='col-xs-12'>
            <div class='btn-group'>
              <button class='btn dropdown-toggle' type='button' id='buttonComites' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='padding-top: 10px; width:355px'>
                <p style='color:#818181; text-align:left'>COMITES</p>
              </button>
              <div style='padding:10px;' class='dropdown-menu' aria-labelledby='buttonComites'>
                <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Comites.php' target='iframe_thingy'>
                  <div class='row' style='padding-top: 0px;'>
                    <div class='col-xs-9'>
                      <p>Crear Comites</p>
                    </div>              
                  </div>
                </a>
                <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Asignar_Comite.php' target='iframe_thingy'>
                  <div class='row' style='padding-top: 0px;'>
                    <div class='col-xs-9'>
                      <p>Asignar a Comites</p>
                    </div>              
                  </div>
                </a>
              </div>
            </div>
          </div>       
          <div style='margin-top:;' class='col-xs-12'>
            <div class='btn-group'>
              <button class='btn dropdown-toggle' type='button' id='buttonMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='padding-top: 10px;'>
                <p style='color:#818181'>CREAR NORMAS DE PARTICIPACIÓN</p>
              </button>
              <div style='padding:10px;' class='dropdown-menu' aria-labelledby='buttonMenu1'>
                <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='ReglasParticipacion.php' target='iframe_thingy'>
                  <div class='row' style='padding-top: 0px;'>
                    <div class='col-xs-9'>
                      <p>REGLAS DE PARTICIPACIÓN</p>
                    </div>              
                  </div>
                </a>
                <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Condiciones.php' target='iframe_thingy'>
                  <div class='row' style='padding-top: 0px;'>
                    <div class='col-xs-9'>
                      <p>ELABORACIÓN DE VIDEOS</p>
                    </div>              
                  </div>
                </a>
                <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Cronograma.php' target='iframe_thingy'>
                  <div class='row' style='padding-top: 0px;'>
                    <div class='col-xs-9'>
                      <p>CRONOGRAMA</p>
                    </div>              
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='CrearPreguntas.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Crear Preguntas del Comité</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Patrocinadores.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Patrocinadores</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Auspiciantes.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Auspiciantes</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='ImgCertificados.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Imagen Cerficados</p>
                </div>              
              </div>
            </a>
          </div>
        <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='TodasPonencias.php?T=0' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Todas las ponencias</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='TodasPonencias.php?T=1' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Todas las conferencias</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Inscripciones.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Inscripciones</p>
                </div>              
              </div>
            </a>
          </div>          
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Congreso.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Participación Congreso</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Registros.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Registros del Congreso</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Estadisticas.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Estadísticas</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Certificado.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Certificados</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Contrasena.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Cambiar contraseña</p>
                </div>              
              </div>
            </a>
          </div>
          <div style='margin-top: 15px;' class='col-xs-12'>
            <a style='color:#818181; padding: 10px 1px; text-align: left; margin-top: 0px;' class='menu-toggle Ocultar_A btn btn-default' href='Perfil.php' target='iframe_thingy'>
              <div class='row' style='padding-top: 0px;'>
                <div class='col-xs-9'>
                  <p>Editar datos Admin.</p>
                </div>              
              </div>
            </a>
          </div> 
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<iframe style='height:90%; margin-top:-20px;' class='foo' scrolling='yes' name='iframe_thingy' src='TodasPonencias.php?'>
</iframe>";
include("Footer.php");
}else{
  echo "
    <script type='text/javascript'>
      document.location = '../index.php';
    </script>
  ";
}
?>
