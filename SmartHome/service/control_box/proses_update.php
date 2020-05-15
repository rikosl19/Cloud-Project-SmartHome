<?php 
include '../koneksi.php';
    if (isset($_GET['status_lmp'])){

        $status_lmp = $_GET['status_lmp'];
        if ($status_lmp == 'ON1' || $status_lmp == 'OFF1') {
            $id = '1001';
            $massage = $_GET['massage'];    
        }elseif ($status_lmp == 'ON2' || $status_lmp == 'OFF2') {
            $id = '1002';
            $massage = $_GET['massage'];
        }elseif ($status_lmp == 'ON3' || $status_lmp == 'OFF3') {
            $id = '1003';
            $massage = $_GET['massage'];
        }

        $updt = "UPDATE `tbl_ruang1` SET `status` = '$status_lmp', `massage` = '$massage' WHERE `tbl_ruang1`.`id_ruang1` = '$id'";
        $query_sql = mysqli_query($conn, $updt);
        
            //Data berhasil ditambahkan
            if ($query_sql === TRUE) {
                header('Location: ../../index.php');
            } else {
                die('Gagal Menyimpan..');
            }            
        $conn-> close();
    }

?>