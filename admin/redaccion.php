<!DOCTYPE html>
<html>
    <head>
		<title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
		<?php include('head.php'); ?>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet"> 
    </head>
    <body>
        <?php include 'header.php'; ?>
		<div class="container">
        
            <form>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="h3">Crear Post</span>
                    </div>
                    <div class="col-xs-4">                    
                        <select class="form-control input-redaccion">
                            <option>Categoría</option>
                        </select>
                    </div>
                    <div class="col-xs-6">                    
                        <input type="text" class="form-control input-redaccion" placeholder="Título"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">                    
                        <input type="text" class="form-control input-redaccion" placeholder="Palabra clave"/>
                    </div>
                    <div class="col-xs-6">                    
                        <input type="text" class="form-control input-redaccion" placeholder="URL"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">                    
                        <input type="text" class="form-control input-redaccion" placeholder="Descripción"/>
                    </div>
                </div>

                <div id="summernote"></div>
                <h3 class="h3">Elige cuándo quieres publicar tu artículo para cubrir la demanda de visitas.</h3>
                <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                
                <h2 class="h2">Antes de terminar...</h2>
                <ul>
                    <li>La palabra clave debe aparecer repetida durante el artículo en una densidad mínima del 2%.</li>
                    <li>Debes escribir un mínimo de 1000 palabras. Quedan 274.</li>
                    <li>Debes incluir al menos 1 enlace interno al blog, creando un contexto adecuado.</li>
                    <li>La palabra clave debe aparecer en el título.</li>
                    <li>La palabra clave debe aparecer en la descripción.</li>
                    <li>La palabra clave debe aparecer en el primer y último párrafo.</li>
                    <li>Debes usar al menos dos imágenes en tu artículo.</li>
                    <li>Debes usar las negritas, aplicándolas en las frases más posicionables.</li>
                    <li>Debes incluir al menos 1 enlace externo a otro blog, evitando a la competencia del mismo idioma.</li>
                    <li>Un artículo organizado es un artículo bien posicionado: usa los subtítulos.</li>
                </ul>
                
            </form>
            
        </div>
        <?php include('footer.php'); ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
        <script src="assets/js/lang/summernote-es-ES.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#summernote').summernote({
                    height:400,
                    lang: 'es-ES'
                });
            });

        </script>    
        <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
            window.onload = function () {
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
                        type: "splineArea",
                        dataPoints: [//array
                        { x: new Date(d.getTime()-(12*60*60*1000)), y: 26},
                        { x: new Date(d.getTime()-(11*60*60*1000)), y: 26},
                        { x: new Date(d.getTime()-(10*60*60*1000)), y: 26},
                        { x: new Date(d.getTime()-(9*60*60*1000)),  y: 38},
                        { x: new Date(d.getTime()-(8*60*60*1000)),  y: 43},
                        { x: new Date(d.getTime()-(7*60*60*1000)),  y: 29},
                        { x: new Date(d.getTime()-(6*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()-(5*60*60*1000)),  y: 26},
                        { x: new Date(d.getTime()-(4*60*60*1000)),  y: 38},
                        { x: new Date(d.getTime()-(3*60*60*1000)),  y: 43},
                        { x: new Date(d.getTime()-(2*60*60*1000)),  y: 29},
                        { x: new Date(d.getTime()-(1*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()), y: 54},
                        { x: new Date(d.getTime()+(1*60*60*1000)),  y: 26},
                        { x: new Date(d.getTime()+(2*60*60*1000)),  y: 38},
                        { x: new Date(d.getTime()+(3*60*60*1000)),  y: 43},
                        { x: new Date(d.getTime()+(4*60*60*1000)),  y: 29},
                        { x: new Date(d.getTime()+(6*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(7*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(8*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(9*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(10*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(11*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(12*60*60*1000)), y: 41},
                    ]}]
                });

                chart.render();
            }
        </script>  
    </body>
</html>