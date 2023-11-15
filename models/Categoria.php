<?php 
namespace Model;

#[\AllowDynamicProperties]
class Categoria extends ActiveRecord {

protected static $tabla = 'categorias';
protected static $columnasDB = ['id', 'nombre'];

public $id;
public $nombre;
}
