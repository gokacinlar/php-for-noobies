<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Temel PHP Eğitmi</title>
</head>

<body>
    <?php
    /*
    Dizi: farklı türde verileri barındırır.

    $bilgi= array('12', 'cihan');
    */


    $bilgi = array('Cihan', 'Erzurum', '24.06.1987'); // 0'dan başlayarak erişim olur = 0, 1, 2 = total 3
    
    echo $bilgi[2];
    echo "\n";

    $ekstraBilgi = array('ad' => 'Cihan', 'Soyad' => 'ORAK', 'sehir' => 'Erzurum', 'sogum tarihi' => '24.06.1987', 'Cinsiyet' => 'Erkek');

    echo $ekstraBilgi['Soyad'];
    echo "\n";

    $benimBilgi = array('Ad' => 'Derviş', 'Soyad' => 'Öksüzoğlu', 'Sehir' => 'Mugla', 'Dogum Tarihi' => '09.09.2001', 'Cinsiyet' => 'Erkek');
    echo $benimBilgi['Dogum Tarihi'];
    echo "\n";

    $renkler = array();
    $renkler[] = "Mavi";
    $renkler[] = "Sarı";
    $renkler[] = "Yeşil";

    echo $renkler[0];

    $bilgi = array();
    $bilgi['ad'] = "Cihan";
    $bilgi['sehir'] = "Erzurum";
    $bilgi['Cinsiyet'] = "Erkek";

    echo $bilgi['ad'];

    ?>

</body>

</html>