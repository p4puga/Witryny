<?php
$link = new mysqli('localhost','root','','polska');
if ($link->connect_error) {
    die("Błąd połączenia: " . $link->connect_error);
}

$imie_nazwisko = $_POST['imie_nazwisko'] ?? null;
$email = $_POST['email'] ?? null;
$temat = $_POST['temat'] ?? null;
$wiadomosc = $_POST['wiadomosc'] ?? null;

if($imie_nazwisko && $email && $temat && $wiadomosc){
    $stmt = $link->prepare("INSERT INTO kontakt(imie_nazwisko,email,temat,wiadomosc) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $imie_nazwisko, $email, $temat, $wiadomosc);
    $stmt->execute();
    $stmt->close();

    header("Location: ".$_SERVER['PHP_SELF']."?wyslano=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odkryj Polskę - Kontakt</title>
    <link rel="stylesheet" href="style/kontakt.css">
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
    <section class="kontakty">
        <p class="czarne">Kontakt</p><br>
        <p>Masz pytania o Polskę? Potrzebujesz rekomendacji miejsc do odwiedzenia? Skontaktuj się z nami!</p>
    </section>

    <section class="formularze">
        <section class="lewo">
            <p class="czarne2">Wyślij Wiadomość</p>
            <p>Wypełnij formularz, a odpowiemy najszybciej jak to możliwe</p><br>

            <?php
            if(isset($_GET['wyslano'])){
                echo "<p style='color:green; font-weight:bold;'>Dziękujemy! Twoja wiadomość została wysłana.</p>";
            }
            ?>

            <form action="" method="post">
                <p class="czarne2">Imię i nazwisko</p>
                <input type="text" name="imie_nazwisko" id="imie_nazwisko" placeholder="Jan Kowalski" required>
                
                <p class="czarne2">Email</p>
                <input type="email" name="email" id="email" placeholder="jan@example.com" required>
                
                <p class="czarne2">Temat</p>
                <input type="text" name="temat" id="temat" placeholder="Pytanie o atrakcje w Krakowie" required>
                
                <p class="czarne2">Wiadomość</p>
                <input type="text" name="wiadomosc" id="wiadomosc" placeholder="Planuję wyjazd do Polski i chciałbym dowiedzieć się więcej o..." required><br><br>
                
                <button type="submit">Wyślij wiadomość</button>
            </form>
        </section>

        <section class="prawo">
            <section class="gora">
                <p class="czarne3">Informacje Kontaktowe</p>
                <p>Inne sposoby na kontakt z nami</p>
                <section class="email">
                    <img src="" alt="">
                    <p class="czarne3">Email</p>
                    <p>kontakt@odkryjpolske.pl</p>
                </section>
                <section class="telefon">
                    <img src="" alt="">
                    <p class="czarne3">Telefon</p>
                    <p>+48 123 456 789</p>
                </section>
                <section class="email">
                    <img src="" alt="">
                    <p class="czarne3">Adres</p>
                    <p>ul. Mariacka 15, 31-042 Kraków, Polska</p>
                </section>
            </section>
            <section class="dol">
                <p>Godziny Otwarcia</p>
                <table>
                    <tr><td>Poniedziałek - Piątek</td><td>9:00 - 18:00</td></tr>
                    <tr><td>Sobota</td><td>10:00 - 15:00</td></tr>
                    <tr><td>Niedziela</td><td>Nieczynne</td></tr>
                </table>
            </section>
        </section>
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
$link->close();
?>
