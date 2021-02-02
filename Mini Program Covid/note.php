<?php
// 1. VARIABEL
// khusus
$tes="PAK";
$tes .=" ";
$tes .="bisa kah";
$uang = "ADA LIMA";
// perkalian\
    $x="22";
    $a="891";
// 2.syntaks php
        //var_dump(memakai kurung)
        //print_r (memakai kurung)
        //echo, print
            // echo "Irfan Suprianto ";
            // echo 2102;  (kalau memakai angka tidak perlu string)
            // print $variabel (tidak perlu string)
            // print"Irfan Suprianto";
            // var_dump("aku dimana");
// 3. Penulisan sintak php
        //PHP DALAM HTML
        //HTML DALAM PHP
// 4. Operator
        //aritmatika   
            // + - / * %
                // print 2 + 3; print $x * $a; 
// 5. Penggabung string (memakai titik)
        // print $uang ." ".  $tes;
// 6. Assignment
        // print $tes;
// 7. Perbandingan
        // <, >, <=, >=, ==, !=
            // var_dump(1 == "5")
        // identitas
            // ===, !==
                // var_dump(1 === "4")
// 8. Logika
        // && (Harus kondisi yg sama) , || , !
            // var_dump($x < 50 && $x % 2 == 0)
?>
<html>
    <head>
    </head>
        <body>
            <h1>ada berapa barang? <u><?php print_r ("$uang");  ?></u> </h1>
            
        </body>
</html>