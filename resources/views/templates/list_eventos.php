<?php
/*
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */

session_start();

include 'conexao.php';

$query_events = "SELECT id, titulo, color, data, end FROM evento";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id'];
    $titulo = $row_events['titulo'];
    $data = $row_events['data'];
    $color = $row_events['color'];
    $end = $row_events['end'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $titulo, 
        'color' => $color, 
        'start' => $data, 
        'end' => $end
        ];

        
}

$evento[] = [
    'id' => '5', 
    'title' => 'avaliacao bimestral', 
    'color' => '#FFD700', 
    'start' => '2019-11-21T15:00:00', 
    'end' => '2019-11-28T15:00:00'
    ];

echo json_encode($evento);