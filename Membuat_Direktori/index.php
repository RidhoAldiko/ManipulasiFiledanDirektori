<?php
//menentukan nama direktori
$dirName = 'sample';
//menentukan dimana direktori akan dibuat 
$path = 'direktori/'.$dirName.'/';
/*membuat direktori berdasarkan lokasi dan nama file
yang telah ditentukan */
//mkdir('lokasi yang diinginkan', hak akses, direktori bersarang)
mkdir($path,0777,true);
?>