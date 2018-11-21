<!DOCTYPE HTML>
<html>
	<head>
		<title>Factura</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Facturacion</a></h1>
					</header>
				<!-- Main -->
					<article id="main">
						<header style="padding-top: 50px; padding-bottom: 50px;" >

						</header>
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<h4 style="text-align: center;">Datos Iniciales</h4>

									<form method="post" action="#">
										<div class="row uniform">

											<div class="8u 12u$(xsmall)">
												<input type="text" name="name" id="name" value="" placeholder="Nombre Cliente" />
											</div>

											<div class="4u$ 12u$(xsmall)">
												<input type="text" name="numero" id="numero" value="" placeholder="N°" />
											</div>

											<div class="2u 12u$(xsmall)">
												<input type="text" name="codigo" id="codigo" value="" placeholder="Piso"/>
											</div>

											<div class="6u 12u$(xsmall)">
												<input type="text" name="descripcion" id="descripcion" value="" placeholder="N° Habitación"/>
											</div>

											<div class="2u 12u$(xsmall)">
												<input type="text" name="cantidad" id="cantidad" value="" placeholder="Dias" onkeyup="format(this)" onchange="format(this)"/>
											</div>

											<div class="2u$ 12u$(xsmall)">
												<input type="text" name="precio" id="precio" value="" placeholder="Precio x Dia" onkeyup="format(this)" onchange="format(this)"/>
											</div>								
										</div>
										<br>
										<div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Agregar" class="principal" id="add_row"/></li>
											</ul>
										</div>
										<br>
										<br>

										<div class="table-wrapper">
											<table id="tabla_factura">
												<thead>
													<tr>
														<th>N° Cliente</th>
														<th>Piso</th>
														<th>Habitación</th>
														<th>Dias</th>
														<th>Precio x Dia</th>
														<th>Subtotal</th>
														<th>Impuesto</th>
														<th>Total</th>
														<td>Acción</td>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="10"></td>
														<td id="total_catidad">0.00</td>
														<td id="total_precio">0.00</td>
														<td id="total_subtotales">0.00</td>
														<td id="total_impuesto">0.00</td>
														<td id="total_total">0.00</td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
									</form>
								</section>
								<br> 
								<br>
								<br>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/josue_first" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/elprogramadorhjl/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/henrryjosue_l/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Developed By HJ.Developer</li><li>Design Template By <a href="#">HTML5 UP</a></li>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="lib/js/invoice.js"></script>

	</body>
</html>