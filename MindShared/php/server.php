<?php 
print_r($_GET) ;
$codFiscale="/^[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]$/";

if (isset($_GET["Username"]) && !empty($_GET["Username"])) echo "<br>c'è username ed è ".$_GET["Username"];
else echo "<br>non c'è username"; 
if (isset($_GET["Email"]) && !empty($_GET["Email"])) echo "<br>c'è email ed è ".$_GET["Email"];
else echo "<br>non c'è email"; 
if (isset($_GET["cf"]) && !empty($_GET["cf"])) {echo "<br>c'è codice fiscale ed è ".$_GET["cf"]."<br>stiamo effettuando il controllo del codice fiscale...";
    if (preg_match($codFiscale,$_GET["cf"])) echo "<br>E' nel formato giusto";
    else echo "<br>Non è nel formato giusto";
}
else echo "<br>non c'è codice fiscale"; 


?>