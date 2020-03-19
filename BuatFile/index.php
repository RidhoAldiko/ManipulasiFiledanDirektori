<?php
//menentukan direktori file akan dibuat
$path = "direktory/subdirektory";
//nama file yang akan dibuat 
$file_name = "index.php";
//konten yang akan ditulis kedalam file
$file_content = "Hello, Alfazzasoftware";
//buat file dan tulis konten kedalam file yang telah dibuat
$create_file = fopen($path . '/' . $file_name,"w");
fwrite($create_file,$file_content);
?>







