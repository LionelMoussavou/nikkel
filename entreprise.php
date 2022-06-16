<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_entreprise.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include 'header.html';
        ?>
    </header>
<div class="global">
    <div class="choix_item">
        <a href="entreprise_offres.php"><div class="choix"><img class="icon" src="img/parapluie.png"><h1>STARTUP</h1><br>Assurez moi vite, je n’ai pas de contrat</div></a>
        <a href="entreprise_offres.php"><div class="choix"><img class="icon" src="img/santé.png"><h1>ENTREPRISE</h1><br>Je suis déjà assuré et je veux comparer mes contrats</div></a>
    </div>
</div>
    <footer>
    <?php
            include 'footer.html';
        ?>
    </footer>
</body>
</html>