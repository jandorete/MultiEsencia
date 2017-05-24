<footer id="footer">
	<section id="footer-bottom">
		<div style="padding:15px;" class="container">
					<div id="copyright">
						<p style="display: flex;
								  justify-content: center;
								  flex-wrap: wrap;
								  flex-direction: row;
								  align-items: center;">
								  TuTecnoMundo © 2017    -   <a href="https://www.multiesencia.com/contacto.html" target="_blank">Contacto</a>   -   <a href="https://www.multiesencia.com/trabajo.html" target="_blank">Trabajo</a>   -   <a href="https://www.multiesencia.com/publicidad.html" target="_blank">Publicidad</a>   -   <a href="https://www.multiesencia.com/legal.html" target="_blank">Legal</a></p>
					</div>
				</div>
	</section>
</footer>
<script>
    function getCookie(c_name){
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1){
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1){
            c_value = null;
        }else{
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1){
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start,c_end));
        }
        return c_value;
    }

    function setCookie(c_name,value,exdays){
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
        document.cookie=c_name + "=" + c_value;
    }

    if(getCookie('tiendaaviso')!="1"){
        document.getElementById("barraaceptacion").style.display="block";
    }
    function PonerCookie(){
        setCookie('tiendaaviso','1',365);
        document.getElementById("barraaceptacion").style.display="none";
    }
    
    // funcion que se encarga de ajustar el alto del sidebar. se llamara en ready() y en resize()
    function ajustarAlto() {
        var height = $('.content').height();
        var height2 = $('.sidebar').height();
        
        if (height>height2) {
            $('.sidebar').height(height);
        }
    }
    
    $(window).resize(function() {  
        ajustarAlto();
    });
    
    $(window).ready(function() {
        ajustarAlto();
    })
    
</script>
<!--//FIN BLOQUE COOKIES-->

<script src="dist/selection-sharer.js"></script>
<script>
    $('p').selectionSharer();
</script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>