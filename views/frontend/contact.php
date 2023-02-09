

<body>
    <?php
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page du site BordeauxDéraile
Nom :" . $_POST["email"] . "
Message : " . $_POST["message"];
        $retour = mail("claire.vital@mmibordeaux.com", $_POST["sujet"], $message, "From:clairevital00@gmail.com\r\nReply-to:" . $_POST["email"]);
        if ($retour) {
            echo "<p> l'email à bien été envoyé </p>";
        }
    }
    ?>
    <section class="contact">
        <h3 class="contact">CONTACTEZ NOUS</h3>
        <form class="contacter" method="post">
            <div class="contacter_b">
                <label for="Sujet" class="contact-top">Sujet:</label><br>
                <input type="text" name="sujet" required><br>
                <label for="email">E-Mail:</label><br>
                <input type="email" name="email" required><br>
                <label for="message">Message:</label><br>
                <textarea name="message" required ></textarea>
            </div>
            <input type="submit" value="Envoyer"class="poster">
        </form>


    </section>
</body>

</html>