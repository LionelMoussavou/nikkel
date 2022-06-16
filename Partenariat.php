<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style_partenariat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <header>
            <?php
                include 'header.html';
            ?>
        </header>
    <div class="container_form">
            <form action="" method="get">
            <div class="form">
        
                <div class="row">
                        <h4 style="text-align:center">Seul on va plus vite, ensemble on va plus loin...</h4>
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
                <div class="col-xs-12">-
                        <div class="styled-input wide">
                            <input type="text" required />
                            <label>Nom de l'entreprise</label> 
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
                            <input type="tel" required />
                            <label>Telephone</label> 
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
   </div>     
        <footer>
            <?php include 'footer.html';
            ?>
        </footer>
   

</body>  
</html>