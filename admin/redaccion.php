<!DOCTYPE html>
<html>
    <head>
		<title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
		<?php include('../head.php'); ?>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
		<style>
		</style>
    </head>
    <body>
		<div class="container">
            
            <div class="row">
                <div class="col-xs-2 form-label">
                    <label>Crear Post</label>
                </div>
                <div class="col-xs-4">                    
                    <select class="form-control">
                        <option>Categoría</option>
                    </select>
                </div>
                <div class="col-xs-6">                    
                    <input type="text" class="form-control" placeholder="Título"/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-6">                    
                    <input type="text" class="form-control" placeholder="Palabra clave"/>
                </div>
                <div class="col-xs-6">                    
                    <input type="text" class="form-control" placeholder="URL"/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">                    
                    <input type="text" class="form-control" placeholder="Descripción"/>
                </div>
            </div>
            
            <div id="summernote"></div>

        </div>
        <?php include('../footer.php'); ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
        <script src="../assets/js/lang/summernote-es-ES.js"></script>
    </body>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height:400,
                lang: 'es-ES'
            });
        });
    </script>
</html>