<?php
    require_once('dbconfig.php');
    // de vergelijking van datums, zodat de juiste data in het csv bestand wordt gezet
    $sth = $conn->prepare('SELECT * FROM klachten WHERE Datum < DATE_SUB(NOW(), INTERVAL 7 DAY)');
    $sth->execute();
    $result2 = $sth->fetchAll();

    // Open file in append mode 
    $klachtfile = fopen('aflopendeklachten.csv', 'w'); 

    foreach ($result2 as $r2) {
        // Append input data to the file   
        fputcsv($klachtfile, $r2); 
    }
    // close the file 
    fclose($klachtfile);


    // download functie
    $file = 'aflopendeklachten.csv';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }

    header('location: index.php?page=yj3n7dCFAuHJEcS5hFL5L9Mc1mQeoLWaJJGpy4vzhPA=');
?>