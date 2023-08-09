<?php 
foreach ($alertas as $key => $alertas) {
    foreach ($alertas as $mensaje) {
?>
    <div class="alertas alertas__<?php echo $key; ?>"><?php echo $mensaje;?></div>
        <?php
    }
}
