<?php 		
			include("conexion.php");
			$Id_Congreso=$_POST['Id_Congreso'];


			@mkdir("../Fotografias/Certificados/$Id_Congreso/", 0777 -R, TRUE);
			@chmod("../Fotografias/Certificados/*", 0777);
			
			$extension=".hola";
			if ($_FILES[archivo][type] =="image/png"){
					$extension=".png";
				}
			$Ruta = "../Fotografias/Certificados/".$Id_Congreso."/".basename(1).$extension; 

			$Ruta2 = "http://www.onlinecongress.com.co/Fotografias/Certificados/".$Id_Congreso."/".basename(1).$extension;  
			$uploadedfileload2="true";


			move_uploaded_file(@$_FILES['file']['tmp_name'], $Ruta); 

			$file_name2=$_FILES[file][name];
			$NombreImagen2 = $file_name2;

			$Registro_Evento2 = "UPDATE certificados SET Img='$Ruta2' where Id_Congreso='$Id_Congreso'";
			$conex->query($Registro_Evento2);
?>