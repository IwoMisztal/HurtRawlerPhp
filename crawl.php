<a href="http://iwomisztalportfolio.com/admin/HurtRawlerPhp";>Cofnij</a>
<?php
function parseLinks($Csv) {
    $csvFile = file($Csv);

    function CSVtoJSON($csv) {
    implode($csv);
    $lines = [];
    foreach ($csv as $line) {
        array_push($lines, str_getcsv($line));
    }

        return $lines;
    }

    CSVtoJSON($csvFile);
    $availible = [];
    $unAvailible = [];    

    $links = CSVtoJSON($csvFile);
    for ($i = 0; $i < count($links); $i++) {
    $currentLine = implode($links[$i]);
    $string = file_get_contents($currentLine);  
        if (strpos($string, 'title="Produkt dostępny') !== false) {
            array_push($availible, $currentLine);
            
        } else if (strpos($string, "batterylow") !== false) {
            array_push($unAvailible, $currentLine);

        }
        }

 echo '<div class="col-xs-12 mx-auto">';

    for ($i = 0; $i < count($unAvailible); $i++) {
        
        echo '<span class="text-warning bg-light mx-auto"><a class="text-danger" href="' . $unAvailible[$i] . '"/>NIEDOSTĘPNY' .  $unAvailible[$i] . '</a></span><br>';
    } 
        for ($i = 0; $i < count($availible); $i++) {
        echo '<span class="text-primary bg-light mx-auto"><a class="text-success" href="' .  $availible[$i] . '"/>Dostępny ' . $availible[$i] . ' </a></span><br>';
        }
    }
?>