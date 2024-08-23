<main class="auth">
        <h2 class="auth__heading"><?php echo $titulo;?></h2>
        <p class="auth__texto">Tu cuenta DevWebCam</p>
        
            

         <?php 
                require_once __DIR__ . '/../templates/alertas.php';       
         ?>
              <div class="dashboard__contenedor--boton">
                  <a class="dashboard__boton" href="/login">
                  <i class="fa-solid fa-house fa-beat"></i>
                  </a>
              </div>

        <?php if(isset($alertas['error'])) { ?>
                
        <?php } ?>
        
</main>