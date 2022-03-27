<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<main>

    <h1>Affichage des tables de multiplications</h1>

    <form action="#" method="GET">
        <label for="table">Table de multiplication à afficher : </label>
        <input name="table" type="number" id="table">
        <input type="submit" value="Valider">
    </form>

    <?php 

        if(isset($_GET["table"]) && $_GET["table"] > 0) {    

            echo "<h2>Table de " . $_GET['table'] . "</h2>";

            for($i = 1; $i <= 10; $i++) {
                echo $i . " * " . $_GET['table'] . " = " . $i * $_GET['table'] . "<br />";
            }
        } else {


            echo "<h3>Veuillez saisir une valeur</h3>";
        }

    ?>

</main>

<?php 
    include("common/footer.php");
?>