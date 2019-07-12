
      
      <?php
         /* Defining a PHP Function */
         function pengurangan() {
            echo "hasil 15 dikurang 3 adalah="."<br>";
         }
         
         /* Calling a PHP Function */
         pengurangan();

         //echo "ini ", "teks","yang", "dibuat", "terpisah.";

         $txt1 ="belajar PHP";
         $txt2 ="petanikode.com";
         $x = 15;
         $y = 3;
         //echo "<h1>". $txt1."</h1>";
         //echo "aku belajar pemogroman di" . $txt2 . "<br>";
         echo $x - $y;
      ?>

      <?php
      // membuat fungsi
      function perkenalan ($nama, $salam) {
         echo $salam.",";
         echo " perkenalkan, nama saya ".$nama. "<br/> ";
         echo " senang berkenalan dengan anda<br/> ";
      }
      
      // memanggil fungsi yang sudah dibuat
      perkenalan("misbahul", "Hi");

      echo "<hr>";

      $saya = " maisbahul anam ";
      $ucapansalam = " selamat pagi ";
      // memanggilnya lagi
      perkenalan ($saya, $ucapansalam);
      ?>

    <?php
    //membuat fungsi
    function hitungumur($thn_lahir, $thn_sekarang) {
      $umur = $thn_sekarang - $thn_lahir;
      return $umur;
    }

    function kenalan ($nama, $salam = " selamat datang ") {
      echo $salam.",";
      echo " perkenalkan nama saya " . $nama. "<br/>";
      //memanggil fungsi lain
      echo " saya berusia ". hitungumur (1999, 2019). " tahun <br/>";
      echo " senang bertemu dengan anda <br/> ";
    }

    // memanggol fungsi perkealan
    kenalan ("misbahul anam");
    ?>

    <?php

    function faktorial ($angka) {
      if ($angka < 2) {
         return 1;
      } else {

      // memanggil dirinya sendiri
      return ($angka * faktorial ($angka-1));
   }
}

// memanggil fungsi
echo "faktorial 5 adalah " . faktorial (5);

?>