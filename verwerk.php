<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : 'Bezoeker';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

    // 1. Sla de gegevens op in een tekstbestand (aanmeldingen.txt)
    $regeltje = "Naam: " . $naam . " | E-mail: " . $email . " | Datum: " . date("d-m-Y H:i:s") . "\n";
    file_put_contents('aanmeldingen.txt', $regeltje, FILE_APPEND);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bedankt voor je inschrijving - LevelUp Hardware</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main style="text-align: center; padding: 50px 20px;">
        <h1>Bedankt voor je inschrijving!</h1>
        <p><strong><?php echo $naam; ?></strong>, je bent ingeschreven voor de nieuwsbrief.</p>
        <p>We hebben een bevestiging gestuurd naar: <em><?php echo $email; ?></em></p>
        
        <br>
        <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: #2563eb; color: white; text-decoration: none; border-radius: 5px;">Terug naar de homepagina</a>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>