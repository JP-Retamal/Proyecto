<?php 

    class Conexion
    {
        private $db = 'oci:dbname=XE';
        private $user ='system';
        private $pass = 'JPreta666';

        public function Conectar()
        {
            try {
                $base = new PDO($this->db, $this->user, $this->pass);
                $base->exec("SET CARACTER SET utf8");

                    if($base)
                    {
                        echo "Conexion Exitosa PHP y Oracle";
                        return $base;
                    }
                    else{
                        echo "no conecta";
                        return $base;
                    }
            } catch (Exception $e){
                echo "Error de Conexion: ".$e->getMessage();
            }
        }
    }
?>