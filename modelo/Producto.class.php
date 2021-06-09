<?php

require_once '../data/Conexion.class.php';

class Producto extends Conexion
{

    public function agregar($nombre, $descripcion, $estado, $codCategoria, $codTipo)
    {
        $this->dblink->beginTransaction();

        try {

            /*Insertar en la tabla laboratorio*/
            $sql = "insert into producto(nombre, descripcion, estado, usuario_id, tipo_id, categoria_id)
                    value('$nombre','$descripcion', '$estado', 1, $codTipo, $codCategoria);";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_nombre", $this->$nombre);
            $sentencia->bindParam(":p_descripcion", $this->$descripcion);
            $sentencia->bindParam(":p_estado", $this->$estado);
            $sentencia->bindParam(":p_codTipo", $this->$codTipo);
            $sentencia->bindParam(":p_codCategoria", $this->$codCategoria);

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
                    select max(producto_id) as id from producto;
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

    public function productoMasVendido($producto_id)
    {
        try {
            $sql = "
                    select producto_id, nombre, descripcion from producto where estado = 1;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function listarLosRecienLLegados($producto_id)
    {
        try {
            $sql = "
                    select producto_id, nombre, descripcion from producto where estado = 2;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    public function leerDatos_producto($codProducto)
    {
        try {
            $sql = "
                    select
                        producto_id, nombre, descripcion, estado, tipo_id, categoria_id
                    from
                        producto
                    where
                        producto_id = :p_codigo_producto;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codigo_producto", $codProducto);
            $sentencia->execute();

            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function editar($codProducto, $nombre, $descripcion, $estado, $codCategoria, $codTipo)
    {
        try {
            $sql = "
                update
                    producto
                set
                    nombre       = :p_nombre,
                    descripcion  = :p_descripcion,
                    estado       = :p_estado,
                    tipo_id      = :p_codTipo,
                    categoria_id = :p_codCategoria
                where
                    producto_id = :p_codProducto;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codProducto", $codProducto);
            $sentencia->bindParam(":p_nombre", $nombre);
            $sentencia->bindParam(":p_descripcion", $descripcion);
            $sentencia->bindParam(":p_estado", $estado);
            $sentencia->bindParam(":p_codTipo", $codTipo);
            $sentencia->bindParam(":p_codCategoria", $codCategoria);
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
                            producto_id,
                            nombre,
                            descripcion,
                            estado,
                            tipo_id,
                            categoria_id
                        from
                            producto;
                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function eliminar($codProducto)
    {
        try {
            $sql = "
                delete from producto where producto_id = :p_producto_id;
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_producto_id", $codProducto);
            $sentencia->execute();

            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }
}
