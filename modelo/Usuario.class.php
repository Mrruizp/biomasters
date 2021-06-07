<?php

require_once '../data/Conexion.class.php';

class Usuario extends Conexion
{

    private $Cod_credenciales;
    private $Dni;
    private $P_foto;
    private $NombreCompleto;
    private $Apellidos;
    private $Direccion;
    private $Email;
    private $Telefono;
    //private $Sexo;
    //private $Edad;
    private $Cargo;
    private $Constrasenia;
    private $Tipo;
    private $Estado;
    private $CodigoCurso;
    //private $Cuenta;

    public function getCod_credenciales()
    {
        return $this->Cod_credenciales;
    }

    public function getCodigoUsuario()
    {
        return $this->CodigoUsuario;
    }

    public function getDni()
    {
        return $this->Dni;
    }

    public function getP_foto()
    {
        return $this->P_foto;
    }

    public function getNombreCompleto()
    {
        return $this->NombreCompleto;
    }

    public function getDireccion()
    {
        return $this->Direccion;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function getCargo()
    {
        return $this->Cargo; // es el c贸digo del cargo
    }

    public function getConstrasenia()
    {
        return $this->Constrasenia;
    }

    public function getTipo()
    {
        return $this->Tipo;
    }

    public function getEstado()
    {
        return $this->Estado;
    }

    public function setCod_credenciales($Cod_credenciales)
    {
        $this->Cod_credenciales = $Cod_credenciales;
    }

    public function setCodigoUsuario($CodigoUsuario)
    {
        $this->CodigoUsuario = $CodigoUsuario;
    }

    public function setDni($Dni)
    {
        $this->Dni = $Dni;
    }

    public function setP_foto($P_foto)
    {
        $this->P_foto = $P_foto;
    }

    public function setNombreCompleto($NombreCompleto)
    {
        $this->NombreCompleto = $NombreCompleto;
    }

    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;
    }

    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    public function SetEmail($Email)
    {
        $this->Email = $Email;
    }

    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    public function setCargo($Cargo)
    {
        $this->Cargo = $Cargo;
    }

    public function setConstrasenia($Constrasenia)
    {
        $this->Constrasenia = $Constrasenia;
    }

    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    public function listar()
    {

        try {
            $sql = "
                    select
                        codigo_usuario,
                        clave,
                        tipo,
                        estado,
                        usuario_id

                    from
                        credenciales_acceso
                    order by
                            2
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function leerDatos($p_dni)
    {
        try {
            $sql = "
                    select

                            u.nombres,
                            u.apellidos,
                            u.email,
                            r.clave,
                            r.tipo,
                            r.estado,
                            r.usuario_id,
                            u.cargo_id
                    from
                        usuario u inner join credenciales_acceso r
                    on
                        (u.usuario_id = r.usuario_id)
                    where
                            u.email = :p_dni;

                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_dni", $p_dni);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function leerFoto($p_dni)
    {
        try {
            $sql = "
                    select
                        doc_id
                    from
                        credenciales_acceso
                    where
                        doc_id = :p_dni

                ";

            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_dni", $p_dni);
            // $sentencia->bindParam(":p_foto", $this->getP_foto);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

}
