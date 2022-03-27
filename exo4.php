<?php 
    include("common/header.php");
    include("common/menu.php");

    session_start();
    if(!isset($_SESSION["chiffreAleatoire"])) {
        $_SESSION["chiffreAleatoire"] = rand(1, 10);
    }
?>

<main>

    <h1>Trouver le chiffre choisi par l'ordinateur</h1>

    <form action="#" method="POST">
        <input type="hidden" name="reinit" value="yes">
        <input type="submit" value="Générer un nouveau chiffre">
    </form><br>

    <form action="#" method="POST">

        <label for="nombre">Quel est le chiffre (entre 1 et 10) : </label>
        <input name="nombre" type="number" id="nombre">

        <input type="submit" value="Valider">
    </form>

    <?php 

        if(isset($_POST['reinit']) && $_POST['reinit'] === "yes") {
            $_SESSION["chiffreAleatoire"] = rand(1, 10);
        }

        $chiffre_aleatoire = $_SESSION["chiffreAleatoire"];

        if(isset($_POST["nombre"]) && $_POST["nombre"] > 0) {  
            
            $chiffre_saisi = (int)$_POST["nombre"];

            if($chiffre_saisi === $chiffre_aleatoire) {
                echo "<h2> GAGNÉ !!!!!!!!!!<h2>";
            } else {
                if($chiffre_saisi < $chiffre_aleatoire) {
                    echo "<h2>Le nombre est plus grand</h2>";
                } else {
                    echo "<h2>Le nombre est plus petit</h2>";  
                }
            }      
            
        } else {
            echo "<h3>Saisir une valeur pour trouver le nombre choisi par l'ordinateur</h3>";
        }


    ?>

</main>

<?php 
    include("common/footer.php");
?>