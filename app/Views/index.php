<?php
include "component/top.php";

session_start();
include 'component/conn.php';


?>
<!-- Page content-->
<div class="container" style="min-height:500px;padding:10px">
    <div class="row">
        <div class="col-md-3">
            <h4>Kilas Info</h4>
            <?php
            $q = "SELECT * FROM sekilasinfo WHERE date_format(SYSDATE(),'%Y-%m')=date_format(tanggal,'%Y-%m') AND tipe='1' ORDER BY tanggal DESC";
            //echo $q;
            $res = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="row" style="margin-bottom:10px">
                    <img src="../gambar/<?php echo $row["gambar"]; ?>">
                    <div style="text-align:center">
                        <?php
                        echo $row["judul"];
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>


        <div class="offset-md-1 col-md-4">

            <?php
            $q = "SELECT * FROM sekilasinfo WHERE date_format(SYSDATE(),'%Y-%m')=date_format(tanggal,'%Y-%m') AND tipe='2' ORDER BY tanggal DESC";
            //echo $q;
            $res = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="row" style="margin-bottom:10px">
                    <img src="../gambar/<?php echo $row["gambar"]; ?>">
                    <div style="text-align:center">
                        <?php
                        echo $row["judul"];
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="offset-md-1 col-md-3">
            <label>
                <?php
                $total = 0;

                $total1 = 0;
                $qq = "SELECT SUM(jumlah) AS Jumlah FROM infaqmingguan ";
                $res = mysqli_query($conn, $qq);
                while ($row = mysqli_fetch_assoc($res)) {
                    $total1 = $row["Jumlah"];
                }

                $total2 = 0;
                $q = "SELECT SUM(jumlah) AS Jumlah FROM infaq ";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                    $total2 = $row["Jumlah"];
                }

                $total = $total1 + $total2;
                ?>
                Pemasukan Dana Minggu Ini <?php echo number_format($total); ?>
            </label>
            <?php
            $q = "SELECT * FROM sekilasinfo WHERE date_format(SYSDATE(),'%Y-%m')=date_format(tanggal,'%Y-%m') AND tipe='3' ORDER BY tanggal DESC";
            //echo $q;
            $res = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="row" style="margin-bottom:10px">
                    <img src="../gambar/<?php echo $row["gambar"]; ?>">
                    <div style="text-align:center">
                        <?php
                        echo $row["judul"];
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include "component/bottom.php";
?>