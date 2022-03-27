<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<main>

    <h1>Calculer une moyenne</h1>

    <form action="#" method="GET">

        <label for="nb">Nombre de notes :</label>
        <input name="nb" type="text" id="nb">

        <input type="submit" value="Ajouter"><br /><br />
    </form>

    <?php 

        if(isset($_GET["nb"]) && $_GET["nb"] > 0) {  
            $nb_notes =  $_GET["nb"];
            echo "<form action=\"#\" method=\"POST\">";
            echo "<fieldset>";
            echo "<legend> Moyenne </legend><br />";
            for($i = 1; $i <= $nb_notes; $i++) {
                echo "<label for=\"note".$i."\">Note ". $i ." : </label>";
                echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required><br /><br />";
            }
            echo "<input type=\"submit\" value=\"Calculer\"><br />";
            echo "</fieldset>";
            echo "</form><br/>";

            if(isset($_POST['note1'])) {
                $resultat = 0;
                for($i = 1; $i <= $nb_notes; $i++) {
                    $resultat += $_POST['note'.$i];
                }
                echo "La moyenne est de : " . "<b>" . round($resultat / $nb_notes, 2) . "</b>";
            }
            
        } else {
            echo "<h3>Veuillez saisir le nombre de notes</h3>";
        }


    ?>

</main>

<?php 
    include("common/footer.php");
?>