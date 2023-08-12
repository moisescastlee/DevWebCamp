<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Iniciar Sesión en DevWebCamp</p>

    <?php
    require_once __DIR__. '/../templates/alertas.php';
    ?>

    <form method="POST" action="/login" class="formulario" action="">
       
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>

            <input type="email"
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
            >
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>

            <input type="password"
                class="formulario__input"
                placeholder="Tu password"
                id="password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
            <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta?</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
        </div>
</main>