<?php
$nol ="0";
$satu = "1";
$dua ="2";
$tiga = "3";
$empat = "4";

// $nama1 = "Sandhika";

// print "biasa nya aku belajar pemograman di channel Web Programing Unpas"  ;
// print "<br>";
// print $nama . " " . $nama1;

// print "Input data berikut";

        //     if (isset($_POST['pencet'])) {

        //         $data =$_POST["data"];

        //         if ($data == $nama) {
        //             // header('location: index.php');
        //             // print "<script> alert('benar sayang') </script>";
        //             print $hasil;
        //         }
        //     else {
        //             if
        //     }
        // }
?>

<?php 
require 'body.php';
?><br>

</center>


<div class="container">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <b>
            <a class="navbar-brand" > <center style="color: red;" > MINI PROGRAM - MEMANTAU PASIEN COVID-19</center></a>
        </b>
    </nav>  <br>
</div>
        <!-- <center>
            <h2>
                <b>
                    <u>
                    MINI PROGRAM - MEMANTAU PASIEN COVID-19
                    </u>
                </b>
            </h2>
        </center> -->
        <!-- <h4>  1. DATA COVID-19 <br>
        2. NAMA PASIEN UNTUK CEK STATUS PENANGANAN <br>
        3. DAFTAR RUMAH SAKIT YANG MENAMPUNG PASIEN COVID-19 <br>
        4. WILAYAH KOTA/KABUPATEN DI KALIMANTAN SELATAN YANG TER INFEKSI COVID-19 <br><br>
        SILAHKAN PILIH MENU YANG DISEDIAKAN, KETIK ANGKA NYA SAJA --> 
<center>
<form action="" method="POST">
    <!-- <input type="number" placeholder="Input data disini" name="data" ><br><br> -->
        <select name="data" class="form">
            <option selected value="0" >MENU</option>
            <option value="1" >Data Covid-19</option>
            <option value="2" >Daftar Nama Pasien Covid-19</option>
            <option value="3" >Daftar Rumah Sakit Yang Menampung Pasien Covid-19</option>
            <option value="4" >Daftar Wilayah Yang Terinfeksi Prov Kal-Sel</option>
        </select><br><br>
    <input type="submit" name="pencet" value="🔍Cari">
        
</form>

<h6>Data Yang di Temukan :</h6>
        <table border="1" cellpadding="100%" >
    
        <tr>
            <td>
                <?php 
############################################################
        if (isset($_POST['pencet'])) {

            $data =$_POST["data"];

            if ($data == $empat) {
                // header('location: index.php');
                // print "<script> alert('benar sayang') </script>";
                // include 'daerah.php';
                require 'daerah.php';
            }
    }
############################################################
if (isset($_POST['pencet'])) {

    $data =$_POST["data"];

    if ($data == $satu) {
        // include 'data_covid.php';
        require 'data_covid.php';
    }
}
############################################################
if (isset($_POST['pencet'])) {

    $data =$_POST["data"];

    if ($data == $tiga) {
        // include 'rumah_sakit.php';
        require 'rumah_sakit.php';
    }
}
############################################################
if (isset($_POST['pencet'])) {

    $data =$_POST["data"];

    if ($data == $dua) {
        // include 'pasien.php';
        require 'pasien.php';
    }
}
############################################################
if (isset($_POST['pencet'])) {

    $data =$_POST["data"];

    if ($data == $nol) {
        // include 'pasien.php';
        print "<script>alert('Invalid ! Periksa Kembali')</script>";
    }
}
############################################################
        ?>
        </td>
        </tr>
            </table>
            </center>