<section>
    <h1>Contact</h1>
    <form method="post" action="../public/save.php">
        <div>
            <label for="username">Nom: </label>
            <input type="text" id="username" name="username" minlength="6" maxlength="20">
        </div>

        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" pattern="^[A-Za-z]+@{1}[A-Za-z]+\.[A-Za-z]{2,}$">
        </div>

        <div>
            <label for="message">Message: </label>
            <input type="text" id="message" name="message" placeholder="Message..." maxlength="280">
        </div>

        <input class= "submit" type="submit" name="send" value="Envoyer">
    </form>
</section>