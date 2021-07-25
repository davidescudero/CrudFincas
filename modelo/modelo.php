<?php

require_once "conexion.php";

class ModeloFormularios {

    static public function mdlRegistroLote($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_lote,fecha_recoleccion, cantidad) VALUES (:id_lote, :fecha_recoleccion, :cantidad)");

        $stmt->bindParam(":id_lote", $datos["id_lote"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_recoleccion", $datos["fecha_recoleccion"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad_lote"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function mdlRegistroFinca($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,cantidad_arboles, direccion) VALUES (:nombre, :cantidad_arboles, :direccion)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_arboles", $datos["cantidad_arboles"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function mdlRegistroRepartidor($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_repartidor,nombres, direccion, telefono) VALUES (:id_repartidor, :nombres, :direccion, :telefono)");

        $stmt->bindParam(":id_repartidor", $datos["id_repartidor"], PDO::PARAM_STR);
        $stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor) {

        if ($item == null && $valor == null) {

            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_recoleccion, '%d/%m/%Y') AS fecha_recoleccion FROM $tabla ORDER BY id_lote DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fecha_creacion FROM $tabla WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlSeleccionarRegistrosFinca($tabla, $item, $valor) {

        if ($item == null && $valor == null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id_finca DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id_finca DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlActualizarRegistroLote($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha_recoleccion=:fecha_recoleccion, cantidad=:cantidad WHERE id_lote = :id_lote");

        $stmt->bindParam(":fecha_recoleccion", $datos["fecha_recoleccion"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
        $stmt->bindParam(":id_lote", $datos["id_lote"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlEliminarRegistroLote($tabla, $valor) {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_lote = :id_lote");

        $stmt->bindParam(":id_lote", $valor, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

   
    }

    static public function mdlEliminarRegistroFinca($tabla, $valor) {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_finca = :id_finca");

        $stmt->bindParam(":id_finca", $valor, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }

   
    }

}
