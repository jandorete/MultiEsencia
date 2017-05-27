<!DOCTYPE html>
<html>
	<head>
		<title>TuTecnoMundo - Apps y Juegos Android - Noticias android y top de las mejores apps, juegos y personalizacion para android. Saca el máximo a tu movil / celular o tablet en TuTecnoMundo.</title>
        <?php include 'head.php'; ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<style>
		.todolist{
    background-color:#FFF;
    padding:0px 20px 10px 20px;
	color:#333;
}
.checkbox label, .radio label {
    color: #333;
}
.todolist h1{
    margin:0;
    padding-bottom:20px;
    text-align:center;
}
.form-control{
    border-radius:0;
}
li.ui-state-default{
    background:#fff;
    border:none;
    border-bottom:1px solid #ddd;
}

li.ui-state-default:last-child{
    border-bottom:none;
}

.todo-footer{
    background-color:#F4FCE8;
    margin:0 -20px -10px -20px;
    padding: 10px 20px;
}
#done-items li{
    padding:10px 0;
    border-bottom:1px solid #ddd;
    text-decoration:line-through;
}
#done-items li:last-child{
    border-bottom:none;
}
#checkAll{
    margin-top:10px;
}
		</style>
	</head>
    <body>
        <?php include 'header.php'; ?>
			<div class="container">            
				<div class="row">
                    
					<div class="col-sm-6 col-xs-12">
				        <div class="row">
                            <h1 class="h2">Últimos 30 días</h2><br>
                            <div id="chartContainer" style="height: 300px; margin-bottom:1rem;width: 100%;"></div>
                        </div>
                        
                        <div style="margin-left:0px; margin-right:0px;" class="separador"></div>
                        
                        <div style="display:flex; align-items:center; justify-content:flex-start;" class="row">
                            <div class="col-xs-2">
                                <img style="height:65px;" src="assets/images/user.png"/>
                            </div>
                            <div style="padding-left:0px;" class="col-xs-10">
                                <h2 class="h2">Crear nuevo usuario</h2>
                                <p class="p">Introduce sus datos</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div style="" class="col-xs-12">
                                <input style="margin-bottom:10px;" placeholder="Correo" class="form-control input-redaccion" type="text"/>
                                <input placeholder="Contraseña" class="form-control input-redaccion" type="password"/>
								<p style="float:left; clear:right; margin-top:1rem; ">El correo deberá ser creado con el correo de multiesencia</p>
								<button class="btn" style="margin-top:1rem; float:right; font-size: 21px;color:white; background:#65B853; border-radius:0px; text-align:center;">Crear</button>
                            </div>
                        </div>
                        
                        <div style="margin-left:0px; margin-right:0px;" class="separador"></div>
                        
                        <div class="row">
                            <h2 class="h2">Redactores en el último mes</h2>
                            <p>Conoce tu rendimiento y el de los redactores. Interactúa con ellos para premiar a los mejores y motivar a los peores.</p>
                        </div>
                        
                        <div style="padding-bottom:1rem;" class="row">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="h3">Tú - Antonio Serna</h3>
                                </div>
								<div style="position: relative; top: 23px;" class="puntuacion-usuario">
									<div class="col-xs-2">
										12<a href="#" class="positivo fa fa-sort-asc fa-1x fa-fw" aria-hidden="true"></a>
									</div>
									<div class="col-xs-2">
										12<a href="#" class="negativo fa fa-sort-desc fa-1x fa-fw" aria-hidden="true"></a>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img class="foto-usuario" style="height:65px;" src="http://www.placecage.com/60/60"/>
                                </div>
                                <div class="col-xs-10">
									<ul>
										<li>Media de visitas: 1234</li>
										<li>Media de palabras: 1234</li>
										<li>Retención media: 1 min 2 seg</li>
									</ul>
                                </div>
                            </div>
                        </div>
                        
                        <div style="padding-bottom:2rem;" class="row">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="h3">1 - Andi Cristea</h3>
                                </div>
								<div style="position: relative; top: 23px;" class="puntuacion-usuario">
									<div class="col-xs-2">
										12<a href="#" class="positivo fa fa-sort-asc fa-1x fa-fw" aria-hidden="true"></a>
									</div>
									<div class="col-xs-2">
										12<a href="#" class="negativo fa fa-sort-desc fa-1x fa-fw" aria-hidden="true"></a>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img class="foto-usuario" style="height:65px;" src="http://www.placecage.com/70/70"/>
                                </div>
                                <div class="col-xs-10">
									<ul>
										<li>Media de visitas: 1234</li>
										<li>Media de palabras: 1234</li>
										<li>Retención media: 1 min 2 seg</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-xs-12">
						<div class="row">
                            <h2 class="h2 right-align">Promociones para YouTubers</h2><br>
							<div class="todolist">
								<ul id="done-items" class="list-unstyled">
									<li>Some item <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-remove"></span></button></li>
									
								</ul>
							</div>
                            <div class="todolist not-done">
								<input type="text" class="form-control add-todo" placeholder="Add todo">
									<button id="checkAll" class="btn btn-success">Marcar todo como realizado</button>
									
									<hr>
									<ul id="sortable" class="list-unstyled">
									<li class="ui-state-default">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="" />Take out the trash</label>
										</div>
									</li>
									<li class="ui-state-default">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="" />Buy bread</label>
										</div>
									</li>
									<li class="ui-state-default">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="" />Teach penguins to fly</label>
										</div>
									</li>
								</ul>
								<div class="todo-footer">
									<strong><span class="count-todos"></span></strong> Items Left
								</div>
							</div>
							
                        </div>
                        
                        <div style="margin-left:0px; margin-right:0px;" class="separador"></div>
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
		<script>
		$("#sortable").sortable();
$("#sortable").disableSelection();

countTodos();

// all done btn
$("#checkAll").click(function(){
    AllDone();
});

//create todo
$('.add-todo').on('keypress',function (e) {
      e.preventDefault
      if (e.which == 13) {
           if($(this).val() != ''){
           var todo = $(this).val();
            createTodo(todo); 
            countTodos();
           }else{
               // some validation
           }
      }
});
// mark task as done
$('.todolist').on('change','#sortable li input[type="checkbox"]',function(){
    if($(this).prop('checked')){
        var doneItem = $(this).parent().parent().find('label').text();
        $(this).parent().parent().parent().addClass('remove');
        done(doneItem);
        countTodos();
    }
});

//delete done task from "already done"
$('.todolist').on('click','.remove-item',function(){
    removeItem(this);
});

// count tasks
function countTodos(){
    var count = $("#sortable li").length;
    $('.count-todos').html(count);
}

//create task
function createTodo(text){
    var markup = '<li class="ui-state-default"><div class="checkbox"><label><input type="checkbox" value="" />'+ text +'</label></div></li>';
    $('#sortable').append(markup);
    $('.add-todo').val('');
}

//mark task as done
function done(doneItem){
    var done = doneItem;
    var markup = '<li>'+ done +'<button class="btn btn-default btn-xs pull-right  remove-item"><span class="glyphicon glyphicon-remove"></span></button></li>';
    $('#done-items').append(markup);
    $('.remove').remove();
}

//mark all tasks as done
function AllDone(){
    var myArray = [];

    $('#sortable li').each( function() {
         myArray.push($(this).text());   
    });
    
    // add to done
    for (i = 0; i < myArray.length; i++) {
        $('#done-items').append('<li>' + myArray[i] + '<button class="btn btn-default btn-xs pull-right  remove-item"><span class="glyphicon glyphicon-remove"></span></button></li>');
    }
    
    // myArray
    $('#sortable li').remove();
    countTodos();
}

//remove done task from list
function removeItem(element){
    $(element).parent().remove();
}
		</script>
    </body>
</html>