<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-10-03
 * Time: 10:28
 */

$Voornaam       = $_POST["Voornaam"];
$Achternaam     = $_POST["Achternaam"];
$Straat         = $_POST["Straat"];
$Huisnummer     = $_POST["Huisnummer"];
$Postcode1      = $_POST["Postcode1"];
$Postcode2      = $_POST["Postcode2"];
$Woonplaats     = $_POST["Woonplaats"];
$Email          = $_POST["Email"];
$Telefoonnummer = $_POST["Telefoonnummer"];
$Postcode = $Postcode1 . $Postcode2;
?>

    <html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/master.css">
        <title></title>
    </head>
    <body>

    <?php echo $Postcode; ?>

    </body>
    </html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulier";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO info (
Voornaam,
Achternaam,
Straat,
Huisnummer,
Postcode,
Woonplaats,
Email,
Telefoonnummer
)
VALUES (
  '$Voornaam',
  '$Achternaam',
  '$Straat',
  '$Huisnummer',
  '$Postcode',
  '$Woonplaats',
  '$Email',
  '$Telefoonnummer'
 )";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: Formulier.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>