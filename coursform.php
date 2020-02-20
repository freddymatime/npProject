<form method="post" action="cible.php">
 
<p>
    On insèrera ici les éléments de notre formulaire.
</p>
 
</form>
------------------------------------------------------

<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>
-----------------------------------------------------

<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>
------------------------------
<textarea name="message" rows="8" cols="45">
Votre message ici.
</textarea>

---------------------------------------------
liste deroulante
<select name="choix">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>


----- sans "selected" le premier est pris par default.
<option value="choix3" selected="selected">Choix 3</option>
------------------------------------------

<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>

--------
Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>