<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>GESTION DE PERSONAL</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
	
	<link rel="stylesheet" href="css/alertify/alertify.min.css" />
	<link rel="stylesheet" href="css/alertify/themes/semantic.min.css" />
	
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/alertify.min.js"></script>
	
<style type="text/css">
	
</style>
<script type="text/javascript" src="js/jscpry.js"></script>  

</head>
<body >
<center>
	<div class="modal-dialog" role="document" style="border:1px solid #E6E6FA;box-shadow: 1px 1px 1px 1px #cdcccf;margin-top:10%;">
	    <form     method="post" >
           
       	
			<div style="text-align:center;font-size:19px;padding:8px;padding-top:12px;padding-bottom:20px; ">
				<h3 >USUARIO Y CONTRASEÑA</h3>
			</div>		          
		           	 <!--  <div class="container" style="background: blue;"> -->
		        <div class="row">
		           <div class="input-group grup1" style="width:80%;">
		            <span class="input-group-addon gintup1" id="basic-addon1"> Usuario</span>
		            <input type="text" name="txtcemail" id="txtcemail"  placeholder="ejemplo@cuenta.com" aria-describedby="basic-addon1"
		              				class="form-control gintup2" style="width:100%;" >
		        	</div>
		        </div>
			              
		<div class="row">
			<div class="input-group grup1" style="width:80%;">
					<span class="input-group-addon gintup1" id="basic-addon2"
							  		>  Contrase&ntilde;a   </span>
					<input type="password" name="txtpassword" id="txtpassword"  placeholder="*******" aria-describedby="basic-addon1" 
							 	class="form-control gintup2" style="width:100%;" >
			</div>				
		</div>
		<div class="row">
		        	<!-- <div class="col-md-12"> -->
		              	<div class="input-group grup1" data-provider="datepicker" style="width:80%;">
		              		<span class="input-group-addon gintup1" id="basic-addon1" >  Fecha   </span>
		              		<input type="date" name="txtdfch_ing" id="datepicker"   
		              		value="<?php echo date("Y-m-d"); ?>" style="width:100%;"
		              		
		              	</div>
		            <!-- </div> -->
		            

		        </div>
		<div class="row columnaCierre" >
 
				<center>
				<div class="form-group">
				 <button type="button" id="btnacceso" class="btn btn-success"  style="padding-left:40px;padding-right:40px;" onClick="f_validar_ingreso_inicial(2);return false;">Ingresar</button>
				  </div> 
				</center>
				
				<center>
		            	<div  class="errorMensaje" id="divmensaje" >
		        </center>
						
				 
							
		</div>
		              	
					 <!-- </div> -->      
					    	
	 	</form >
	</div>	
</center>	
</body>
</html>