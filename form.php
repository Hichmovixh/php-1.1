<form action="thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="mail">Email :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phoneNumber">Téléphone</label>
        <input type="tel" id="phoneNumber" name="user_phoneNumber">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option value="Le roi">Le roi</option>
            <option value="Le roi des pirates">Le roi des pirates</option>
            <option value="L'empereur">L'empereur</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
