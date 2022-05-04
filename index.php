<?php
include('array.php');
// echo('<pre>');
// var_dump($arrayFaq);
// echo('</pre>');
foreach ($arrayFaq as $key => $item) {
    echo('<h2>' . $item['domanda'] . '</h2>');
    foreach ($item['risposta'] as $risposta){
        echo('<p>' . explode('/', $risposta) . '</p>');
    }
}
    

?>