<main class="agenda">
    <h2 class="agenda__heading">Workshops & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y conferencias dictados por expertos en desarrollo web</p>

  <div class="eventos">
        <h3 class="eventos__heading">&lt;Conferencias /></h3>
        <p class="eventos__fecha">Viernes 26 de diciembre 2023</p> 
      <div class="eventos__listado slider swiper">
         <div class="swiper-wrapper">
             <?php foreach($eventos ['conferencias_v'] as $evento ) { ?>
             <div class="evento swiper-slide">
                 <p class="evento__hora"><?php echo $evento->hora->hora; ?></p>  
                 <div class="evento__informacion">
                      <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>                        
                      <p class="evento__introduccion"><?php echo $evento->descripcion; ?></p>
                    
                       <div class="evento__autor-info">
                         <picture>
                            <source srcset="/imagenes/speakers/<?php echo $evento->ponente->imagen; ?>.webp" type="image/webp/">
                            <source srcset="/imagenes/speakers/<?php echo $evento->ponente->imagen; ?>.png" type="image/png/">
                            <img class="evento__imagen-autor" loading="lazy" width="200" height="300" src="/imagenes/speakers/<?php echo $evento->ponente->imagen; ?>.png" alt="Texto ponente">
                         </picture>
                         <p class="evento__autor-nombre">
                            <?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido; ?>
                          </p>
                      </div>
                    </div>
                </div>
              <?php } ?>
          </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> 

        </div>
    </div>
  


    <div class="eventos eventos--workshops">
        <h3 class="eventos__heading">&lt;Workshops /></h3>
        <!-- HORA CON JAVASCRIPS  <p id="current-time" class="eventos__fecha"></p> -->
        <p class="eventos__fecha">Viernes 25 de diciembre 2023</p>
          <div class="eventos__listado">

          </div>
        
         <!-- HORA CON JAVASCRIPS  <p id="current-time" class="eventos__fecha"></p> -->
        <p class="eventos__fecha">Sabado 26 de diciembre 2023</p>
        <div class="eventos__listado">
      </div>
    </div>

</main>