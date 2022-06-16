<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_particulier.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include 'header.html';
        ?>
    </header>
    <div class="container1">
        <div class="domaine">
            <h3>Artisant</h3>
            <img class="frame1">  
            </img>
        </div>
        <div class="domaine">
            <h3>Commerçant</h3>
            <img class="frame2">
            </img>
        </div>
        <div class="domaine">
            <h3>Profession Libérale</h3>
            <img class="frame3">
            </img>
        </div>
    </div>
    <div class="assu_item">
        <a href="prévoyance.php"><div class="assu"><img class="icon" src="img/parapluie.png"><h1>Prévoyance</h1><br>se protéger en cas d'arret de travail, d'invalidité ou de décès.</div></a>
        <a href="sante.php"><div class="assu"><img class="icon" src="img/santé.png"><h1>Santé</h1><br>Se faire rembourser ses dépenses de soins et celles de sa famille.</div></a>
        <a href="retraite.php"><div class="assu"><img class="icon" src="img/retraite.png"><h1>Retraite</h1><br>Financer une épargne ou des revenus futurs grâce à mon activité.</div></a>
        <a href="Pe.php"><div class="assu"><img class="icon" src="img/chomage.png"><h1>Perte d'emploi</h1><br>Cotiser à une assurance chômage privée et sécuriser son avenir.</div></a>

    </div>
    <footer>
    <?php
            include 'footer.html';
        ?>
    </footer>
</body>
</html>