<?php
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
?>

<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $email = filtrado($_POST["email"]);
    $clau = filtrado($_POST["clau"]);
    $continent = filtrado($_POST["continent"]);
    $data = filtrado($_POST["data"]);
    $genere = filtrado($_POST["genere"]);
    $text = filtrado($_POST["text"]);
}
?>

<?php if(isset($_POST["submit"])): ?>
<h2>Les dades que has enviat són:</h2>
Email : <?php isset($email) ? print $email : ""; ?> <br>
Clau : <?php isset($clau) ? print $clau : ""; ?> <br>
Continent : <?php isset($continent) ? print $continent : ""; ?> <br>
Data : <?php isset($data) ? print $data : "";?> <br>
Genere : <?php isset($genere) ? print $genere : ""; ?> <br>
Text : <?php isset($text) ? print $text : ""; ?> <br>
<?php endif; ?>
