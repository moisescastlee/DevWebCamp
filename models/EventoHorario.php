<?php 

namespace Model;

class EventoHorario extends ActiveRecord {

protected static $tabla = 'horas';
protected static $columnasDB = ['id', 'nombre'];

public $id;
public $nombre;

}
