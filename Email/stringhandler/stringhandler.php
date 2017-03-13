<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html

			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
         $input3 = $input1 . $input2;
		 $email  = email_valid($input1);

         function email_valid($input1){

             if( strpos($input1, "@") AND strpos($input1, ".") ){
                 return "TRUE";
             }
             else {
                 return "FALSE";
             }
         }
		  ?>
         <img src = "ma-logo.png"  alt = "logo">
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend> Dave Bakker - GD1B </legend>
				 <input type = "text" name = "input1"  placeholder = "string 1"><br>
				 <input type = "text" name = "input2"   placeholder = " string 2">
                    <br>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
            <ul>
				<li>Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
				<li>Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
				<li>String 1 getrimd trim():  <?php  echo trim($input1);   ?> </li>
                <li>String 2 getrimd trim():  <?php  echo trim($input2);   ?> </li>
                <li>String 3 is de concatenation van string 1 en string 2: <?php echo $input3; ?></li>
                <li>De lengte van string 3 is: <?php echo strlen($input3); ?></li>
                <li>Zoeken naar spaties. Er zit een spatie op positie: <?php echo strrpos($input3," "); ?>
                <li>Zoeken naar @. Er zit een @ op positie: <?php echo strrpos($input3,"@"); ?></li>
                <li>Zoeken naar ".". Er zit een  "."  op positie: <?php echo strrpos($input3,"."); ?></li>
                <li>Zoek naar woord "html" vervang dit door "PHP": <?php echo str_replace("html", "PHP", $input3); ?> </li>
                <li>Wijzig de eerste letter van string 3 naar hoofdletter: <?php echo ucfirst($input3); ?></li>
                <li>Alles in hoofdletters: <?php echo strtoupper($input3); ?></li>
                <li>Controleer of string 1 een geldig email addres is: <?php echo $email; ?></li>
				</ul>
			</div>
	 </body>
</html>

<!-- claimed by Dave Bakker, GD1B -->
<!-- use of file: cheat sheet. Warning do not copy and paste or use the code in it's current state -->