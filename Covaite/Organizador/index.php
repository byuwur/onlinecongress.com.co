<?php 
include("conexion.php");
  session_start();
  if (@$_GET['cerrar']) {
    session_unset(@$_SESSION['Documento']);
    session_destroy();
  }
  if ($_POST['Ingresar']) {
    $Usuario = $_POST['Usuario'];
    $Password2 = $_POST['Password'];
    $Password = md5($_POST['Password']);
    date_default_timezone_set('America/Bogota'); 
    $Año = date("Y");
    if (!empty($Usuario)) {
        if (!empty($Password)) {
          $querie = $conex->query("SELECT Documento, Nombre FROM adminsu WHERE Documento='$Usuario' AND Password='$Password'");
          if (mysqli_num_rows($querie)==0){
              echo '
              <div class="row">
                <div class="AlertContra alert alert-danger col-xs-12 col-sm-4 col-sm-offset-4" role="alert" style="font-size: 16px; text-align:center">
                  Verifica tus los datos ingresados.
                </div>
              </div>
              ';
          }else{
            $Resultado = mysqli_fetch_assoc($querie);
            $_SESSION['Documento'] = $Resultado['Documento'];
            $_SESSION['Nombre'] = $Resultado['Nombre'];
            echo "<script type='text/javascript'>window.location='Login.php'</script>";
          }
        }
    }
  }
include('Head.php');?>
    <div class="container">
      <div class="row"> 
        <div class="col-sm-6 col-sm-offset-3">
          <div class="well" style="margin-top: 15%;">
            <img src="../Img_Web/Logo.png" class="center-block">
            <h4 style="text-align: center; color: #333">Organi<strong>zador</strong></h4>
            <hr style="width: 20%; background: #0277bd; height: 1px; margin-top: -5px;" class="center-block">
            <div class="form">
              <form method="POST" action="" class="login-form">
                <div class="form-group label-floating">
                  <label class="control-label" for="focusedInput1">Usuario</label>
                  <input type="text" maxlength="30" name="Usuario" class="form-control" required>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="focusedInput1">Contraseña</label>
                  <input name="Password" type="password" maxlength="32"  class="form-control" required>
                </div>
                <div class="row"> 
                  <div class="col-sm-4 col-sm-offset-4">
                      <input style="text-align: center; height: 50px;" type="submit" name="Ingresar" id="Ingresar" class="btn btn-info btn-raised" value="Ingresar">
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <div class="col-xs-12"><a href="../index.php" class="center-block" style="text-align: center; font-size: 14px">Volver</a></div>
            </div>
          </div>
        </div>
      </div> 
    </div>
<?php 
  include('Footer.php');
?>
