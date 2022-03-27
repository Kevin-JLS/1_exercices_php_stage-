<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<main>

    <h1>Cercle - Périmètre et Aire</h1>

    <form action="#" method="POST">

        <label for="rayon">Rayon du cercle : </label>
        <input name="rayon" type="text" id="rayon"><br><br>

        <label for="perimetre">Périmètre : </label>
        <input type="checkbox" name="perimetre" id="perimetre" checked><br>

        <label for="aire">Aire : </label>
        <input type="checkbox" name="aire" id="aire" checked><br><br>

        <input type="submit" value="Valider">
    </form>

    <?php 

        if(isset($_POST["rayon"]) && $_POST["rayon"] > 0) {  
            
            $rayon = $_POST["rayon"];

            echo "<h2>Résultats</h2>";

            if(isset($_POST['perimetre'])) {
                echo "Le périmètre d'un cercle de rayon " . "<b>" . $rayon . "</b>" . " est : <b>" . round(($rayon * 2 * pi()), 2) .  "</b><br />";
            }

            if(isset($_POST['aire'])) {
                echo "L'aire' d'un cercle de rayon " . "<b>" . $rayon . "</b>" . " est : <b>" . round(($rayon * $rayon * pi()), 2) .  "</b><br />";
            }

            
        } else {
            echo "<h3>Remplissez les champs ci-dessus</h3>";
        }


    ?>

</main>

<?php 
    include("common/footer.php");
?>