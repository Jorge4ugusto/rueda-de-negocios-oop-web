<?php
require_once'Conexion.php';
require_once 'Rubro.php';
$conexion = new Conexion();
$rubro = new Rubro();
$empresa = new Empresa();
?>
<!DOCTYPE HTML>
<!--
	Tessellate by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rueda de Negocios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header" class="dark">

			</section>

		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>Rueda de Negocios</h2>
						<p>Participe en la rueda de negocio y tenga la oportunidad de hacer crecer su empresa<br />
						atraves del intercambio de ideas, negocios, ofertas y demanda entre empresas.</p>
					</div>
				</header>
				<div class="content dark style1 featured">
					<div class="container">
						<div class="row">

								<section>
									<span class="feature-icon"><span class="icon fa-clock-o"></span></span>
									<header>
										<h3>Inscribase ahora, ganara mas tiempo y mejores oportunidades</h3>
									</header>
									<p>Con su inscripcion estara habilitado para poder tener varias citas en los horarios disponibles en la rueda de negocios<br>
									 envie los datos basicos de su empresa tambien un representante opcional recibira una notificacion cuando se haya inscrito. </p>
								</section>
						</div>

					</div>
				</div>
			</section>

		<!-- Second -->

		<!-- Third -->


		<!-- Basic Elements -->


		<!-- Fourth -->
			<section id="fourth" class="main">
				<div class="content style4 featured">
					<div class="container 75%">
						<form method="post" action="RegistrarEmpresa.php">
							<div class="row 50%">
								<div class="6u 12u(mobile)"><input type="text" name="empresa" required="" placeholder="Nombre de la Empresa"/></div>
								<div class="6u 12u(mobile)"><input type="email" name="correo" required="" placeholder="Email" /></div>
								<div class="6u 12u(mobile)"><input type="text" name="web" required="" placeholder="Pagina Web"/></div>
								<div class="6u 12u(mobile)"><input type="text" name="direccion" required="" placeholder="Direccion"/></div>
								<div class="6u 12u(mobile)"><input type="tel" name="telefono" required="" placeholder="Tel&eacute;fono"/></div>
								<div class="6u 12u(mobile)"><input type="text" name="representante" required="" placeholder="Representante o representantes"/></div>
								<div class="6u 12u(mobile)">
								<div class="12u">
									<label for="SeleccionarRubros">Seleccione un Rubro al cual pertenezca su empresa: </label>
									<div class="select" tabindex="-1">
									<select name="SeleccionarRubros">
										<?php
										$lista = $rubro::listarRubro();
										while($row = mysqli_fetch_assoc($lista)){
										 ?>
										 <!--<option></option>-->
										 <option value="<?=$row['ID_RUBRO']?>"><?=$row['nombre_rubro']?></option>
									<?php
										}
									 ?>
									</select>
								</div>
							</div>
							</div>
							<div class="6u 12u(mobile)">
							<div class="12u">
								<label for="SeleccionarTipo">Seleccione que opci&oacute;n busca en la rueda de negocios: </label>
								<div class="select" tabindex="-1">
								<select name="SeleccionarTipo">
									 <option value="ofertante">Ofertante</option>
									 <option value="demandante">Demandante</option>
									 <option value="ambos">Ambos</option>
								</select>
							</div>
						</div>
					</div>
						</div>
							<div class="row 50%">
								<div class="6u 12u(mobile)"><input type="text" name="pais" required="" placeholder="Pais"/></div>
								<div class="6u 12u(mobile)"><input type="text" name="ciudad" required="" placeholder="Ciudad"/></div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" name="Enviar" class="button" value="Enviar" /></li>
										<li><input type="reset" class="button alt" value="Cancelar" /></li>
									</ul>
								</div>
							</div>
						</form>
						<table>
							<thead>
								<th>Empresa</th>
								<th>Rubro</th>
								<th>Direccion</th>
								<th>Telefono</th>
								<th>Pais</th>
								<th>Ciudad</th>
							</thead>
							<tbody>
									<?php
									$listEmpresa = $empresa->ListarEmpresa();
									while($row = mysqli_fetch_assoc($listEmpresa)){
									 ?>
									 <tr>
										 <td><?=$row['nombreempresa']?></td>
										 <td><?=$row['nombre_rubro']?></td>
										 <td><?=$row['direccion']?></td>
										 <td><?=$row['telefono']?></td>
										 <td><?=$row['pais']?></td>
										 <td><?=$row['ciudad']?></td>
									 </tr>
										 <?php
									 }
									 ?>
							</tbody>
						</table>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Rueda de Negocios. Todos los Derechos Reservados.</li><li>Diseño: Jorge Augusto Rodr&iacute;guez con la colaboracion de HTML5 UP</li>
					</ul>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
