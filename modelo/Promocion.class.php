<?php

require_once '../data/Conexion.class.php';

class Promocion extends Conexion
{

    public function agregar($nombre, $descripcion, $estado)
    {
        $this->dblink->beginTransaction();

        try {

            /*Insertar en la tabla laboratorio*/
            $sql = "insert into promocion(nombre, descripcion, estado)
                    value('$nombre','$descripcion', '$estado');";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_nombre", $this->$nombre);
            $sentencia->bindParam(":p_descripcion", $this->$descripcion);
            $sentencia->bindParam(":p_estado", $this->$estado);
            $sentencia->execute();

            $this->dblink->commit();
            return true;

        } catch (Exception $exc) {
            $this->dblink->rollBack();
            throw $exc;
        }

        return false;
    }

    public function leerDatos()
    {
        try {
            $sql = "
                    select max(promocion_id) as id from promocion;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codigo_prueba", $p_codigoPrueba);
            $sentencia->execute();

            $resultado   = $sentencia->fetch(PDO::FETCH_ASSOC);
            $producto_id = $resultado["id"];
            return $producto_id;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function leerDatos_promocion($codPromocion)
    {
        try {
            $sql = "
                    select
                        promocion_id, nombre, descripcion, estado
                    from
                        promocion
                    where
                        promocion_id = :p_codigo_promocion;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codigo_promocion", $codPromocion);
            $sentencia->execute();

            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function editar($codPromocion, $nombre, $descripcion, $estado)
    {
        try {
            $sql = "
                update
                    promocion
                set
                    nombre = :p_nombre,
                    descripcion = :p_descripcion,
                    estado = :p_estado
                where
                    promocion_id = :p_codPromocion;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codPromocion", $codPromocion);
            $sentencia->bindParam(":p_nombre", $nombre);
            $sentencia->bindParam(":p_descripcion", $descripcion);
            $sentencia->bindParam(":p_estado", $estado);
            $sentencia->execute();

            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }

    public function listar()
    {
        try {

            $sql = "
                        select
                            promocion_id,
                            nombre,
                            descripcion,
                            estado
                        from
                            promocion;
                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function eliminar($codPromocion)
    {
        try {
            $sql = "
                delete from promocion where promocion_id = :p_promocion_id;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_promocion_id", $codPromocion);
            $sentencia->execute();

            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }
}
