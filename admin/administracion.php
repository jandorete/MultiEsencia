<!DOCTYPE html>
<html>
	<head>
		<title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
        <?php include 'head.php'; ?>
	</head>
    <body>
        <?php include 'header.php'; ?>
			<div class="container">            
				<div class="row">
                    
					<div class="col-sm-6 col-xs-12">
				        <div class="row">
                            <h1 class="h1">Últimos 30 días</h1>
                            <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                        </div>
                        
                        <div class="row" style="margin-top:25px; margin-bottom:25px;">
                            <hr>
                        </div>
                        
                        <div style="margin: 20px;" class="row">
                            <div class="col-xs-3">
                                <img src="assets/images/user.png"/>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="h2">Crear nuevo usuario</h2>
                                <p class="p">Introduce sus datos</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-10">
                                <input placeholder="Correo" class="form-control input-redaccion" type="text"/>
                                <input placeholder="Contraseña" class="form-control input-redaccion" type="password"/>
                            </div>
                            <div class="col-xs-2">
                                <button class="btn" style="color:white; background:#65B853;padding:2.5rem; width:120px; border-radius:0px; text-align:center;">Crear</button>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top:25px; margin-bottom:25px;">
                            <hr>
                        </div>
                        
                        <div class="row">
                            <h2 class="h2">Redactores en el último mes</h2>
                            <p>Conoce tu rendimiento y el de los redactores. Interactúa con ellos para premiar a los mejores y motivar a los peores.</p>
                        </div>
                        
                        <div class="row">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h2 class="h2">Tú</h2>
                                </div>
                                <div class="col-xs-2">
                                    ^ 196
                                </div>
                                <div class="col-xs-2">
                                    u 196
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <img style="margin:15px;" src="assets/images/user.png"/>
                                </div>
                                <div class="col-xs-9">
                                    <p style="margin:20px;">Media de visitas: 1234</p>
                                    <p style="margin:20px;">Media de palabras: 1234</p>
                                    <p style="margin:20px;">Retención media: 1 min 2 seg</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h2 class="h2">Lorem ipsum</h2>
                                </div>
                                <div class="col-xs-2">
                                    ^ 196
                                </div>
                                <div class="col-xs-2">
                                    u 196
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <img style="margin:15px;" src="assets/images/user.png"/>
                                </div>
                                <div class="col-xs-9">
                                    <p style="margin:20px;">Media de visitas: 1234</p>
                                    <p style="margin:20px;">Media de palabras: 1234</p>
                                    <p style="margin:20px;">Retención media: 1 min 2 seg</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-sm-6 col-xs-12">
                    </div>
                    
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                
                var date = new Date();
                var d = [];
                var i;
                
                for(i = 29; i > 0; i--) {
                    d[i] = new Date();
                    d[i].setDate(date.getDate() - i);
                }
                
                var d = new Date();
                
                
                CanvasJS.addColorSet("multiesencia",
                [
                    "#65B853"
                ]);
                
                var chart = new CanvasJS.Chart("chartContainer",
                {
                    colorSet: "multiesencia",
                    title:{
                        text: ""
                    },
                    axisX:{
                        title: "",
                        gridThickness: 1
                    },
                    axisY: {
                        title: ""
                    },
                    data: [{
                        type: "spline",
                        dataPoints: [//array
                        { x: new Date().setDate(date.getDate() - 30), y: 0},
                        { x: new Date().setDate(date.getDate() - 29), y: 1},
                        { x: new Date().setDate(date.getDate() - 28), y: 2},
                        { x: new Date().setDate(date.getDate() - 27), y: 3},
                        { x: new Date().setDate(date.getDate() - 26), y: 4},
                        { x: new Date().setDate(date.getDate() - 25), y: 5},
                        { x: new Date().setDate(date.getDate() - 24), y: 6},
                        { x: new Date().setDate(date.getDate() - 23), y: 7},
                        { x: new Date().setDate(date.getDate() - 22), y: 8},
                        { x: new Date().setDate(date.getDate() - 21), y: 9},
                        { x: new Date().setDate(date.getDate() - 20), y: 10},
                        { x: new Date().setDate(date.getDate() - 19), y: 11},
                        { x: new Date().setDate(date.getDate() - 18), y: 12},
                        { x: new Date().setDate(date.getDate() - 17), y: 13},
                        { x: new Date().setDate(date.getDate() - 16), y: 14},
                        { x: new Date().setDate(date.getDate() - 15), y: 15},
                        { x: new Date().setDate(date.getDate() - 14), y: 16},
                        { x: new Date().setDate(date.getDate() - 13), y: 17},
                        { x: new Date().setDate(date.getDate() - 12), y: 18},
                        { x: new Date().setDate(date.getDate() - 11), y: 19},
                        { x: new Date().setDate(date.getDate() - 10), y: 20},
                        { x: new Date().setDate(date.getDate() - 9), y: 21},
                        { x: new Date().setDate(date.getDate() - 8), y: 22},
                        { x: new Date().setDate(date.getDate() - 7), y: 23},
                        { x: new Date().setDate(date.getDate() - 6), y: 24},
                        { x: new Date().setDate(date.getDate() - 5), y: 25},
                        { x: new Date().setDate(date.getDate() - 4), y: 26},
                        { x: new Date().setDate(date.getDate() - 3), y: 27},
                        { x: new Date().setDate(date.getDate() - 2), y: 28},
                        { x: new Date().setDate(date.getDate() - 1), y: 29},
                        { x: date, y: 30},
                    ]}]
                });

                chart.render();
            }
        </script>  
    </body>
</html>