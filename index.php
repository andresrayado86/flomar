<!DOCTYPE html>
<html>
<head>
	<title>FLO-MAR Materiales y Aceros</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="img/flom.ico">
	<link rel="stylesheet" type="text/css" href="css/misestilos.css">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB1tc3XgML1h2G-SCt-VPkdW6S5o4bhgpg"></script>
<script type="text/javascript">
    var map;
    function initialize() {
    var settings = {
        zoom: 18,
        center: new google.maps.LatLng(25.7992713,-100.338869),
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
	
</head>
<body onload="function()">

	<div class="container">
		<div class="row-fluid">
	   	<div class="container span12">&nbsp;</div>
		</div>
	
		   	<div class="container span12">
		   		<h1 class="text-aling: center"><img class="vertical-align: middle" src="img/flomarV3320.png" alt="Logo"/>Materiales y Aceros S.A. de C.V.</h1>
			</div>
		
			<div class="row-fluid">
				<div class="container span12">
				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="tab" href="#inicio">Inicio</a></li>
					<li><a data-toggle="tab" href="#quienes">Quienes somos</a></li>
					<li><a data-toggle="tab" href="#historia">Historia</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" aria-label="Left Align">Productos<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a style="color: blue" href="#adhesivo" data-toggle="tab"><i class="i"></i>Adhesivo</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Arenas</a></li>
						<li><a style="color: blue" href="#armex" data-toggle="tab"><i class="i"></i> Armex</a></li>
						<li><a style="color: blue" href="#anillos" data-toggle="tab"><i class="i"></i>Anillos</a></li>
						<li><a style="color: blue" href="#barro" data-toggle="tab"><i class="i"></i>Barroblock</a></li>
						<li><a style="color: blue" href="#block" data-toggle="tab"><i class="i"></i>Block</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Cal</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Canaletas</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Celocia</a></li>
						<li><a style="color: blue" href="#cemento" data-toggle="tab"><i class="i"></i>Cemento</a></li>
						<li><a style="color: blue" href="#clavo" data-toggle="tab"><i class="i"></i>Clavo</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Gravas</a></li>
						<li><a style="color: blue" href="#hielo" data-toggle="tab"><i class="i"></i>Hielo seco</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Impermeabilizante</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Ladrillo</a></li>
						<li><a style="color: blue" href="#malla" data-toggle="tab"><i class="i"></i>Malla electrosoldada</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Marmolina</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Mixto</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Tiraprac</a></li>
						<li><a style="color: blue" href="#stucco" data-toggle="tab"><i class="i"></i>Stucco</a></li>
						<li><a style="color: blue" href="#varilla" data-toggle="tab"><i class="i"></i>Varilla</a></li>
						<li><a style="color: blue" href="#yeso" data-toggle="tab"><i class="i"></i>Yeso</a></li>
						<li><a href="#" data-toggle="tab"><i class="i"></i>Vidrioblock</a></li>
					</ul>
					</li>
					<li><a id="mapTab" data-toggle="tab" href="#ubicacion">Ubicanos</a></li>
					<li><a data-toggle="tab" href="#contacto">Contacto</a></li>
				</ul>
				<div class="container">
				<div class="tab-content">
					<div id="inicio" class="tab-pane active">
						<div class="row-fluid">
							<div class="span12">
								<div id="carousel" class="carousel slide" data-ride="carousel">
							      <ol class="carousel-indicators">
							        <li data-target="#carousel" data-slide-to="0" class="active"></li>
							        <li data-target="#carousel" data-slide-to="1"></li>
							        <li data-target="#carousel" data-slide-to="2"></li>
							        <li data-target="#carousel" data-slide-to="3"></li>
							        <li data-target="#carousel" data-slide-to="4"></li>
							      </ol>
							      <!-- Carousel items -->
							      <div class="carousel-inner">
							        <div class="item active"><img  src="img/frente.jpg" alt="banner1" /></div>
							        <div class="item"><img  src="img/frente2.1.jpg" alt="banner2" /></div>
							        <div class="item"><img  src="img/fachada1.jpg" alt="banner2" /></div>
							        <div class="item"><img  src="img/patio1.jpg" alt="banner3" /></div>
							        <div class="item"><img  src="img/patio4.jpg" alt="banner4" /></div>
							        <div class="item"><img  src="img/patio3.jpg" alt="banner5" /></div>
							      </div>
							      <!-- Carousel nav -->
							      <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
							      <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
							    </div>							
							</div>
						</div>
						<hr>
						<div>
							<h3><p>En <b>FloMar</b> ofrecemos materiales para construcci&oacute;n de calidad y de las mejores marcas.</p></h3>
						</div>
						<div class="well" style="background: white;">
						<div class="row-fluid">
							<div class="span12">
								<img id="imglogos1" src="img/akblogo.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/hylsa.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/cemonterrey.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/apascologo.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/ladrillera.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/uniblock.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/yesera.jpg" class="vertical-align: middle" alt="">
								<img id="imglogos1" src="img/crest.png" class="vertical-align: middle" alt="">
							</div>
						</div>
						</div>
					</div>
					<div id="quienes" class="tab-pane">
						<div class="row-fluid">
							<div class="span6">
								<h3>Misi&oacute;n</h3>
									<p>Somos una empresa comprometida con nuestros clientes, trabajadores y con la comunidad, nos esforzamos por ofrecer productos de calidad a buenos precios, siempre respetando a nuestros competidores.</p>
							</div>
							<div class="span6">
								<img class="vertical-align: middle" src="img/oficina1.jpg"  style="height: 300px;" alt="photo3">
							</div>
							</div>
							<hr>
							<div class="row-fluid">
								<div class="span6">
									<h3>Visi&oacute;n</h3>
										<p>Ser una empresa reconocida por nuestros principios &eacute;ticos y nuestra seriedad en el servicio y atenci&oacute;n a nuestros clientes.</p>
								</div>
								<div class="span6">
									<img class="vertical-align: middle" src="img/oficina2.jpg" style="height: 300px;" alt="photo4">
								</div>
							</div>
						<hr>
						
					</div>
					<div id="historia" class="tab-pane">
						<h3>Historia</h3>
						<p>En Flo-Mar Materiales y Aceros somos una empresa con m&aacute;s de 30 a&#241;os de experiencia en la rama de la construcci&oacute;n. Brindamos atenci&oacute;n personalizada de nuestro personal capacitado para asesorarlo en sus proyectos de construcci&oacute;n. Abastecemos todo tipo de pedidos: mayoreo, medio mayoreo y menudeo proporcionando de esta forma nuestros productos y servicios a los diferentes mercados de la construcci&oacute;n como lo son constructoras, contratistas, materialistas y p&uacute;blico en general.</p>
						<br>	
						<p>Contamos con unidades dise&#241;adas para un mejor transporte, carga y descarga de materiales utilizando modernos sistemas que nos permiten proporcionar un seguro, efectivo y eficiente servicio.</p>
						<div class="row-fluid">
							<div class="span4">
								<img class="vertical-align: middle" src="img/flomar_historia.jpg" style="height: 300px;" alt="photo4">
							</div>
							<div class="span4">
								<img class="vertical-align: middle" src="img/flomar_historia1.jpg" style="height: 300px;" alt="photo4">
							</div>
							<div class="span4">
								<img class="vertical-align: middle" src="img/flomar_historia2.jpg" style="height: 300px;" alt="photo4">
							</div>
						</div>
					</div>
					<div id="adhesivo"class="tab-pane">
						<div class="span3">
							<h4>Adhesivo</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Marca</th>
								<th>Presentaci&oacute;n</th>
							</tr>
							<tr>
								<td>AKB</td>
								<td>20 kg</td>
							</tr>
							<tr>
								<td>Crest</td>
								<td>20 kg</td>
							</tr>
							<tr>
								<td>Uniblock</td>
								<td>20 kg</td>
							</tr>
							
						</table>
						</div>
					</div>
					<div id="armex"class="tab-pane">
						<div class="span3">
							<h4>Armex</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Medida</th>
								<th>Longitud</th>
								
							</tr>
							<tr>
								<td>12x12x4</td>
								<td>6 mts</td>
								
							</tr>
							<tr>
								<td>15x15x4</td>
								<td>6 mts</td>
								
							</tr>
							<tr>
								<td>15x20x4</td>
								<td>6 mts</td>
								
							</tr>
							</table>
						</div>
					</div>
					<div id="anillos"class="tab-pane">
						<div class="span3">
							<h4>Anillos</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Medida</th>
							</tr>
							<tr>
								<td>8 x 15</td>
							</tr>
							<tr>
								<td>10 x 10</td>
							</tr>
							<tr>
								<td>12 x 12</td>
							</tr>
							<tr>
								<td>12 x 16</td>
							</tr>
							<tr>
								<td>12 x 20</td>
							</tr>
							<tr>
								<td>12 x 25</td>
							</tr>
							<tr>
								<td>12 x 30</td>
							</tr>
							<tr>
								<td>15 x 15</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="barro"class="tab-pane">
						<div class="span3">
							<h4>Barroblock</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Marca</th>
								<th>Medida</th>
							</tr>
							<tr>
								<td>Ladrillera Mecanizada</td>
								<td>10 x 30 x 30</td>
							</tr>
							<tr>
								<td>Ladrillera Mecanizada</td>
								<td>15 x 20 x 30</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="block"class="tab-pane">
						<div class="span3">
							<h4>Block</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Tipo</th>
								<th>Tama&#241;o</th>
							</tr>
							<tr>
								<td>Curado al vapor</td>
								<td>4</td>
							</tr>
							<tr>
								<td>T&eacute;rmico</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Curado al vapor</td>
								<td>5</td>
							</tr>
							<tr>
								<td>Curado al vapor</td>
								<td>6</td>
							</tr>
							<tr>
								<td>T&eacute;rmico</td>
								<td>6</td>
							</tr>
							<tr>
								<td>Curado al vapor</td>
								<td>8</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="cemento"class="tab-pane">
						<div class="span3">
							<h4>Cemento</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Marca</th>
								<th>Presentaci&oacute;n</th>
							</tr>
							<tr>
								<td>Moctezuma</td>
								<td>Bulto 50kg</td>
							</tr>
							<tr>
								<td>Monterrey</td>
								<td>Bulto (25, 50)Kg</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="clavo"class="tab-pane">
						<div class="span3">
							<h4>Clavo</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Tipo</th>
								<th>Medida</th>
							</tr>
							<tr>
								<td>Madera</td>
								<td>2 1/2"</td>
							</tr>
							<tr>
								<td>Concreto</td>
								<td>2 1/2"</td>
							</tr>
							<tr>
								<td>Madera</td>
								<td>4"</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="hielo"class="tab-pane">
						<div class="span3">
							<h4>Hielo seco</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Medida</th>
							</tr>
							<tr>
								<td>10 x 50 x 60</td>
							</tr>
							<tr>
								<td>15 x 50 x 60</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="malla"class="tab-pane">
						<div class="span3">
							<h4>Malla Electrosoldada</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Medida</th>
								<th>Longitud</th>
							</tr>
							<tr>
								<td>60 x 10 x 10</td>
								<td>100 mts</td>
							</tr>
							<tr>
								<td>66 x 6 x 6</td>
								<td>100 mts</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="stucco"class="tab-pane">
						<div class="span3">
							<h4>Stucco</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Marca</th>
								<th>Color</th>
							</tr>
							<tr>
								<td>AKB</td>
								<td>Blanco (consulta la gama de colores que la marca ofrece)</td>
							</tr>
							<tr>
								<td>Crest</td>
								<td>Blanco</td>
							</tr>
							<tr>
								<td>Uniblock</td>
								<td>Blanco</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="varilla" class="tab-pane">
						<div class="span3">
							<h4>Varilla</h4>
							<table class="table table-bordered table-striped">
								<tr>
									<th>Medida</th>
									<th>Longitud</th>
									
								</tr>
								<tr>
								
									<td>3/8</td>
									<td>(9,12) mts</td>
									
								</tr>
								<tr>
							
									<td>1/2</td>
									<td>(9,12) mts</td>
									
								</tr>
								<tr>
								
									<td>3/4</td>
									<td>12 mts</td>
									
								</tr>
								<tr>
								
									<td>5/8</td>
									<td>12 mts</td>
									
								</tr>
								
							</table>
						</div>
					</div>
					<div id="yeso"class="tab-pane">
						<div class="span3">
							<h4>Yeso</h4>
							<table class="table table-bordered table-striped">
							<tr>
								<th>Marca</th>
								<th>Presentaci&oacute;n</th>
							</tr>
							<tr>
								<td>Maximo</td>
								<td>Bulto 40kg</td>
							</tr>
							</table>
						</div>
					</div>
					<div id="ubicacion" class="tab-pane">
						<div class="row-fluid">
						<div class="span6">
						<h3>Ubicacion</h3>
						<p>Ave Raul salinas Lozano 1013</p>
						<p>Col. Bosques de Escobedo</p>
						<p>General Escobedo, Nuevo Leo</p>
						<p>C.P 66072</p>
						</div>
						<div id="map_canvas" class="span6"></div>
						</div>
					</div>
					<div id="contacto" class="tab-pane">
						<div class="row-fluid">
							<div class="span6">
								<h3>Contacto</h3>
									<h4>Ventas</h4>
										<p>Telefonos: 83-84-19-98</p> 
										<p>           83-84-05-80</p> 
										<p>           83-84-05-98</p>
										<p>Correo Electr&oacute;nico: flomarmateriales&#64;gmail.com</p>
										<p>Horario: Lunes a viernes 7:30 am a 6:00 pm, S&aacute;bado 7:30 am a 4:00pm </p>
							</div>
							<div id="wellcolor" class="span6 well">
								<form name="contactform" method="post" action="send_form_email.php"> 
								<table width="450px"><!---Este tamaño en px es personalizable -->
								<tr>
								 <td valign="top">
								  <label for="first_name">Nombre *</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="first_name" maxlength="50" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="last_name">Apellido *</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="last_name" maxlength="50" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="email">Correo El&eacute;ctronico *</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="email" maxlength="80" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="telephone">Tel&eacute;fono</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="telephone" maxlength="30" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="message">Mensaje *</label>
								 </td>
								 <td valign="top">
								  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
								 </td>
								</tr>
								<tr>
								 <td colspan="2" style="text-align:center">
								  <input type="submit" value="Enviar">   
								 </td>
								</tr>
								</table>
								</form>
							</div>
						</div>
						
					</div>
				</div>
				</div>
				</div>
							
			</div>
			
	</div>
<script src="bootstrap/js/jquery-2.1.4.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000
        });
    });
</script>
<script>
	$('#mapTab').on('shown', function (e) {
   
    google.maps.event.trigger(map, 'resize');
    
});
</script>

</body>
</html>