<?php
    ini_set('max_execution_time', 1500);
    include 'addToDb.php';
    include 'crawl.php';
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end(($fileExt)));
        
        $allowed = array('csv');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                
                // $fileNameNew = uniqid('', true)."-".date(d-m-Y).".".$fileActualExt;
                // $fileDestinaion = "uploads/".$fileNameNew;
                // move_uploaded_file($fileTmpName, $fileDestinaion);
                // header("Location: index.php?uploadsuccsess");
            }  else {
                "Wystąpił błąd przy dodawaniu pliku";
            }
        } else {
            echo "Możesz dodawać tylko pliki o rozzerzeniu csv";
        }
parseLinks($file["tmp_name"]);
    }


?>