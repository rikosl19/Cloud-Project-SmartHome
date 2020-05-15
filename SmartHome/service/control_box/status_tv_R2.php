    <!DOCTYPE html>
    <html lang="en">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Status1</title>
    </head>

    <body>
        <?php
        include '../koneksi.php';
        $commandLED = "SELECT `massage` FROM tbl_ruang2 WHERE `tbl_ruang2`.`id_ruang2` = '2003'";
        ?>
        <th class="success text-center" scope="col">
            <?php $query_sql = mysqli_query($conn, $commandLED) or die(mysqli_error($conn));
            while ($data = mysqli_fetch_assoc($query_sql)) {
                $data['massage'];
                if ($data['massage'] == 'Menyala3') {
                    echo '<img src="../img/television.png" width="64px">';
                } else {
                    echo '<img src="../img/televisionoff.png" width="64px">';
                }
            }
            ?>
        </th>

    </body>

    </html>