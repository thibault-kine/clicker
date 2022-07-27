<section id="title-screen">
    <button id="back" class="hidden">Retour</button>
    <a href="./views/logout.php" id="logout"></a>

    <div id="menu">
        <img src="./style/img/logo.png" id="logo-big">
        <button id="start-button"></button>
    </div>

    <form action="index.php" method="post" id="user-sign-in" class="hidden">
        <?php if(empty($_SESSION["player"])) { ?>
            <h1>Un Sans-Éclat est de retour après un long exil...</h1>

            <div class="field">
                <label for="name" class="important">Quel est son nom ?</label>
                <input type="text" name="name">
            </div>

            <div class="field">
                <label for="starter-class">Quelle est sa spécialité ?</label>
                <select name="starter-class">
                    <option value="wretch" selected="selected">Misérable</option>
                    <option value="vagabond">Vagabond</option>
                    <option value="hero">Héros</option>
                    <option value="warrior">Guerrier</option>
                    <option value="prisoner">Prisonnier</option>
                    <option value="bandit">Bandit</option>
                    <option value="astrologer">Astrologue</option>
                    <option value="prophet">Prophète</option>
                    <option value="samurai">Samourai</option>
                    <option value="confessor">Confesseur</option>
                </select>
            </div>

            <div class="field radio">
                <p class="important">Quel est son sexe ?</p>
                <br>
                <div class="subfield">
                    <div class="radio-self">
                        <label for="m">Homme</label>
                        <input type="radio" name="gender" id="m" value="male">
                    </div>
                    <div class="radio-self">
                        <label for="f">Femme</label>
                        <input type="radio" name="gender" id="f" value="female">
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="keepsake">Quel souvenir a-t-il ramené de son périple ?</label>
                <select name="keepsake">
                    <option value="none" selected="selected">Aucun</option>
                    <option value="medallion">Médaillon d'Ambre Pourpre</option>
                    <option value="rune">Rune de l'Entre-Terre</option>
                    <option value="seed">Graine Dorée</option>
                    <option value="ashes">Cendres de diablotins dentus</option>
                    <option value="pots">Pot fissuré (×3)</option>
                    <option value="key">Clé-Lame de pierre (×2)</option>
                    <option value="branch">Branche envoûtante</option>
                    <option value="shrimp">Crevette bouillie</option>
                    <option value="woe">Malheur de Shabiri</option>
                </select>
            </div>

            <button type="submit" name="submit">Entrer dans l'Entre-Terre</button>
            <?php } else { ?>
                <div id="welcome-msg" class="hidden">
                    <h1>Bienvenue, <?= $_SESSION['player']['name'] ?>.</h1>
                    <h3>Le trône d'Elden n'attends que vous...</h3>
        
                    <div class="lined">
                        <span class="line"></span>
                        <button id="play" onclick="window.location.href = './views/battle-screen.php'"></button>
                        <span class="line"></span>
                    </div>
                </div>
            <?php } ?>
        </form>

</section>

<?php
if(isset($_POST['submit'])) {
    if(empty($_SESSION['player'])) {

        $_SESSION['player'] = [
            'name' => $_POST['name'],
            'class' => $_POST['starter-class'],
            'gender' => $_POST['gender'],
            'keepsake' => $_POST['keepsake']
        ];
    }
}
?>