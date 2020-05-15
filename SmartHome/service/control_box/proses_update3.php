<?php 
include '../koneksi.php';

    if (isset($_GET['status_lmp4'])){

        $status_grg = $_GET['status_lmp4'];

        if ($status_grg == 'OPEN' || $status_grg == 'CLOSE') {
            $id = '3003';
            $massage = $_GET['massage'];    
        }

        $updt3 = "UPDATE `tbl_gudang` SET `status` = '$status_grg', `massage` = '$massage' WHERE `tbl_gudang`.`id_gudang` = '$id'";
        $query_sql3 = mysqli_query($conn, $updt3);
        
            //Data berhasil ditambahkan
            if ($query_sql3 === TRUE) {
                //header('Location: ../../index.php');
            } else {
                die('Gagal Menyimpan..');
            }            
        $conn-> close();
    }
?>