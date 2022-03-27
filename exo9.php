<?php 
    include("common/header.php");
    include("common/menu.php");

    $lang1 = [
        "Nom"                   => "HTML", 
        "Difficulte"            => "Facile", 
        "Temps d'apprentissage" => "1 semaine"
    ];
    $lang2 = [
        "Nom"                   => "CSS", 
        "Difficulte"            => "Intermédiaire", 
        "Temps d'apprentissage" => "1 mois"
    ];
    $lang3 = [
        "Nom"                   => "JavaScript", 
        "Difficulte"            => "Avancé", 
        "Temps d'apprentissage" => "2 mois"
    ];
    $lang4 = [
        "Nom"                   => "PHP", 
        "Difficulte"            => "Avancé", 
        "Temps d'apprentissage" => "2 mois"
    ];


?>

<main>

    <h1>Selection du langage</h1>

    <form action="#" method="POST">

        <label for="langage">Langage : </label>
        <select name="langage" id="langage" onChange= "submit()">
            <option value="">--- Select a langage ---</option>
            <option value="lang1" <?php if(isset($_POST['langage']) && $_POST["langage"] === "lang1") echo "selected"; ?> >HTML</option>
            <option value="lang2" <?php if(isset($_POST['langage']) && $_POST["langage"] === "lang2") echo "selected"; ?> >CSS</option>
            <option value="lang3" <?php if(isset($_POST['langage']) && $_POST["langage"] === "lang3") echo "selected"; ?> >JavaScript</option>
            <option value="lang4" <?php if(isset($_POST['langage']) && $_POST["langage"] === "lang4") echo "selected"; ?> >PHP</option>
        </select>

    </form>

    <?php 

        
        if(isset($_POST["langage"])) {

            echo "<h2>Langage : </h2>";

            if($_POST["langage"] === "lang1") {
                echo "<div class='flex'>";
                    echo "<img src='sources/images/html.png' alt='html' class='img-ex8'>";
                    afficherLangage($lang1);
                echo "</div";
            } elseif ($_POST["langage"] === "lang2") {
                echo "<div class='flex'>";
                    echo "<img src='sources/images/css.png' alt='css' class='img-ex8'>";
                    afficherLangage($lang2);
                echo "</div";
            } elseif ($_POST["langage"] === "lang3") {
                echo "<div class='flex'>";
                    echo "<img src='sources/images/js.png' alt='js' class='img-ex8'>";
                    afficherLangage($lang3);
                echo "</div";
            } elseif ($_POST["langage"] === "lang4") {
                echo "<div class='flex'>";
                    echo "<img src='sources/images/php.png' alt='php' class='img-ex8'>";
                    afficherLangage($lang4);
                echo "</div";
            }
        } else {
            echo "<h2>Saisir un langage.</h2>";
        }
        
        function afficherLangage($langage) {

            echo "<div class='infos_langage'>";
            
                foreach($langage as $index => $value) {
                    echo "<b>" . $index . "</b> : " . $value . "<br />";
                }

            echo "</div>";

        }
        
    ?>

</main>

<?php 
    include("common/footer.php");
?>