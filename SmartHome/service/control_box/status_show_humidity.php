<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
			<?php
				include ('../koneksi.php');
				$table = mysqli_query($conn, "SELECT `kelembapan` FROM tbl_graph"); //nodemcu_ldr_table = Youre_table_name
                $avg_humid = 0;
                while($row = mysqli_fetch_array($table))
				{
			?>
				<?php $avg_humid += $row["kelembapan"]; ?>
                
            <?php
				}
			?>
                <?php 
                    $total_avg_humid = ($avg_humid/7); 
                    $formatedNum = number_format($total_avg_humid);
                    echo $formatedNum;
                ?>
	</body>
</html>