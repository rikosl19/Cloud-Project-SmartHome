<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
			<?php
				include ('../koneksi.php');
				$table = mysqli_query($conn, "SELECT `suhu` FROM tbl_graph"); //nodemcu_ldr_table = Youre_table_name
                $avg_suhu = 0;
                while($row = mysqli_fetch_array($table))
				{
			?>
				<?php $avg_suhu += $row["suhu"]; ?>
                
            <?php
				}
			?>
                <?php 
                    $total_avg_suhu = ($avg_suhu/7); 
                    $formatedNum = number_format($total_avg_suhu, 2);
                    echo $formatedNum;
                ?>
	</body>
</html>