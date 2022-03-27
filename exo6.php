<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<main>

    <h1>Selection de la spécialisation (front / back)</h1>

    <form action="#" method="POST">

        <label for="spe">Spécialisation : </label>
        <select name="spe" id="spe">
            <option value="front">Front-end</option>
            <option value="back">Back-end</option>
        </select>

        <input type="submit" value="Valider">
    </form>

    <?php 

        if(isset($_POST["spe"])) {  
            if($_POST["spe"] === "front") {
                echo "<img src='sources/images/front.png' alt='front-end' class='img-ex6'>";
            } else {
                echo "<img src='sources/images/back.png' alt='back-end' class='img-ex6'>";
            }
            
        } else {
            echo "<h3>Choisir une spécialisation</h3>";
        }


    ?>

</main>

<?php 
    include("common/footer.php");
?>