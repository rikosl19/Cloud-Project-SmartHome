<?php 
include '../koneksi.php';
    
    if (isset($_GET['status_lmp2'])){

        $status_lmp2 = $_GET['status_lmp2'];
        if ($status_lmp2 == 'ON1' || $status_lmp2 == 'OFF1') {
            $id = '2001';
            $massage = $_GET['massage'];    
        }elseif ($status_lmp2 == 'ON2' || $status_lmp2 == 'OFF2') {
            $id = '2002';
            $massage = $_GET['massage'];
        }elseif ($status_lmp2 == 'ON3' || $status_lmp2 == 'OFF3') {
            $id = '2003';
            $massage = $_GET['massage'];
        }

        $updt2 = "UPDATE `tbl_ruang2` SET `status` = '$status_lmp2', `massage` = '$massage' WHERE `tbl_ruang2`.`id_ruang2` = '$id'";
        $query_sql2 = mysqli_query($conn, $updt2);
        
            //Data berhasil ditambahkan
            if ($query_sql2 === TRUE) {
                header('Location: ../../index.php');
            } else {
                die('Gagal Menyimpan..');
            }            
        $conn-> close();
    }
?>