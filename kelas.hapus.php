<?php
require ( __DIR__ . '/init.php');
mysql_query("DELETE from kelas WHERE id_kelas='$_GET[id]'");
header('location: ./kelas');
?>