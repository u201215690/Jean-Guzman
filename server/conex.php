<?php
class Conex {

    private $db;

    /* Constructor que conecta al motor Mysql */
    public function __construct() {
        $host = '127.0.0.1';
        $dbname = 'bd_agenda';
        $userdb = 'root';
        $passdb = '123456';
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $userdb, $passdb);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->query("SET NAMES 'utf8'");
            $this->db->query("SET lc_time_names = 'es_ES'");
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
        }
    }

    /* Función que retorna filas afectadas (para un mantenimiento) */
    public function getExec($sql) {
        try {
            return $this->db->exec($sql);
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }

    /* Función que retorna filas (para un listado consulta) */
    public function getQuery($sql) {
        try {
            return $this->db->query($sql);
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }
    
        /* Función que retorna filas (para un listado consulta) */
    public function getFechAssoc($sql) {
        try {
            $records = array();
            $query = $this->db->query($sql);
            //$row = $query->fetch(PDO::FETCH_ASSOC);
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $records[] = $row;
            }
            return $records;
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }

    /* Función que retorna una fila (para un listado consulta) */
    public function getCellValue($sql, $col) {
        try {
            $query = $this->db->query($sql);
            $row = $query->fetch(PDO::FETCH_ASSOC);
            return $row[$col];
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }

    /* Función que retorna la cantidad de filas */
    public function getRows($sql) {
        try {
            $query = $this->db->query($sql);
            return $query->rowCount();
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }

    /* Función que retorna la autogeneracion de un determinado Query */
    public function getIdAuto($sql, $id) {
        try {
            $cod = '';
            foreach ($this->db->query($sql . " ORDER BY $id DESC LIMIT 0, 1") as $row):
                $cod = $row[$id];
            endforeach;
            if ($cod != '' && $cod != null):
                $cod++;
            else:
                $cod = 1;
            endif;
            return $cod;
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', date('d/m/Y H:i:s') . ': ' . $e->getMessage() . chr(13) . chr(10), FILE_APPEND);
            echo $e->getMessage();
        }
    }

}

?>