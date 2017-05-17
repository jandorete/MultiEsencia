<!DOCTYPE html>
<html>
    <head>
        <title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
        <?php include 'head.php'; ?>
		<style>
		.affix {
			width: 187px;
			top: 50px;
			margin-left:-3px;

		}
		@media only screen and (max-width: 1200px) {
			.sidebar-noticia-desktop{
				display:none;
			}
		}
		@media only screen and (max-width: 768px) {
			#sidebar-right{
				display:none;
			}
			.container{
			margin:0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
			}
		}		
		</style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container">
            <?php include 'navbar.php'; ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- SIDEBAR NOTICIA -->
                        <div class="sidebar-noticia-desktop col-md-3">
							<div data-spy="affix" data-offset-top="380">
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor" style="text-align:right;"><b>Autor</b></p>
										<p class="texto-autor">Antonio Serna</p>
									</div>
									<div>
										<a href="#">
											<img class="foto-autor" src="https://www.placecage.com/55/55" alt="...">
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Leido por 26.793 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-eye" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Comentado por 2 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-commenting" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div style="border: 1px solid #E2E2E2; height: 1px; margin: 20px 0 0 0; width: 100%;" class="separador"></div>
								<br>
								<div style="padding-top:0px;" class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Compartido por 2 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-share-alt" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#3b5998;">Facebook</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#3b5998;" class="fa fa-3x fa-facebook" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#d62d20;">Google</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#d62d20;" class="fa fa-3x fa-google" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#00aced;">Twitter</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#00aced;" class="fa fa-3x fa-twitter" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
                        </div>
                        <div style="display:none;" class="sidebar-noticia-smartphone col-xs-12">
							
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor" style="text-align:right;"><b>Autor</b></p>
										<p class="texto-autor">Antonio Serna</p>
									</div>
									<div>
										<a href="#">
											<img class="foto-autor" src="https://www.placecage.com/55/55" alt="...">
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Leido por 26.793 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-eye" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Comentado por 2 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-commenting" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div style="border: 1px solid #E2E2E2; height: 1px; margin: 20px 0 0 0; width: 100%;" class="separador"></div>
								<br>
								<div style="padding-top:0px;" class="info-autor">
									<div class="info-autor-content">
										<p class="texto-autor">Compartido por 2 personas</p>
									</div>
									<div>
										<a href="#">
											<i class="fa fa-3x fa-share-alt" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#3b5998;">Facebook</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#3b5998;" class="fa fa-3x fa-facebook" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#d62d20;">Google</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#d62d20;" class="fa fa-3x fa-google" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#00aced;">Twitter</p>
									</div>
									<div>
										<a href="#">
											<i style="color:#00aced;" class="fa fa-3x fa-twitter" aria-hidden="true"></i>
										</a>
									</div>
							</div>
                        </div>
                        
						<!-- CONTENEDOR -->
                        <div style="padding:1rem;" class="col-md-9">
                            <div class="encuesta">
								<h2>Encuesta</h2>
								<div class="row pregunta vdivide">
									<div class="col-lg-6 pregunta-encuesta">¿Qué movil con protección al agua IP68 prefieres?</div>
									<div class="col-lg-6">
										<div class="radio">
										  <label><input type="radio" name="optradio">Option 1</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Option 2</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Option 3</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Option 3</label>
										</div>
									</div>
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
                    <?php include 'sidebar.php'; ?>
                </div>
            </div>
			<?php include 'footer.php'; ?>
        </div>
    </body>
</html>