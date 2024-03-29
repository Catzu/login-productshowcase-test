<?php
include_once 'header.php';
echo "header";
?>

    <section>
        <h2>Registreren</h2>
        <div>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Volledige naam">
                <input type="text" name="email" placeholder="email">
                <input type="text" name="uid" placeholder="username">
                <input type="password" name="pwd" placeholder="passwoord">
                <input type="password" name="pwdrepeat" placeholder="repeat passwoord">
                <input type="text" name="telefoonnummer" placeholder="telefoonnummer">
                <input type="text" name="adres" placeholder="adres">
                <input type="text" name="huisnummer" placeholder="huisnummer">
                <input type="text" name="postcode" placeholder="postcode">
                <input type="text" name="plaats" placeholder="plaats">
                <button type="submit" name="submit">Registreren</button>
            </form>
        </div>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email</p>";
            }
            else if ($_GET["error"] == "passwprdsdpmt,atch") {
                echo "<p>Password doesn't match</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>something went wrong, try again</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up</p>";
            }
        }
    ?>

    </section>

<?php
include_once 'footer.php';
echo "footer";
?>