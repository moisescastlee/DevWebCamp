<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu  nuevo password</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) {?> 

    <form method="POST" class="formulario">
       
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Email</label>

            <input type="text"
                class="formulario__input"
                placeholder="Coloca tu nuevo password"
                id="password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Guardar tu nuevo password">

        <div class="acciones">
            <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta?</a>
            <a href="/login" class="acciones__enlace">Inicia Sesion ahora.</a>
        </div>
    </form>

    <?php } ?> 
</main>