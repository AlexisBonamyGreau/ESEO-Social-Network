<h1>Bienvenue sur RS ESEO !</h1>

<div class="corps">
    <form class="box connexion" method="post">
        <h2 class="section-title">
            Connexion
        </h2>
        <input class='item' id="mail" name="mail" type="text" placeholder="Email">
        <input class='item' name="password" type="password" id="defaultLoginFormPassword" placeholder="Mot de Passe">
        <button class="item button" name="connexion_submit" value="1" type="submit">Connexion</button>
        <a href="" class="cgv">Mot de passe perdu</a>
    </form>

    <form class="box inscription" method='post'>
        <h2 class="section-title">
            Inscription
        </h2>
        <input class="item" id="nom" name="nom" type="text" placeholder="Nom">
        <input class="item" id="prenom" name="prenom" type="text" placeholder="Prenom">
        <select class="item" name="annee" id="annee-select">
            <option value="0">Choisir une année...</option>
            <option value="1">E1</option>
            <option value="2">E2</option>
            <option value="3">E3</option>
            <option value="4">E4</option>
            <option value="5">E5</option>
        </select>
        <input class="item" id="mail" name="mail" type="text" placeholder="Email">
        <input class="item" name="password" type="password" id="defaultLoginFormPassword" placeholder="Mot de passe">
        <input class="item" name="password_confirm" type="password" id="defaultLoginFormPassword" placeholder="Confirmez le mot de passe">
        <button class="item button" name="inscription_submit" value="1" type="submit">Inscription</button>
    </form>
</div>