<?php

    class database {

        public $connection;

        public $tableCarros = 'carros';
        public $tableMarcas = 'marcas';

        public function connect() {

            $host   = 'localhost';
            $user   = 'root';
            $pw     = '';
            $dbname = 'db_carros';

            try {

                $connection = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pw);
                return $connection;

            }catch (PDOException $e) {

                return false;

            }

        }
        
    }

    $teste = $connection->query("SELECT");

    var_dump($teste);

?>