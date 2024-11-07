<?php

if (isset($_GET['number'])) {

    $num = intval($_GET['number']);

    
    $fibonacci = [];

  
    if ($num > 0) {
        $fibonacci[] = 0;
    }
    if ($num > 1) {
        $fibonacci[] = 1; 
    }
    for ($i = 2; $i < $num; $i++) {
       
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    
    $response = [
        "data" => $fibonacci
    ];

   
    header('Content-Type: application/json');
    

    echo json_encode($response);
} else {
 
    echo json_encode(["error" => "Please provide a 'number' parameter in the GET request."]);
}
?>
