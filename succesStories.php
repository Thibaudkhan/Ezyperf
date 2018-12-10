<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ezyperf</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="succesStories.css">
</head>
<body>
		<?php include "header.php"?>
		<div class="blocSucces">

				<div class="bloc4">	
				<div class="limage">			
					<div class="simplicite">
						<div class="imagePictoTailored"><img src="images/picto_ezyTailored"></div>
						<h1>SIMPLICIT&#201;</h1>
						<div class="separateur"></div>
						<p><span>Suppression</span><br /> de plus de <br /><span>800 fichiers</span></p>
					</div>
					<div class="collaboratif">
						<div class="imagePictoTailored"><img src="images/picto_ezyTailored"></div>
						<h1>COLLABORATIF</h1>
						<div class="separateur"></div>
						<p>Un chiffre <br /><span>unique Capex</span><br /> partagé</p>
					</div>
					<div class="securisation">
						<div class="imagePictoTailored"><img src="images/picto_ezyTailored"></div>
						<h1>S&#201;CURISATION</h1>
						<div class="separateur"></div>
						<p>Routine<br /> de  <span>pilotage<br /> régulière</span></p>
					</div>
					<div class="efficacite">
						<div class="imagePictoTailored"><img src="images/picto_ezyTailored"></div>
						<h1>EFFICACIT&#201;</h1>
						<div class="separateur"></div>
						<p><span>Accélération</span><br /> du processus <span> <br />de décision </span></p>
					</div>
				</div>
			</div>
			<div class="grosBloc">
				<div class="blocTemoignage">
					<h2>LAURENCE ROUYER</h2>
					<h3>Contrôleur Europe - <strong>HANES BRAND Inc. France</strong> </h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/HanesC.png"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Plus que la mise en &#156;uvre d'un outil,<br /> <strong>l'accompagnement et l'expertise d'Ezyperf</strong><br /> nous ont permis <strong>d'optimiser nos processus de gestion<br /> des investissements</strong> dans le cadre du projet EVIAN 2015 <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_gauche" name="FlecheG" onmouseover="FlecheG.src='images/Fleche_noireG'"  onmouseout="FlecheG.src='images/fleche_gauche.png'"></button>
	        	</div>
				<div class="legende_droite">
                	<button onclick="plusDivs(1)"> <img src="images/fleche_droite" name="Fleche" onmouseover="Fleche.src='images/Fleche_noireD'"  onmouseout="Fleche.src='images/fleche_droite.png'"></button>
        		</div>
			</div>
			<div class="grosBloc">
				<div class="blocTemoignage ">
					<h2>RENAUD POUGET </h2>
					<h3>Responsable Capex - <strong>EVIAN Volvic World Sources, </strong> Groupe DANONE</h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/DanoneC.jpg"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Avec notre partenariat Ezyperf, nous avons mis en place un système collaboratif de simulations des marges et supprimé tous les fichiers Excel de pilotage (env. 800). La DG valide en temps réel des contrats négociés avec les distributeurs dans EzyVentes <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(-1)"> <img src="images/fleche_gauche" name="FlecheG1" onmouseover="FlecheG1.src='images/Fleche_noireG'"  onmouseout="FlecheG1.src='images/fleche_gauche.png'"></button>
	        	</div>
				<div class="legende_droite">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_droite" name="Fleche1" onmouseover="Fleche1.src='images/Fleche_noireD'"  onmouseout="Fleche1.src='images/fleche_droite.png'"></button>
	        	</div>
        	</div>
        	<div class="grosBloc">
				<div class="blocTemoignage ">
					<h2>Dario PAEZ</h2>
					<h3>Ingénieur Génie Civil - <strong>Savencia F&D Argentina</strong></h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/SavenciaC.png"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Ezycapex nous permet de mesurer en temps réel l’évolution de nos projets et nous engage à faire nos estimations budgétaires dans les délais en réduisant nos écarts pour atteindre nos objectifs. L’interface du logiciel est assez simple et à la fois très précise, ce qui nous permet de trier l’information par projet, par usine, par region, etc. d'une forme très agile <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(-1)"> <img src="images/fleche_gauche" name="FlecheG2" onmouseover="FlecheG2.src='images/Fleche_noireG'"  onmouseout="FlecheG2.src='images/fleche_gauche.png'"></button>
	        	</div>
				<div class="legende_droite">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_droite" name="Fleche2" onmouseover="Fleche2.src='images/Fleche_noireD'"  onmouseout="Fleche2.src='images/fleche_droite.png'"></button>
	        	</div>
        	</div>
		</div>


		<?php include "footer.php"?>
	<script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("grosBloc");
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