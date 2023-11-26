<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inventario-Cotel</title>
	<link rel="stylesheet" href="{{ asset('bienvenido/css/style.css' )}}" type="text/css">
	<link rel="stylesheet"  href="{{ asset('bienvenido/css/mobile.css') }}" type="text/css">
	<script src="{{ asset('bienvenida/js/mobile.js') }}" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<ul id="navigation">
				
					<li>
						<a href="{{ url('/register') }}">Registrarse</a>
					</li>
					<li class="menu">
						<a href="{{ url('/login') }}">Iniciar Sesion</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header">
				<div>
					<img src="{{ asset('bienvenido/images/satellite.png') }}" alt="" class="satellite">
					<h1>SISTEMA DE INVENTARIO</h1>
					<h2>COTEL-SOPORTE</h2>
					
				</div>
			</div>
			<div class="body">
				<div>
					<h1>NUESTRA MISIÓN</h1>
					<p>Brindar a nuestros socios y clientes servicios de telecomunicaciones con calidad, integrando y fortaleciendo el desarrollo tecnológico, organizacional y humano basado en la excelencia, para contribuir con el crecimiento de Bolivia.</p>
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						
						<li>
							<h1>Contactos-Soporte</h1>
							<ul>
								<li>
									<span>Fausto Puña: 2318000 222</span>
									<span>Rolando Apaza: 2333222</span>
									<span>Juan Carlos Trujillo: 2311016</span>
									<span>Francisco Alarcon: 2311016</span>
									<span>Raul Conde: 2317529 258</span>
								</li>

							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>SIGUENOS EN:</h1>
					<div>
						<a href="https://www.facebook.com/cotel.lp/?locale=es_LA" class="facebook">facebook</a>
						<a href="https://twitter.com/cotelrl/status/1387110066315317250" class="twitter">twitter</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2023 BY SPACE PROSPECTION | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>