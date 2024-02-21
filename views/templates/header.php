<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">
            
        <?php if(is_auth()) { ?>
            <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro'; ?>" class="header__enlace">Administrar</a>
            <form method="POST" class="header__form" action="/logout">
                <input type="submit" value="Cerrar Sesion" class="header__submit">
            </form>

            <?php } else { ?>
             <a href="/registro" class="header__enlace"> Registro</a>
             <a href="/login" class="header__enlace"> Iniciar session</a>
            <?php } ?>

        </nav>
        
            <div class="header__contenido">
                <a href="/">
                    <h1 class="header__logo">
                    &#60;DevWebCam />
                    </h1>
                </a>

            <p class="header__texto">Diciembre 5-6 - 2 O 2 5</p>
            <p class="header__texto header__texto--modalidad">En linea - Presencial</p>
            
            <a href="/registro" class="header__boton">Comprar Pase</a>
         </div>
    </div>
</header>

<div class="barra">
        <div class="barra__contenido">
            <a  href="/login">
                <h2 class="barra__logo">
                    &#60;DevWebCam />
                </h2>
            </a>

            <nav class="navegacion">
                <a href="/devwebcam" class="navegacion__enlace <?php echo pagina_actual('devwebcam') ? 'navegacion__enlace--actual' : ''; ?>">Eventos</a>
                <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
                <a href="/conferencias" class="navegacion__enlace <?php echo pagina_actual('conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Works Shop / Conferencias</a>
                <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('registro') ? 'navegacion__enlace--actual' : ''; ?>">Comprar Pase</a>
            </nav>
        </div>
</div>
