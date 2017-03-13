<!doctype html>
<html lang="nl"><head>
    <meta charset="utf-8">
    <meta name="description" content="Scripting MD1A MD1B">
    <meta name="author" content="Ma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP String handler opdracht</title>
</head>
<body>
<img src="https://www.ma-web.nl/static/vector/Logo_blok.svg" alt="logo" width="50">
<div class="wrapper">
    <form method="post" action="stringhandler_basis.php">
        <fieldset>
            <legend>Stringhandler</legend>
            <input name="input1" placeholder=" string 1" type="text"><br>
            <input name="input2" placeholder=" string 2" type="text">
            <input id="submit" name="submit" value="submit" type="submit">

        </fieldset>
    </form>
    <hr>
    <?php
    $string1 = $_POST['input1'];
    $string2 = $_POST['input2'];

    ?>
    <ul>
        <li>Ingevoerde string 1:    </li>
        <li>Ingevoerde string 2:    </li>
        <li>String 1 getrimd trim():   </li>
        <li>String 2 getrimd trim():   </li>
        <li>String 3 is de concatenation van string 1 en string 2: </li>
        <li>De lengte van string 3 is: 10  characters</li>
        <li>Zoeken naar spaties. Er zit een spatie op positie </li>
        <li>Zoeken naar @. Er zit een @ op positie </li>
        <li>Zoeken naar "." . Er zit een  "."  op positie </li>
        <li>Zoek naar woord "html" vervang dit door "PHP"  </li>
        <li>Wijzig de eerste letter van string 3 naar hoofdletter: </li>
        <li>Alles in hoofdletters:  </li>
    </ul>
    <hr>
    <h4>Bonus opdracht: maak code waarmee jij controleert of een input een geldig e-mail adres is</h4>
    <h4>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP</h4>
</div>


</body>
</html>