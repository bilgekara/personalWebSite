<?php 
 

        echo "<b>"."İsim Soyisim:"."</b>".$_POST['adi'] . ' ' . $_POST['soyadi']."<br/>"; 
       

    if(isset($_POST['cinsiyet'])&& ($_POST['cinsiyet']!='')) {
        echo "<b>"."Cinsiyet:"."</b>".$_POST['cinsiyet']."<br>";  
    } else {
        echo"<i>-Cinsiyet seçimi yapmadınız-</i><br>"; 
    }
    if(isset($_POST['email'])&& ($_POST['email']!='')) {
        echo "<b>"."Mail Adresiniz:"."</b>".$_POST['email']."<br>";  
    } else {
        echo '<i> -Mail adresinizi girmediniz- </i><br>';
    }
    if(isset($_POST['dosya'])&& ($_POST['dosya']!='')) {
        echo "<b>"."Seçtiğiniz Dosya:"."</b>".$_POST['dosya']."<br>";
    } else {
        echo '<i>-Dosya seçimi yapmadınız-</i><br>';
    }
    if(isset($_POST['plaka'])&& ($_POST['plaka']!='')) {
        echo "<b>"."Plaka:"."</b>".$_POST['plaka']."<br>"; 
    } else {
        echo '<i>-Yaşadığınız ilin plakasını girmediniz-</i><br>';
    }
    
    if(isset($_POST['muzikler'])&& ($_POST['muzikler']!='')) {
        $muzikler = $_POST['muzikler'];
        echo "<b>"."-----------------------------------"."</b>"."<br/>";
        echo "<b>".'Seçtiğiniz muzik turleri: '."</b>"."<br/>";
     
        foreach($muzikler as $muzik) {
            echo ' * ' . $muzik . ' <br/>';
            if($muzik=="karadeniz") echo "Cimilli İbo->Oyna:)". ' <br/>'; if($muzik=="yeniler") echo "İkiye On Kala->Bütün İstanbul Biliyor". ' <br/>'."Emir Can İğrek->Nevale".' <br/>';
            if($muzik=="rock") echo "Şebnem Ferah->Vicdan". ' <br/>';
            if($muzik=="protest") echo "Tabiki akla ilk gelen;Ahmet Kaya". ' <br/>'; if($muzik=="pop") echo "Sezen Aksu->Şanıma İnanma". ' <br/>';
        }
        echo "<b>"."-----------------------------------"."</b>"."<br/>";
        $gelen_veri = $_POST['araba'];
        if($gelen_veri == "vw") echo"Araba seçiminize göre "."<b> <i>"."'sportif, heyecanlı, çapkın'"." </i> </b> "." birisiniz."."<br>";
        if($gelen_veri == "ford")echo"Araba seçiminize göre "."<b> <i>"."'ekonomist, fanatik, kanaatkar'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "peugout")echo"Araba seçiminize göre "."<b> <i>"." 'havalı, genç, gamsız'"."</i> </b>"."birisiniz."."<br>";
        if($gelen_veri == "Renault")echo"Araba seçiminize göre "."<b> <i>"."'gezgin, aile babası, mangalcı' "."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "honda")echo"Araba seçiminize göre "."<b> <i>"."'zeki, meraklı, çalışkan'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "bmw")echo"Araba seçiminize göre "."<b> <i>"."'Serseriyim yanlamayı severim'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "mercedes")echo"Araba seçiminize göre "."<b> <i>"."'patron, gurme, sadık2"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "citroen")echo"Araba seçiminize göre "."<b> <i>"."'çömez, aç gözlü, asi'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "alfa")echo"Araba seçiminize göre "."<b> <i>"."'stil, sıradışı, romantik '"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "toyota")echo"Araba seçiminize göre "."<b> <i>"." 'akıllı, tecrübeli, zevksiz'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "volvo")echo"Araba seçiminize göre "."<b> <i>"."'sağlamcı, duyarlı, dingin'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "skoda")echo"Araba seçiminize göre "."<b> <i>"."'masum, mütevazi, ağırbaşlı'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "audi")echo"Araba seçiminize göre "."<b> <i>"."'farklı, hovarda, özgür'"."</i> </b>"." birisiniz."."<br>";
        if($gelen_veri == "hummer")echo"Araba seçiminize göre "."<b> <i>"."'kendini güvende hissetmek isteyen özgüvensiz'"."</i> </b>"." birisiniz."."<br>";
    } else {
        echo 'Hiç muzik seçmediniz.'."<br/>";
    }
    echo "<b>"."Mesaj:"."</b>".$_POST['message'] ."<br/>"; 






    
echo "<p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>