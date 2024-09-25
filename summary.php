<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie zamówienia</title>
</head>
<body>
    <h1>Podsumowanie zamówienia</h1>

    <?php
    // Pobiera danych z formularza
    $rogale = isset($_POST['rogale']) ? (int)$_POST['rogale'] : 0;
    $bulki = isset($_POST['bulki']) ? (int)$_POST['bulki'] : 0;
    $soki = isset($_POST['soki']) ? (float)$_POST['soki'] : 0.0;

    // Obliczanie kosztów
    $koszt_rogale = 0.99 * $rogale;
    $koszt_bulki = 1.29 * $bulki;
    $koszt_soki = 4.9 * $soki;
    $calosc = $koszt_rogale + $koszt_bulki + $koszt_soki;

    //Zliczanie ilości

    $laczna_ilosc = $rogale + $bulki + $soki;

    // Wyświetlanie podsumowania
    echo "<p>Ilość rogali: $rogale (koszt: " . number_format($koszt_rogale, 2) . " PLN)</p>";
    echo "<p>Ilość bułek: $bulki (koszt: " . number_format($koszt_bulki, 2) . " PLN)</p>";
    echo "<p>Ilość soków: $soki L (koszt: " . number_format($koszt_soki, 2) . " PLN)</p>";
    echo "<h2>Łączny koszt: " . number_format($calosc, 2) . " PLN</h2>";
    echo "<h2>Łączna ilość: " . number_format($laczna_ilosc, 2) . "</h2>"; 
    ?>

    <a href="order.php">Wróć do zamówienia</a>
</body>
</html>
