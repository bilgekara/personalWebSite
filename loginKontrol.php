<?php 
    if(isset($_POST['kullaniciadi'])) {

        $username = $_POST['kullaniciadi'];
            if($username=="b171210011@ogr.sakarya.edu.tr" || $username=="B171210011@ogr.sakarya.edu.tr") echo "Hoşgeldin B171210011". ' <br/>';
            else header("Location: login.html");
    }

    echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";

?>