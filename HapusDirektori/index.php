<?php
// menentukan direktori file 
$path = "direktori/subdirektori";
//jalankan fungsi hapus semua file
deleteDir($path);
//fungsi hapus semua file
function deleteDir ($path)
{
    foreach (glob($path) as $dir) {
        if (is_dir($dir)) {
            deleteDir("{$dir}/*");
            rmdir($dir);
        } else {
            unlink($dir);
        }
    }
}
?>




