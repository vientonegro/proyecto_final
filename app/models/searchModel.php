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

        static public function getdat($pos,$dato)
        {

            $db = Model::getInstanceDB();
            $stmt = $db->prepare("SELECT * FROM ".self::$table." WHERE usuarios_usuario LIKE concat('%', $dato, '%') OR titulo LIKE concat('%', $dato, '%')");
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            for($i=0; $i<count($productos); $i++)
            {
                $productos[$i]["descripcion"] = utf8_encode(self::getSubString($productos[$i]["descripcion"]));
            }
            return $productos;
        }
        static public function getById($idproductos)
        {
            $connect = Model::getInstanceDB();
            $stmt = $connect->prepare("SELECT * from ".self::$table." WHERE idproductos=$idproductos");
            $stmt->execute();
            $producto = $stmt->fetch(PDO::FETCH_ASSOC);
            $producto["descripcion"] = utf8_encode($producto["descripcion"]);

            return $producto;
        }   
        public function getSubString($string)
        {
            $length = 400;
            $stringDisplay = substr(strip_tags($string), 0, $length);
            if (strlen(strip_tags($string)) > $length)
                $stringDisplay .= ' ...';
            return $stringDisplay;
        }

}
