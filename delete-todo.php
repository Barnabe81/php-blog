<?php

$filename = __DIR__.'/data/todos.json';
// instructions 
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id = $_GET['id'] ?? '';

    if($id) {        
        $todos = json_decode($data, true) ?? []; 
        $todoIndex = array_search($id, array_column($todos, 'id'));       
                
    array_splice($todos, $todoIndex, 1);
    file_put_contents($filename, json_encode($todos));
    }
    header('location: /');