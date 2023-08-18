<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Personal</legend>

    <div class="formulario__campo">
        <label for="nombre">Nombre</label>
        <input 
        type="text"
        class="formulario__input"
        id="nombre"
        name="nombre"
        placeholder="Nombre Ponente"
        value="<?php echo $ponente->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="apellido">Nombre</label>
        <input 
        type="text"
        class="formulario__input"
        id="apellido"
        name="apellido"
        placeholder="Apellido Ponente"
        value="<?php echo $ponente->apellido ?? ''; ?>"
        >
    </div>
</fieldset>