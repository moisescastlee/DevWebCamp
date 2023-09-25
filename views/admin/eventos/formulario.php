<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion eventos</legend>
    
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Eventos</label>
        <input 
        class="formulario__input"
        id="descripcion"
        name="descripcion"
        placeholder="Nombre Eventos"
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion</label>
        <textarea 
        class="formulario__input"
        id="descripcion"
        name="descripcion"
        placeholder="Descripcion Evento"
        rows="8"
        ></textarea>
    </div>

    <div class="formulario__campo">
       <label for="descripcion" class="formulario__label">Categoria o tipo de evento</label>
       <select>
            <?php foreach($categorias as $categoria) { ?> 
                <opcion value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></opcion>
            <?php } ?>
       </select>
    </div>

</fieldset>