<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Automotora dedicada a la venta de los mejores autos del mercado - Nuevos y Usados">
    <meta name="author" content="Automotora VIP">

	<title>@yield('title') | Automotora VIP</title>

	<!-- CSS de Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- CSS Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- CSS Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>

	<!-- CSS Propio -->
	<link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <nav id="header" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
					<img id="header-logo" src="img/automotora_vip_logo.png" alt="AutoVIP" />
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">Venta 0km</a>
                    </li>
					<li>
                        <a href="">Venta Usados</a>
                    </li>
					<li>
                        <a href="">Sobre Nosotros</a>
                    </li>
                    <li>
						<a href="#" data-toggle="modal" data-target="#contacto-modal">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



	@yield('content')



	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img id="footer-logo" src="img/automotora_vip_logo.png" alt="AutoVIP" />

				</div><!-- /.col -->
				<div class="col-md-3">
					<ul>
						<li><a href="">Venta 0km</a></li>
						<li><a href="">Venta Usados</a></li>
					</ul>
				</div><!-- /.col -->
				<div class="col-md-3">
					<ul>
						<li><a href="">Sobre Nosotros</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contacto-modal">Contacto</a></li>
					</ul>
				</div><!-- /.col -->
				<div class="col-md-3">
					<p style="color:#DDD;">Copyright &copy; AutoVIP 2017</p>
				</div><!-- /.col -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	</div><!-- /#footer -->

	<div id="contacto-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contacto</h4>
				</div>
				<div class="modal-body">
					<form action="https://formspree.io/your@email.com" method="POST">
						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" name="name" value="" class="form-control" placeholder="Ingresar nombre completo...">
						</div><!-- /.form-group -->
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="_replyto" value="" class="form-control" placeholder="Ingresar Email...">
						</div><!-- /.form-group -->
						<div class="form-group">
							<label for="message">Mensaje</label>
							<textarea name="message" rows="8" cols="40" class="form-control" placeholder="Ingresar mensaje..."></textarea>
						</div><!-- /.form-group -->
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->




	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- JS de Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
