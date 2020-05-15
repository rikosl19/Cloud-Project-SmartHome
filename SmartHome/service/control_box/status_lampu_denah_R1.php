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
        $commandLED = "SELECT `massage` FROM tbl_ruang1 WHERE `tbl_ruang1`.`id_ruang1` = '1001'";
        ?>
        <label>
            <?php $query_sql = mysqli_query($conn, $commandLED) or die(mysqli_error($conn));
            while ($data = mysqli_fetch_assoc($query_sql)) {
                $data['massage'];
                if ($data['massage'] == 'Menyala1') {
                    echo '<img src="../img/lamp.png" width="30px">';
                } else {
                    echo '<img src="../img/lightbulb.png" width="30px">';
                }
            }
            ?>
        </label>
    </body>

    </html>