<?php
$link = new mysqli('localhost','root','','polska');
$sql="SELECT id,svg,nazwa,opis,przyklady FROM atrakcje;";
$result = $link -> query($sql);
$atrakcje = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odkryj Polske - Atrakcje</title>
    <link rel="stylesheet" href="style/atrakcje.css">
    <link rel="icon" type="image/png" href="zdjecia/page-logo.png" class="icon">
</head>
<body>
    <header>
        <section class="left"><a href="glowna.php">Odkryj Polske</a></section>
        <section class="right">
            <section class="glowna"><a href="glowna.php">Strona Główna</a></section>
            <section class="galeria"><a href="galeria.php">Galeria</a></section>
            <section class="opolsce"><a href="opolsce.php">O Polsce</a></section>
            <section class="atrakcje"><a href="atrakcje.php">Atrakcje</a></section>
            <section class="kontakt"><a href="kontakt.php">Kontakt</a></section>
        </section>
    </header>
<main>
    <section class="top">
        <p class="czarne">Rodzaje Atrakcji</p>
        <p>Polska oferuje niezwykłą różnorodność atrakcji turystycznych. Odkryj, co możesz zobaczyć i<br> doświadczyć w naszym kraju.</p>
    </section>
    <section class="mid">
        <?php
        foreach($atrakcje as $atrakcja){
            echo"
    <section class='svg'>
        <img src='svg/{$atrakcja['svg']}' alt='svg/{$atrakcja['svg']}'>
        <p>{$atrakcja['nazwa']}</p>
        <p>{$atrakcja['opis']}</p>
        <p>{$atrakcja['przyklady']}</p>
    </section>";
        }

        ?>
    </section>
    <section class="bottom">
  <p class="title">Planowanie Podróży</p>

  <div class="rows">
    <div class="row header">
      <p><b>Najlepsze Pory Roku</b></p>
      <p><b>Praktyczne Informacje</b></p>
    </div>

    <div class="row">
      <p><b>Wiosna (marzec–maj):</b> Kwitnące ogrody, łagodna pogoda</p>
      <p>Rozbudowana sieć kolejowa i autobusowa</p>
    </div>

    <div class="row">
      <p><b>Lato (czerwiec–sierpień):</b> Plaże, festiwale, górskie szlaki</p>
      <p>Wiele obiektów UNESCO na liście dziedzictwa</p>
    </div>

    <div class="row">
      <p><b>Jesień (wrzesień–listopad):</b> Złota polska jesień w parkach</p>
      <p>Przyjazne ceny w porównaniu z Europą Zachodnią</p>
    </div>

    <div class="row">
      <p><b>Zima (grudzień–luty):</b> Narty, jarmarki świąteczne</p>
      <p>Bogata kuchnia regionalna do odkrycia</p>
    </div>
  </div>
</section>


</main>
    <footer>
        <section class="pierwsza">
            <section class="discover">
                <p class="naglowek">Odkryj Polskę</p>
                <p>Podróżuj, zachwycaj się i poznawaj piękno naszego kraju.</p>
            </section>
            <section class="links">
                <p class="naglowek">Quick Links</p>
                <p><a href="glowna.php">Strona Główna</a></p>
                <p><a href="galeria.php">Galeria</a></p>
                <p><a href="opolsce.php">O Polsce</a></p>
                <p><a href="atrakcje.php">Atrakcje</a></p>
                <p><a href="kontakt.php">Kontakt</a></p>
            </section>
            <section class="team">
                <p class="naglowek">Team Members</p>
                <p>Jakub Wachowski</p>
                <p>Alan Bomba</p>
            </section>
        </section>

        <section class="druga"><hr></section>
        <section class="trzecia"><p>© 2025 All rights reserved.</p></section>
    </footer>
</body>
</html>
<?php

$link -> close();

?>