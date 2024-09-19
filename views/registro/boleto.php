<main class="pagina">
    <h2 class="pagina__heading"><?php echo $titulo; ?></h2>
    <p class="pagina__descripcion"> tu boleto <br> - te recomiendo almacenarlo. </p>

    <div class="boleto boleto--presencial boleto--acceso">
       
        <div class="boleto__contenido">
            <h4 class="boleto__logo">&#60;DevWebCamp /></h4>
            <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
            <p class="boleto__nombre"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?></p>
        </div>

            <p class="boleto__codigo"><?php echo '#' . $registro->token; ?></p>
    </div>
</main>