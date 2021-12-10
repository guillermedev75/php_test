<?php

$host   = '127.0.0.1';
$user   = 'root';
$pw     = '';
$dbname = 'db_carros';

$connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;',$user,$pw);

$nomeCarro = 'Uno rebaixado';


$send = $connection->query("INSERT INTO carros (id, nome, preco, marca, foto) VALUES ($id, '$nomeCarro', 19.90, 2, 'foto_de_gol.jpg')");
$stmt = $connection->query("SELECT * FROM carros");
            
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

?>