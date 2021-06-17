<?php

require_once '../data/Conexion.class.php';

class Comentario extends Conexion
{

    public function agregar($nombre, $email, $comentario)
    {
        $this->dblink->beginTransaction();

        try {

            $sql = "

                    insert into Comentario (nombre_cliente, email_cliente, decripcion_comentario)
                    values(
                            '$nombre',
                            '$email',
                            '$comentario'
                            );
                    ";
            $sentencia = $this->dblink->prepare($sql);

            $sentencia->execute();

            $this->dblink->commit();
            return true;

        } catch (Exception $exc) {
            $this->dblink->rollBack();
            throw $exc;
        }

        return false;
    }

    public function listar()
    {
        try {

            $sql = "
                        select
                            nombre_cliente,
                            decripcion_comentario,
                            email_cliente
                        from
                            comentario;
                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
}
