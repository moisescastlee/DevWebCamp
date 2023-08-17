<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor--boton">
    <a class="dashboard__boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left">
            volver
        </i>
    </a>
</div>

<div class="dashboard__formulario">
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST" action="/admin/ponentes/crear" class="formulario" action="">

        <input class="boton" type="submit" value="registrar ponente">

    </form>
</div>