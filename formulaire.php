<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <div class="form">
       
            <div class="row">
                    <h4 style="text-align:center">A ce stade, il s’agit de recueillir des informations nécessaires sur votre activité,<br> votre situation personnelle et vos besoins. <br> Vos réponses seront essentielles pour vous proposer une solution personnalisée.</h4>
            </div>
            <div class="wrapper">
                <input type="radio" name="select" id="option-1">
                <input type="radio" name="select" id="option-2">
                <input type="radio" name="select" id="option-3">
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>Artisan</span>
                    </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>Commerçant</span>
                </label>
                <label for="option-3" class="option option-3">
                    <div class="dot"></div>
                    <span>Profession libérale</span>
                </label>
            </div>
            <div class="wrapper2">
                <div class="row input-container">
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" required />
                        <label>Nom</label> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" required />
                        <label>Prénom</label> 
                    </div>
                </div>
            <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Nom de l'entreprise</label> 
                    </div>
                </div>
            <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Siren de l'entreprise</label> 
                    </div>
                </div>
            <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="email" required />
                        <label>Email</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea required></textarea>
                        <label>Message</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="btn-lrg submit-btn">Envoyer</div>
                </div>
            </div>
                </div>

        </div>
    </form>
</body>
</html>