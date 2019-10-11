<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-10-03
 * Time: 10:28
 */


?>
<html lang="nl">
<head>
    <title>Formulier</title>
    <meta name="author" content="Bjørn Emmaneel">
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
<div class="wrapper">
    <form action="get.php" method="post">
    <div class="contactForm">
        <div class="contactForm__inputFields">
            <input required type="text"   maxlength="25"  class="input"      name="Voornaam"   placeholder="Voornaam *">
            <input required type="text"   maxlength="128" class="input"      name="Achternaam" placeholder="Achternaam *">
            <input required type="text"   maxlength="48"  class="input"      name="Straat"     placeholder="Straat *">
            <input required type="number" maxlength="11"  class="input"      name="Huisnummer" placeholder="Huisnummer *">
      <span><input required type="number" maxlength="6"   class="input next" name="Postcode1"  placeholder="Postcode *">
            <input required type="text"                   class="input next" name="Postcode2"  placeholder="Pcletters *"></span>
            <input required type="text"   maxlength="24"  class="input"      name="Woonplaats" placeholder="Woonplaats *">
        </div>
        <div class="contactForm__extraInputFields">
            <input required type="text"   maxlength="125" class="input"      name="Email"          placeholder="Email Address *">
            <input required type="number" maxlength="11"  class="input"      name="Telefoonnummer" placeholder="Telefoonnummer *">
            <input required type="submit"                 class="btn"        name="Send"           placeholder="Send">
        </div>
    </div>
    </form>
    </div>
</body>
</html>