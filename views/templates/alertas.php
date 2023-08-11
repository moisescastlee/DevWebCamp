<?php 
foreach ($alertas as $key => $alerta) {
    foreach ($alerta as $mensaje) {
?>
    <div class="alertas alertas__<?php echo $key; ?>"><?php echo $mensaje;?></div>
        <?php
    }
    
} 
?>
