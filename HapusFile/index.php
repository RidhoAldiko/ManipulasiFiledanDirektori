<?php
// menentukan direktori file 
$path = "direktori";
//jalankan fungsi hapus semua file
deleteAllFiles($path);
//fungsi hapus semua file
function deleteAllFiles($path)
{
    // looping file yang ada di direktori satu persatu
    foreach(glob($path . '/*') as $file){
        //memastikan jika isi nya adalah file dan bukan direktori
        if(is_file($file)){
            //jika itu file maka akan dihapus
            unlink($file);
        }
    }
}
?>




