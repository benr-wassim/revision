 <?php
function triangle($nbLignes) {
    // Boucle pour les lignes
    for ($i = 1; $i <= $nbLignes; $i++) {
        // Boucle pour les colonnes
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
echo triangle(10);

?>