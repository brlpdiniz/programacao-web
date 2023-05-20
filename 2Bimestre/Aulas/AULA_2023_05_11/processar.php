<?php
$repete = $_POST['repeticoes'];

echo "<p>Repeticoes: ".$repete."<\p>";

for ($i=1; $i<=$repete; $i++){
    echo "<p>".$i."<\p>";
}
?>