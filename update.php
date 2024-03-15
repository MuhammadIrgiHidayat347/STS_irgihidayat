<?php
    require_once("database.php");
    $id=$_POST['id'];
    $kodeBrg=$_POST['kodeBrg'];
    $namaBrg=$_POST['namaBrg'];
    $kategori=$_POST['kategori'];
    $merk=$_POST['merk'];
    $jumlah=$_POST['jumlah'];

    $sql2=update("barang",$id, $kodeBrg, $namaBrg, $kategori, $merk, $jumlah);
    if ($sql2) {
        header("location:data_barang.php");
    }
    
?>