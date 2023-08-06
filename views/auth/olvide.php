<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recuperar tu acceso con WebCam</p>

    <form class="formulario" action="">
       
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>

            <input type="text"
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Enviar instrucciones">

        <div class="acciones">
            <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta?</a>
            <a href="/login" class="acciones__enlace">Ya tienes cuenta? Inicia Sesion!</a>
        </div>
    </form>
</main>