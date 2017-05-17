<!DOCTYPE html>
<html>
    <head>
        <title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
        <?php include 'head.php'; ?>
		<style>
		.affix {
			width: 187px;
			top: 50px;
			margin-left:-23px;

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
            <div class="row">
            <?php include 'navbar.php'; ?>

<!--            <div class="container-fluid">-->
                    <div class="col-md-8 col-sm-12 content">
                <!-- IMAGEN DESTACADA -->
                    <div class="row">
                        <div class="col-md-12 imagen-destacada">
                            <a href="#">
                                <h1>Titulo de la noticia</h1>
                                <img alt="Prueba" src="https://www.tutecnomundo.com/wp-content/uploads/2017/04/xiaomi-mi-6-precio.jpg" class="img-responsive" />
                            </a>
                        </div>
                    </div>
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
											<img style="width:45px;" src="assets/img/iconosredes/facebook.png"/>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#d62d20;">Google</p>
									</div>
									<div>
										<a href="#">
											<img style="width:45px;" src="assets/img/iconosredes/google.png"/>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#00aced;">Twitter</p>
									</div>
									<div>
										<a href="#">
											<img style="width:45px;" src="assets/img/iconosredes/twitter.png"/>
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
											<img style="width:45px;" src="assets/img/iconosredes/facebook.png"/>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#d62d20;">Google</p>
									</div>
									<div>
										<a href="#">
											<img style="width:45px;" src="assets/img/iconosredes/google.png"/>
										</a>
									</div>
								</div>
								<div class="info-autor">
									<div class="info-autor-content">
										<p style="color:#00aced;">Twitter</p>
									</div>
									<div>
										<a href="#">
											<img style="width:45px;" src="assets/img/iconosredes/twitter.png"/>
										</a>
									</div>
							</div>
                        </div>
                        
						<!-- CONTENEDOR NOTICIA -->
                        <div style="padding:1rem;" class="col-md-9">
                            <div class="encuesta">
								<h2>Encuesta</h2>
								<div class="row pregunta vdivide">
									<div class="col-lg-6 pregunta-encuesta">¿Qué movil con protección al agua IP68 prefieres?</div>
									<div class="col-lg-6">
										<div class="radio">
											<input id="radio-1" name="radio" type="radio" checked>
											<label for="radio-1" class="radio-label">1. Xperia Z5</label>
										</div>
										<div class="radio">
											<input id="radio-2" name="radio" type="radio">
											<label for="radio-2" class="radio-label">2. Moto G2</label>
										</div> 	
										<div class="radio">
											<input id="radio-3" name="radio" type="radio">
											<label for="radio-3" class="radio-label">3. Galaxy S7</label>
										</div>
										<div class="radio">
											<input id="radio-4" name="radio" type="radio">
											<label for="radio-4" class="radio-label">4. Galaxy S6</label>
										</div>
									</div>
								</div>
							</div>
							<div class="encuesta">
								<div class="row pregunta vdivide">
									<div class="col-lg-6 pregunta-encuesta">¿Qué movil con protección al agua IP68 prefieres?</div>
									<div class="col-lg-6">
										<div class="radio">
											<input id="radio-5" name="radio" type="radio" checked>
											<label for="radio-5" class="radio-label">1. Xperia Z5</label>
										</div>
										<div class="radio">
											<input id="radio-6" name="radio" type="radio">
											<label for="radio-6" class="radio-label">2. Moto G2</label>
										</div>
										<div class="radio">
											<input id="radio-7" name="radio" type="radio">
											<label for="radio-7" class="radio-label">3. Galaxy S7</label>
										</div>
										<div class="radio">
											<input id="radio-8" name="radio" type="radio">
											<label for="radio-8" class="radio-label">4. Galaxy S6</label>
										</div>
									</div>
								</div>
								<div class="row resultado">
									<div  style="background:#fff; color:#333; text-align:left;" class="col-lg-5 resultado-encuesta">Ganador: Galaxy S7 <span style="float:right;">54%<span></div>
									<div  style="background:#efefef; color:#333;" class="col-lg-3 resultado-encuesta">1</div>
									<div  style="background:#dcdcdc; color:#333;" class="col-lg-2 resultado-encuesta">2</div>
									<div  style="background:#bfbfbf; color:#333;" class="col-lg-2 resultado-encuesta">4</div>
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
                    <?php include 'sidebar.php'; ?>
<!--                </div>-->
            </div>
			<?php include 'footer.php'; ?>
        </div>
    </body>
</html>