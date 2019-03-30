<?php 

        if (isset($_POST['kirim'])){
            include('koneksi.php');
            $nama = $_POST['nama'];
            $notlp = $_POST['notlp'];
            $tgl = $_POST['tgl'];
            $tujuan = $_POST['tujuan'];
            $lama = $_POST['lama'];
            $total = $_POST['total'];

          
$input =  mysqli_query($conn,"INSERT INTO tb_pesan (nama,notlp,tgl,tujuan,lama,total)VALUES ('$nama','$notlp','$tgl','$tujuan','$lama','$total')");
            if ($input){
                
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=upload.php">';
            }else {
                echo 'gagal';
            }
        }

 ?>