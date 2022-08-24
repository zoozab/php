<?php
if (isset($_GET['del'])) {
    @unlink($_GET['del']);
}
if (isset($_GET['download'])) {
    $pieces = explode("/", $_GET['download']);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$pieces[2]);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($_GET['download']));
    ob_clean();
    flush();
    readfile($_GET['download']);
}
if (isset($_GET['dir'])) {
    $directory = $_GET['dir'];
} else {
    $directory = "./";
}
$dir = @opendir($directory);
echo '<a href="?">returntomain</a> <br />';
while ($file = readdir($dir))
{
    if (is_dir($file))
    {
        $directory = $file;
        if (isset($_GET['dir'])) {
            $directory = $_GET['dir'] . '/' . $file . '/';
        }
        echo 'dir:  <a href="?dir='.$directory.'">'.$file.'</a> <br />';
    } else {
        $filedel = $file;
        $filesize = @filesize($file);
        $filename = $file;
        $filedownload = $file;
        if (isset($_GET['dir'])) {
            $filedel = $_GET['dir'] . '/' . $file;
            $filesize = @filesize($_GET['dir'] . '/' . $file);
            $filename = $_GET['dir'] . '/' . $file;
            $filedownload = $_GET['dir'] . '/' . $file;
        }
        echo 'file: <a href="'.$filename.'">'.$file.'</a> '.$filesize.'bytes <a href="?del='.$filedel.'">[delete]</a> '.'<a href="?download='.$filedownload.'">[download]</a> <br />';  
    }

}

closedir($dir);
?>