<!--//BLOQUE COOKIES-->
<div id="barraaceptacion" style="display: block;">
    <div class="inner">
        Nos encanta personalizar su experiencia de usuario usando cookies &nbsp;
		<a style="text-decoration:none; color:#fff;" href="javascript:void(0);" onclick="PonerCookie();" id="menu-btn--icon" class="fa fa-lg fa-times" aria-hidden="true"></a>
    </div>
</div>
 
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