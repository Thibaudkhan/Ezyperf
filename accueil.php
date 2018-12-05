<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ezyperf</title>
        <link rel="stylesheet" type="text/css" href="accueil.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="images/mini_logo.png">
        
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:100,400,400i,600,800" />

        
</head>
<body>
    <?php include "header.php"; ?>
	<div class="blocPapa">
        <div class="accueil_bloc1 un">
            <div class="legende">
                <div class="legende_gauche">
                    <div class="legende_titre">
                        <p>01. CONSEIL</p>
                    </div>
                    <div class="legende_trait">
                        
                    </div>
                    <div class="legende_texte">
                        <p>Une &eacute;quipe d'experts qui vous accompagne</p>
                    </div>
                                    
                </div>
                <div class="legende_droite">
                        <button onclick="plusDivs(1)"> <img src="images/fleche"/></button>
                </div>            
            </div>
        </div>
        <div class="accueil_bloc1 deux" >
            <div class="legende">
                <div class="legende_gauche">
                    <div class="legende_titre">
                        <p>02. APPLICATION</p>
                    </div>
                    <div class="legende_trait">
                        
                    </div>
                    <div class="legende_texte">
                        <p>D&eacute;veloppement de solutions innovantes</p>
                    </div>
                                    
                </div>
                <div class="legende_droite">
                        <button onclick="plusDivs(1)"> <img src="images/fleche"/></button>
                </div>            
            </div>
        </div>
        <div class="accueil_bloc1 trois" >
            <div class="legende">
                <div class="legende_gauche">
                    <div class="legende_titre">
                        <p>03. ADAPTATION</p>
                    </div>
                    <div class="legende_trait">
                        
                    </div>
                    <div class="legende_texte">
                        <p>Des produits totalement sur-mesure</p>
                    </div>
                                    
                </div>
                <div class="legende_droite">
                    <button onclick="plusDivs(1)"> <img src="images/fleche"/></button>
                </div>            
            </div>
        </div>
    </div>
    <div class="blocResponsive" >
        <div class="legende_3">
            <ul>
                <li class="carreViolet">
                    <p><B>01. CONSEIL</B></p>
                </li>
                <li class="carreBleu">
                    <p><B>02. APPLICATION</B></p>
                </li>
                <li class="carreOrange">
                    <p><B>03. ADAPTATION</B></p>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="h1"><h1><span>Des solutions simples</span> pour améliorer vos performances</h1><br />
    <div class="accueil_separateur2"></div>
    <h2><span>Dépassez les limites de vos tableurs</span> pour des process collaboratifs et sécurisés</h2></div>
    <div class="accueil_separateur"></div>
    <h3>ILS NOUS FONT CONFIANCE DANS PLUS DE 30 PAYS :</h3>
    <div class="accueil_clients">
        <ul>
            <li><div class="Coty_logo"><img src="images/Coty.png" name="Coty" onmouseover="Coty.src='images/Coty_c'"  onmouseout="Coty.src='images/Coty.png'"></div></li>
            <li><div class="Hanes_logo"><img src="images/Hanes.png" name="Hanes" onmouseover="Hanes.src='images/Hanes_c.png'"  onmouseout="Hanes.src='images/Hanes.png'"></div></li>
            <li><div class="Danone_logo"><img src="images/Danone.png" name="Danone" onmouseover="Danone.src='images/Danone_c.jpg'"  onmouseout="Danone.src='images/Danone.png'"></div></li>
            <li><div class="Savencia_logo"><img src="images/Savencia.png" name="Savencia" onmouseover="Savencia.src='images/Savencia_c'"  onmouseout="Savencia.src='images/Savencia.png'"></div></li>
	</ul>       
    </div>
    
	<?php include "footer.php"; ?>
    
         <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("accueil_bloc1");
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
            }
        </script>   
</body>
</html>