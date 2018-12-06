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
					<h2>RENAUD POUGET</h2>
					<h3>Responsable Capex - <strong>EVIAN Volvic World Sources, </strong> Groupe DANONE</h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/DanoneC.jpg"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Plus que la mise en &#156;uvre d'un outil,<br /> <strong>l'accompagnement et l'expertise d'Ezyperf</strong><br /> nous ont permis <strong>d'optimiser nos processus de gestion<br /> des investissements</strong> dans le cadre du projet EVIAN 2015 <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_gauche"/></button>
	        	</div>
				<div class="legende_droite">
                	<button onclick="plusDivs(1)"> <img src="images/fleche_droite"/></button>
        		</div>
			</div>
			<div class="grosBloc">
				<div class="blocTemoignage ">
					<h2>Test</h2>
					<h3>Responsable Capex - <strong>EVIAN Volvic World Sources, </strong> Groupe DANONE</h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/DanoneC.jpg"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Plus que la mise en &#156;uvre d'un outil,<br /> <strong>l'accompagnement et l'expertise d'Ezyperf</strong><br /> nous ont permis <strong>d'optimiser nos processus de gestion<br /> des investissements</strong> dans le cadre du projet EVIAN 2015 <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(-1)"> <img src="images/fleche_gauche"/></button>
	        	</div>
				<div class="legende_droite">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_droite"/></button>
	        	</div>
        	</div>
        	<div class="grosBloc">
				<div class="blocTemoignage ">
					<h2>blala3</h2>
					<h3>Responsable Capex - <strong>EVIAN Volvic World Sources, </strong> Groupe DANONE</h3>
					<div class="basDuTemoignage">
						<div class="imageTexte"><img src="images/DanoneC.jpg"></div>
						<div class="texte">
							<p> <img src="images/go.png"> Plus que la mise en &#156;uvre d'un outil,<br /> <strong>l'accompagnement et l'expertise d'Ezyperf</strong><br /> nous ont permis <strong>d'optimiser nos processus de gestion<br /> des investissements</strong> dans le cadre du projet EVIAN 2015 <a><img src="images/gf.png"></a></p>
						</div>
					</div>
				</div>
				<div class="legende_gauche">
	          	  <button onclick="plusDivs(-1)"> <img src="images/fleche_gauche"/></button>
	        	</div>
				<div class="legende_droite">
	          	  <button onclick="plusDivs(1)"> <img src="images/fleche_droite"/></button>
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