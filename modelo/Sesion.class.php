<?php

require_once '../data/Conexion.class.php';

class Sesion extends Conexion
{

    private $email;
    private $clave;

    public function getEmail()
    {
        return $this->email;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function iniciarSesion()
    {
        try {
            $sql = "
                    select

                            u.nombres,
                            u.apellidos,
                            r.clave,
                            r.tipo,
                            r.estado,
                            r.codigo_usuario,
                            c.descripcion as cargo,
                            c.cargo_id
                    from
                        cargo c inner join usuario u
                    on
                        (c.cargo_id = u.cargo_id) inner join credenciales_acceso r
                    on
                        (u.usuario_id = r.usuario_id)
                    where
                            u.email = :p_email;
                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_email", $this->getEmail());
//            $sentencia->bindParam(":p_tipo", $this->getTipo());
            $sentencia->execute();

            if ($sentencia->rowCount()) {
//Le pregunto si ha devuelto registros
                //El usuario si existe
                $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
                if ($resultado["clave"] === md5($this->getClave())) {
                    if ($resultado["estado"] === "I") {
                        return "IN"; //Usuario Inactivo
                    } else {
                        session_name("biomasters_medical");
                        session_start();

                        $_SESSION["s_usuario"] = $resultado["nombres"] . ' ' . $resultado["apellidos"];

                        $_SESSION["s_email"] = $this->getEmail();
                        //$_SESSION["s_doc_id"]       = $resultado["doc_id"];
                        $_SESSION["codigo_usuario"] = $resultado["codigo_usuario"];
                        $_SESSION["cargo_id"]       = $resultado["cargo_id"];
                        $_SESSION["cargo"]          = $resultado["cargo"]; // descripci??n del cargo
                        $_SESSION["tipo"]           = $resultado["tipo"]; // tipo de usuario rol

                        return "SI"; //Si ingresa
                    }
                } else { //la contrase??a no es igual
                    return "CI"; //Contrase??a incorrecta
                }
            } else { //No se encontr?? registros (El usuario no existe)
                return "NE"; //No Existe
            }
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function obtenerOpcionesMenu($codigoCargo)
    {
        try {
            $sql = "
                select
                        distinct
                        m.codigo_menu,
                        m.nombre
                from
                        menu m
                        inner join menu_item_accesos a on ( m.codigo_menu = a.codigo_menu )
                where
                        a.cargo_id = :p_cargo_id
                        and a.acceso = '1'
                order by
                        1
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_cargo_id", $codigoCargo);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function obtenerOpcionesMenuItem($codigoCargo, $codigoMenu)
    {
        try {
            $sql = "
                    select
                            m.nombre,
                            m.archivo
                    from
                            menu_item m
                            inner join menu_item_accesos a
                            on
                            (
                                    m.codigo_menu = a.codigo_menu and
                                    m.codigo_menu_item = a.codigo_menu_item
                            )

                    where
                            a.cargo_id = :p_cargo_id
                            and a.codigo_menu = :p_codigo_menu
                            and a.acceso = '1'
                    order by
                            a.codigo_menu_item
                ";

//            $sentencia = $this->dbLink->prepare($sql);
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_cargo_id", $codigoCargo);
            $sentencia->bindParam(":p_codigo_menu", $codigoMenu);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;

        } catch (Exception $exc) {
            throw $exc;
        }
    }

}
