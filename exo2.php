<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<main>

    <h1>Affichage d'une pyramide</h1>

    <form action="#" method="POST">
        <label for="hauteur">Hauteur de la pyramide : </label>
        <input name="hauteur" type="number" id="table">
        <input type="submit" value="Valider">
    </form>

    <?php 

        if(isset($_POST["hauteur"]) && $_POST["hauteur"] > 0) {    

            $hauteur = $_POST["hauteur"];
            echo "<h2> Pyramide de hauteur : " . $hauteur . "</h2>";
            $txt = "";
            for($i = 0; $i < $hauteur; $i++) {
                $txt .= "x";
                echo $txt . "<br />";
            }

            for($j = 0; $j < $hauteur-1; $j++) {
                $txt = substr($txt, 0, strlen($txt) - 1);
                echo $txt . "<br />";
            }

            
        } else {
            echo "<h3>Veuillez saisir une valeur</h3>";
        }


    ?>

</main>

<?php 
    include("common/footer.php");
?>