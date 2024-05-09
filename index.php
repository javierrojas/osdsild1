<?php

session_start();

ini_set('date.timezone','America/Lima');
//session_name('login');

//include("configcolores.php");

header('Content-Type: text/html; charset=UTF-8'); 


echo "<html lang='es'> ";

?>



<!--

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head >

-->

<head >
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='css/estilos.css' rel='stylesheet' type='text/css'></link> 
	
	
	<style type="text/css">


	</style>



	<title>GESTION DE PERSONAL</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	
	<link rel="stylesheet" href="css/alertify/alertify.min.css" />
	<link rel="stylesheet" href="css/alertify/themes/semantic.min.css" />
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	
	<script src="js/jquery-ui.min.js"></script>
 

	<script type="text/javascript" src="js/jscpry.js"></script>  
	<!--<script type="text/javascript" src="js/jscomun1.js"></script>  -->
	
	 <script src="js/alertify.min.js"></script>  

</head>

<body id="vbody" class="indexBody"  >

	

		<?php
		//echo $_SESSION['web_login_usuarioupch'];
		if (!isset ($_SESSION['web_login_usuarioupch']) ||  !isset($_SESSION['web_password_usuarioupch'] )  
		|| 
		$_SESSION['web_login_usuarioupch']=="" ||  $_SESSION['web_password_usuarioupch']=="" )

		{

			header ("Location: inicio.php");

		}


		$web_login_correo = "";




		$web_ctipo = "";


		?>

 <header >
  </header >

		<!--<div id="formularioinicial" style= "border:thin groove;border-width:1px;border-color:#BDBDBD;float:center;width:880px;margin-left:300px;margin-top:70px" > 

		-->
		<br><br><br>

		<center>
				<div style="margin-top:5px;"> 				
				<a style="font-family: sans-serif;font-size: 180%;font-style:oblique;font-stretch: expanded;"></a>
				</div>
		</center>
		
		<center>

		<div style="width:60%;"  > 				
		<center>
				<div class="container-fluid"  >		
				
					<div class="row" style="margin: 0px 0px 15px 0px">
					<center style="margin-top:1px;">
						<div class="col-md-3">							
							<img src="imagenes/gestionp.png" style="border: none;width:155px; height:50px;margin-top:1px;"  /><br>
							<a style="font-size:13px;" href="" target="_blank" ></a>
							
							
						</div>
						
						<div class="col-md-3 " >

						</div>
						<div class="col-md-3 " >

						</div>
						
						<div class="col-md-3"  >  
						
							<div style="font-size:8.5pt;color: #050505 ;text-align:right;"  >  
					<?php
						if (isset ($_SESSION['web_nombre_empresaupch']))
						{
								$v_datemp = DateTime::createFromFormat('d/m/Y', $_SESSION['web_dfch_ingupch']);
								//echo $v_datemp->format('Y-m-d');
								echo "$web_login_correo |  <a    class = 'aprincipal' style='text-decoration: underline' href='u_cerrar_sesion.php'> CERRAR SESI&OacuteN</a> <br>";
				
								echo "<strong  style='color:#050505;font-size:10pt;' > " .$_SESSION['web_nombre_empresaupch']. "</strong><br> ";
				
								echo "USUARIO :  <a   class = 'aprincipal' href='#' > " .$_SESSION['web_nombre_usuarioupch']. "</a> <br>";
								?>
								<a>FECHA:&nbsp;&nbsp;</a><input type="date" name="txtdfch_index"  id="txtdfch_index" value="<?php echo $v_datemp->format('Y-m-d'); ?>" 
								style="width:113px;border-color:#797d7f;border:none;font-size:9pt" readonly 
								onBlur="f_tipocambio_index(this,'<?php echo $v_datemp->format('Y-m-d') ?>')" />
								<?php
								//echo "Fecha : <a   class = 'aprincipal' > " .$_SESSION['web_dfch_ing']. "</a>  <br>";
						}
					?>
				
							</div>
						
						</div>
					</center>
					</div>
					
				</div>
				<hr style="width:93%;margin-top:-5px;margin-left:4%;border-color: #ffe29b ;"></hr>
		</center>		

		
				
		<div class="container-fluid" style="margin-top:-10px;" >	
					<div class="row" style="margin: 0px 0px 15px 0px" >
					</div>
					<div class="row" style="margin: 0px 0px 15px 0px" >
						<center >
							<div class="col-md-3 " onclick="cejecuta_paginaphp('<?php echo $web_ctipo ?>','M','principalgp.php','pro_sesionrubro.php')">

									<img alt="value" title="GESTION DE RECLUTAMIENTO" 
									
									src="imagenes/r.png"  style="border: none;width:100px; height:100px;margin-top:8px;" class="img-rounded"/>
									<h4><a  class = 'aprincipal' href="">RECLUTAMIENTO</h4>
								 
							</div>
							
							 
							<div class="col-md-3 " onclick="cejecuta_paginaphp('<?php echo $web_ctipo ?>','M','principalpro.php','pro_sesionrubro.php')">

									<img alt="value" title="PRODUCCION" 
									
									src="imagenes/p.png"  style="border: none;width:100px; height:100px;margin-top:8px;" class="img-rounded"/>
									<h4><a  class = 'aprincipal' href="">PRODUCCION</h4>
								 
							</div>
							
							 
							<div class="col-md-3 " onclick="cejecuta_paginaphp('<?php echo $web_ctipo ?>','M','principaladministracion.php')">
								 
									

							<img alt="value" title="Administracion y configuración del sistema " 
							src="imagenes/administracion.png"  style="border: none;width:100px; height:100px;margin-top:8px;" class="img-rounded"/>
									<h4><a  class = 'aprincipal' href="">ADMINISTRACION</h4>
							 
							</div>
							 
						</center>
					
					</div>
					
					<div class="row" style="margin: 0px 0px 15px 0px" >
					</div>

		</div>

		<footer style="background:#f8f9f9;">
			<center>
				<div  > <a  href="#" ></a>  </div>
			</center>
		</footer>
		
		 
		<hr style="width:93%;margin-top:5px;margin-left:4%;border-color: #ffe29b ;"></hr>
</div>	
</center>

		
	 

</body>

<?php
 
	echo "</html> ";

?>

