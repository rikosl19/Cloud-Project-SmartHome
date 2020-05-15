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
        $commandLED = "SELECT `massage` FROM tbl_gudang WHERE `tbl_gudang`.`id_gudang` = '3003'";
        ?>
        <th class="success text-center" scope="col">
            <?php $query_sql = mysqli_query($conn, $commandLED) or die(mysqli_error($conn));
            while ($data = mysqli_fetch_assoc($query_sql)) {
                $data['massage'];
                if ($data['massage'] == 'Terbuka') {
                    echo '<img src="../img/garageon.png" width="64px">';
                } else {
                    echo '<img src="../img/garageoff.png" width="64px">';
                }
            }
            ?>
        </th>

    </body>

    </html>