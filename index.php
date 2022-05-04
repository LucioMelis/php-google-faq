<?php
include('array.php');
// echo('<pre>');
// var_dump($arrayFaq);
// echo('</pre>');
foreach ($arrayFaq as $key => $item) {
    echo('<h2>' . $item['domanda'] . '</h2>');
   $itemRisposta = explode('|||', $item['risposta']);
    // echo('<pre>');
    // var_dump($itemRisposta);
    // echo('</pre>');
    foreach($itemRisposta as $paragrafo){
        echo('<p>' . $paragrafo . '</p>');
    }
}
    

?>