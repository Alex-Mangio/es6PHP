<?php
$numRand = rand(1, 99);
if (!empty($_POST["num"])) {
    $tentativi = $_POST["tentativi"];
    if ($_POST["num"] == $numRand) {
        echo "<html>
        <body>
        <b>Bravo hai indovinato il numero al tentativo n°: $tentativi</b>   
        </body>
        </html>";
    } else {
        if ($tentativi != 5) {
            if ($_POST["num"] < $numRand) {
                echo "Il tuo numero e' troppo piccolo";
            
            } else {
                echo "Il tuo numero e' troppo grande";
            }
            
            $tentativi++;
            echo "
            <form action=esito.php method=post><b>Tentativo n°$tentativi: </b><input type=number name=num min=0 max=99>
            <input type=submit value=Tenta>
            <input type=hidden value=$tentativi name=tentativi>
            </form>";
            
        } else {
            echo "Non hai indovinato il numero nei tentativi disponibili";
        }
    }
} else {
    echo "Torna indietro e inserisci un numero
    <form action=index.php>
        <input type=submit value=indietro>
    </form>";
}
