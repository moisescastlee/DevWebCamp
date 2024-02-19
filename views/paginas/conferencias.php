<main class="agenda">
    <h2 class="agenda__heading">Workshops & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y conferencias dictados por expertos en desarrollo web</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt;Conferencia /></h3>
        <p class="eventos__fecha">Viernes 26 de diciembre 2023</p> 
      
      <div class="eventos__listado slider swiper">
         <div class="swiper-wrapper">
               <?php foreach($eventos ['conferencias_v'] as $evento ) { ?>
                  <?php include __DIR__ . '/../templates/evento.php'; ?>
              <?php } ?>
           </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> 
        </div>

        <p class="eventos__fecha">Sabado 27 de diciembre 2023</p>
        <div class="eventos__listado slider swiper">
               <div class="swiper-wrapper">
                 <?php foreach($eventos ['conferencias_s'] as $evento ) { ?>
                   <?php include __DIR__ . '/../templates/evento.php';  ?>
                 <?php } ?>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div> 
         </div>          
    </div>

      <div class="eventos eventos--workshops">
          <h3 class="eventos__heading">&lt;Workshops /></h3>
          <p class="eventos__fecha">Viernes 25 de diciembre 2023</p>
            <div class="eventos__listado slider swiper">
              <div class="swiper-wrapper">
                 <?php foreach($eventos ['workshops_v'] as $evento ) { ?>
                   <?php include __DIR__ . '/../templates/evento.php';  ?>
                 <?php } ?>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
           </div>
          
         <p class="eventos__fecha">Sabado 26 de diciembre 2023</p>
         <div class="eventos__listado slider swiper">
              <div class="swiper-wrapper">
                 <?php foreach($eventos ['workshops_s'] as $evento ) { ?>
                   <?php include __DIR__ . '/../templates/evento.php';  ?>
                 <?php } ?>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
          </div>
     </div>
</main>