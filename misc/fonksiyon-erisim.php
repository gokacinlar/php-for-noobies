<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Temel PHP Eğitimi</title>
</head>

<body>
    <?php
    /*
    fonksiyon: bir programda belirli bir işi gerçekleştirmek üzere hazırlanan küçük program parçalarına denir.
    1. tek düze program yazmakta karşılaşılan karmaşıklığı ortadan kaldırır.
    2. tekrarları önleyerek programı kısaltır.
    3.  değişiklikleri kısa sürede gerçekleştirme imkanı sağlar
    4. hata durumunda tüm programın değiştirilmesine gerek duyulmaz
    5. programın daha analaşılabilir ve okunabilir olmasını sağlar

    fonksiyonalrın yapıs:
    function fonksiyon_adi() {
    #fonksiyonun geçekleştireceği işlemler yapılır	
    }

    #fonksiyonu çağırmak/çalıştırmak.
    funksiyon_adi();


    */

    function global_erisim()
    {
        global $a;
        echo "Global =" . $a . "<br>";
        $a = 5;

    }

    $a = 3;
    global_erisim();
    echo "Yerel =" . $a;


    ?>

</body>

</html>