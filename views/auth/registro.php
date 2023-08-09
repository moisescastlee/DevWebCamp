<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario" action="">
       
        <div class="formulario__campo">
            <label class="formulario__label" for="nombre">Nombre</label>

            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu nombre"
                id="nombre"
                name="nombre"
                value="<?php echo $usuario->nombre; ?>"

            >
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="apellido">Apellido</label>

         <input type="text"
                class="formulario__input"
                placeholder="Tu apellido"
                id="apellido"
                name="apellido"
                value="<?php echo $usuario->apellido; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>

            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
                value="<?php echo $usuario->email; ?>"
            >
        </div>


        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>

            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu password"
                id="password"
                name="password"
            >
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password2"></label>

            <input 
                type="password"
                class="formulario__input"
                placeholder="Repetir password"
                id="password2"
                name="password2"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">

        <div class="acciones">
            <a href="/login" class="acciones__enlace">Ya tienes cuenta? Inicia Sesion!</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
        </div>
    </form>
</main>