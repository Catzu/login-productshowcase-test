<?php
include_once 'header.php';
echo "header";
?>

    <section>
        <h2>Inloggen</h2>
        <div>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Inloggen</button>
            </form>
        </div>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if ($_GET["error"] == "wrongLogin") {
                echo "<p>Incorrect login information</p>";
            }
        }
    ?>

    </section>

<?php
include_once 'footer.php';
echo "footer";
?>