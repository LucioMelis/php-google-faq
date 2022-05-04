<?php
include('array.php');
// echo('<pre>');
// var_dump($arrayFaq);
// echo('</pre>');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link Css  -->
     <link rel="stylesheet" href="style.css">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Google Faq</title>
</head>
<body>
    <header>
        <div class="border-bottom border-3 d-flex align-items-center py-4 zindex-2 fixed-top bg-light">
            <img class="lm-width ms-3 me-1" src="https://www.google.ch/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png" alt="logo-google">
            <span class="text-secondary">Privacy e termini</span> 
        </div>
    
    </header>
    <main class="pt-5">
        <div class="container-sm">
            <div class="row mx-5 pt-5 mt-5">
                <div class="col-12">
                    <?php
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
                </div>
            </div>
        </div>
    </main>
</body>
</html>
