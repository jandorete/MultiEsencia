        <nav id="nav" class="nav-container bgcolor-tutecnomundo">
            <ul id="nav-ul" class="inline-flex flex-row flex-wrap items-center justify-between">
                <li class="nav-logo">
                    <a href="inicio.php"><img src="assets/img/Iconos Temáticas/D TuTecnoMundo.png" alt="TuTecnoMundo" height="80" /> 
                        <span class="texto-logo">TuTecnoMundo</span>
                    </a>
                </li>
                <li class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/multiesencia/admin/inicio.php") echo 'seleccion-cabecera'; ?>" >
                    <a href="inicio.php" id="menu-btn">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i>
						<span class="texto-cabecera">Inicio</span>
                    </a>
                </li>
				<li class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'chat') !== false) echo 'seleccion-cabecera'; ?>">
                    <a href="chat/" id="menu-btn">
                        <i class="fa fa-weixin fa-lg" aria-hidden="true"></i>&nbsp; 
						<span class="texto-cabecera">Chat</span>
                    </a>
                </li>
				<li class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/multiesencia/admin/redaccion.php") echo 'seleccion-cabecera'; ?>">
                    <a href="redaccion.php" id="search-btn">
                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>&nbsp;
                        <span class="texto-cabecera">Redacción</span>
                    </a>
                </li>
				<li class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/multiesencia/admin/perfil.php") echo 'seleccion-cabecera'; ?>">
                    <a href="perfil.php" id="search-btn">
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;
                        <span class="texto-cabecera">Mi perfil</span>
                    </a>
                </li>
                <li class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/multiesencia/admin/administracion.php") echo 'seleccion-cabecera'; ?>">
                    <a href="administracion.php" id="search-btn">
                        <i class="fa fa-area-chart fa-lg" aria-hidden="true"></i>&nbsp;
                        <span class="texto-cabecera">Administración</span>
                    </a>
                </li>
            </ul>
        </nav>