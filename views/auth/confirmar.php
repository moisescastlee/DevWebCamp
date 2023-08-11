<main class="auth">

        <h2 class="auth__heading"><?php echo $titulo;?></h2>
        <p class="auth__texto">Tu cuenta DevWebCam</p>

         <?php 
                require_once __DIR__ . '/../templates/alertas.php'; 
         ?>


        <?php if(isset($alertas['error'])) { ?>
                <div class="acciones acciones--centrar">
                  <a href="/login" class="acciones__enlace">Puedes iniciar sesion.</a>
                </div>
        <?php } ?>
</main>