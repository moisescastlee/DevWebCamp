<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion eventos</legend>
    
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Eventos</label>
        <input 
        class="formulario__input"
        id="nombre"
        name="nombre"
        placeholder="Nombre Evento"
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
   <label for="categoria" class="formulario__label">Categoría o Tipo de Evento</label>
    <select
        class="formulario__select"
        id="categoria"
        name="categoria_id"
        >
        <option value="">- Seleccionar -</option>
        <?php foreach($categorias as $categoria) { ?>
          <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
        <?php } ?>
    </select>
  </div>   

  <div class="formulario__campo">
   <label for="categoria" class="formulario__label">Seleccione el dia</label>

            <div class="formulario__radio">
                <?php foreach ($dias as $dia) { ?>
                    <div>
                        <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                          <input 
                            type="radio"
                            id="<?php echo strtolower($dia->nombre); ?>"
                            name="dia"
                            value="<?php echo $dia->id; ?>"
                            />
                </div>
            <?php } ?>
        </div>
  </div>

  <div id="hora" class="formulario__campo">
    <label class="formulario__label">Seleccionar Hora</label>
      
      <ul class="horas">
          <?php foreach($horas as $hora) { ?>
              <li class="horas__hora"><?php echo $hora->hora; ?></li>
          <?php } ?>  
      </ul>
  </div>
</fieldset>

<fieldset class="formulario__fieldset">
      <legend class="formulario__legend">Informacion Extra</legend>

      <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input 
        class="formulario__input"
        id="ponentes"
        placeholder="Buscar ponente"
        >
    </div>

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares disponibles</label>
        <input 
        type="number"
        min="1"
        class="formulario__input"
        id="disponibles"
        name="disponibles"
        placeholder="Ej. 20"
        >
    </div>
</fieldset>

