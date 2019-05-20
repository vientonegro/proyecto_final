<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class search extends Model {

    private $idproductos;
    private $categoria;
    private $titulo;
    private $imagen;
    private $descripcion;
    private $precio;
    private $usuarios_usuario;
    static $table = "productos";



        //Buscador

        static public function getdat($dato)
        {

            $db = Model::getInstanceDB();
            $stmt = $db->prepare("SELECT * FROM ".self::$table." WHERE usuarios_usuario LIKE concat('%', $dato, '%') OR titulo LIKE concat('%', $dato, '%')");
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $productos;
        }

}
