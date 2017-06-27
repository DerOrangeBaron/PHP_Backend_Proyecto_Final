@extends('layouts.master')

@section('title')
Nosotros
@endsection

@section('content')

<div id="about-us">
	<div class="container">

		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sobre Nosotros</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img id="company-photo" class="img-responsive" src="img/about.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2><span>AUTO</span><strong>VIP</strong></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
				<p>
					<button type="button" name="button" class="btn btn-default" data-toggle="modal" data-target="#contacto-modal"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contacto</button>
				</p>
            </div>
        </div><!-- /.row -->

		<!-- Equipo -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Nuestro Equipo</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/cofounder_1.jpg" alt="">
                    <div class="caption">
                        <h3>Juan Pérez<br>
                            <small>Co-Fundador</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col -->
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/cofounder_2.jpg" alt="">
                    <div class="caption">
                        <h3>María Rodríguez<br>
                            <small>Co-Fundador</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col -->
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/cofounder_3.jpg" alt="">
                    <div class="caption">
                        <h3>Juan Gómez<br>
                            <small>Co-Fundador</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col -->
		</div><!-- /.row -->

	</div><!-- /.container -->
</div><!-- /#about-us -->

@endsection