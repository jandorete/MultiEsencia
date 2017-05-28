<!DOCTYPE html>
<html>
    <head>
		<title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
		<?php include('head.php'); ?>
        <link href="assets/css/adminpanel.css" rel="stylesheet"> 
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
                <div class="row row-form">
                    <h3 class="h3 center">Elige cuándo quieres publicar tu artículo para cubrir la demanda de visitas.</h3>
                    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                </div>
                
                <div class="row row-form">
                <button class="btn" style="margin-top:1rem; font-size: 21px;color:white; background:#65B853; border-radius:0px; text-align:center; margin: 0 auto; display:block;">Publicar</button>
                </div>
                
                <h2 class="h2 row-form center">Antes de terminar...</h2>
                <div class="center pendiente">
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
                </ul></div>
                
            </form>
            
        </div>
        <?php include('footer.php'); ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
        <script src="assets/js/summernote-es-ES.js"></script>

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
                        { x: new Date(d.getTime()), y: 54},
                        { x: new Date(d.getTime()+(1*60*60*1000)),  y: 26},
                        { x: new Date(d.getTime()+(2*60*60*1000)),  y: 380},
                        { x: new Date(d.getTime()+(3*60*60*1000)),  y: 43},
                        { x: new Date(d.getTime()+(4*60*60*1000)),  y: 29},
                        { x: new Date(d.getTime()+(6*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(7*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(8*60*60*1000)),  y: 400},
                        { x: new Date(d.getTime()+(9*60*60*1000)),  y: 41},
                        { x: new Date(d.getTime()+(10*60*60*1000)), y: 45},
                        { x: new Date(d.getTime()+(11*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(12*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(13*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(14*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(15*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(16*60*60*1000)), y: 100},
                        { x: new Date(d.getTime()+(17*60*60*1000)), y: 410},
                        { x: new Date(d.getTime()+(18*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(19*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(20*60*60*1000)), y: 100},
                        { x: new Date(d.getTime()+(21*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(22*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(23*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(24*60*60*1000)), y: 410},
                        { x: new Date(d.getTime()+(25*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(26*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(27*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(28*60*60*1000)), y: 410},
                        { x: new Date(d.getTime()+(29*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(30*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(31*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(32*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(33*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(34*60*60*1000)), y: 200},
                        { x: new Date(d.getTime()+(35*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(36*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(37*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(38*60*60*1000)), y: 430},
                        { x: new Date(d.getTime()+(39*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(40*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(41*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(42*60*60*1000)), y: 300},
                        { x: new Date(d.getTime()+(43*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(44*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(45*60*60*1000)), y: 50},
                        { x: new Date(d.getTime()+(46*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(47*60*60*1000)), y: 41},
                        { x: new Date(d.getTime()+(48*60*60*1000)), y: 60},
                    ]}]
                });

                chart.render();
            }
        </script>  
    </body>
</html>