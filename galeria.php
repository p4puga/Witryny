<?php
$link = new mysqli('localhost','root','','polska');
$sql="SELECT id,zdjecie,nazwa,opis FROM zdjecia;";
$result = $link -> query($sql);
$zdjecia = $result -> fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odkryj Polske - Galeria</title>
    <link rel="stylesheet" href="style/galeria.css">
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
    <section class="napis">
        <p class="czarne">Galeria Miejsc</p>
        <p>Odkryj najpiękniejsze zakątki Polski. Kliknij na zdjęcie, aby je powiększyć.</p>
    </section>
    <section class="zdjecia">
        <?php
            foreach($zdjecia as $zdjecie){
                echo"
        <section class='zdjecie'>
            <img src='zdjecia/{$zdjecie['zdjecie']}' alt='{$zdjecie['zdjecie']}'>
            <p class='czarne2'>{$zdjecie['nazwa']}</p>
            <p>{$zdjecie['opis']}</p>
        </section>";
            }
        ?>

    <div id="podglad" class="podglad">
        <div class="podglad-content">
            <img id="duze-zdjecie" src="" alt="">
            <p id="nazwa"></p>
            <p id="opis"></p>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const podglad = document.getElementById("podglad");
        const duzeZdjecie = document.getElementById("duze-zdjecie");
        const nazwa = document.getElementById("nazwa");
        const opis = document.getElementById("opis");

        document.querySelectorAll(".zdjecie").forEach(sekcja => {
            sekcja.addEventListener("click", () => {
                const img = sekcja.querySelector("img");
                const nazwaText = sekcja.querySelector(".czarne2").innerText;
                const opisText = sekcja.querySelector("p:not(.czarne2)").innerText;

                duzeZdjecie.src = img.src;
                nazwa.textContent = nazwaText;
                opis.textContent = opisText;

                podglad.style.display = "flex";
                document.body.style.overflow = "hidden";
            });
        });

        podglad.addEventListener("click", (e) => {
            if (e.target === podglad) {
                podglad.style.display = "none";
                document.body.style.overflow = "auto";
            }
        });
    });
    </script>



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