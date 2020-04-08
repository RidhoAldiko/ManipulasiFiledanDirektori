<?php
$oldDir = 'MyFolder'; //nama direktori lama
$newDir = 'MyNewFolder'; //nama direktori baru
rename($oldDir,$newDir); //merubah nama direktori
/* jika tedapat error seperti ini : 
Warning: rename(/myoldfolder,/mynewfolder) 
[function.rename]: Permission denied in /Applications/LAMP/htdocs/config_dev/configure.php
gunakan realpath contoh :
*/
rename(realpath(dirname(__FILE__)).'/'.$oldDir,realpath(dirname(__FILE__)).'/'.$newDir);
?>


