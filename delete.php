<?php
    require_once("database.php");
        $id = $_GET['kode'];
        $sql = Delete("barang",$id);
        if ($sql) {
            header("location:data_barang.php");
        }
?>