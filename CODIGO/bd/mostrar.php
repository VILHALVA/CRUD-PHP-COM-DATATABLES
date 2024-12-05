<?php
class Mostrar
{
    public static function listar($conn)
    {

        $consulta = "SELECT * FROM personas";
        try {
            $resultado = $conn->prepare($consulta);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException  $e) {
            echo "Error en la conexión " . $e->getMessage();
        }
    }

    public static function insertar($id, $nombre, $pais, $edad, $conn)
    {
        $consulta = "INSERT INTO personas (nombre,pais,edad) VALUES " .
            " (:nombre, :pais,:edad)";
        $resultado = $conn->prepare($consulta);
        $resultado->bindValue(":nombre", $nombre);
        $resultado->bindValue(":pais", $pais);
        $resultado->bindValue(":edad", $edad);
        $resultado->execute();
    }

    public static function modificar($id, $nombre, $pais, $edad, $conn)
    {
        $sql = "UPDATE personas SET " .
            " nombre=:nombre, pais=:pais, edad=:edad WHERE id=:id";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":nombre", $nombre);
        $resultado->bindValue(":pais", $pais);
        $resultado->bindValue(":edad", $edad);
        $resultado->bindValue(":id", $id);
        $resultado->execute();
    }
    public static function eliminar($id, $conn)
    {
        $sql = "DELETE FROM personas WHERE id='$id'";
        $resultado = $conn->prepare($sql);
        $resultado->execute();
    }
}


