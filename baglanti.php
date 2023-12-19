<?php
$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "uyelik";

$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8");

if (isset($_POST["kaydet"])) {
    $name = $_POST["kullaniciadi"];
    $surname = $_POST["kullanicisoyadi"];
    $email = $_POST["email"];
    $message = $_POST["mesaj"];

    $ekle = "INSERT INTO kullanicilar (kullanici_adi, kullanici_soyadi, email, mesaj) VALUES ('$name','$surname','$email','$message')";
    $calistirekle = mysqli_query($baglanti, $ekle);

    if ($calistirekle) {
        echo '<script type="text/javascript">alert("Your message has been delivered successfully.");</script>';
        echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
    } else {
        echo '<script type="text/javascript">alert("An error occurred while transmitting your message!");</script>';
    }

    mysqli_close($baglanti);
}
?>
