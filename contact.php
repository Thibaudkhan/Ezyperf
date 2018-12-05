<?php $page="Contact";?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="contact.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Proprietaire" />
		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width, user-scalable=yes" />     
                <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:100,400,400i,600,800" />
               
                <link rel="stylesheet" href="style.php" />
		<title><?php echo $page;?></title>
                <link rel="shortcut icon" href="images/mini_logo.png">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	</head>
	<body>
		<div id="bloc_page">
            <div>     
 				<?php include("header.php"); ?>     
			</div>

            <section id="bloc_contact">
            	<div class="bloc_contact_glaire">
            		<div class="contact_texte">
            	<h1>CONTACT :</h1>
            	<div class="contact_g_d">
            	<div class="contact_gauche">
            		<ul>
            			<li><i class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:contact@ezyperf.com?Subject=Je%20vous%20contacte%20depuis%20ezyperf.com" target="_blank">contact@ezyperf.com</a></li>
            			<br />
                                <li><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;<a href="tel : +33134406500">+33 1 34 40 65 00</a></li>
            			
            		</ul>
            	</div>
            	<div class="contact_droite">
            		
            			<p>
            				<h2><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;BUREAU &Icirc;LE DE FRANCE</h2> 
            				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neuvitec 95 &bull; Technopole  Vald'Oise <br />
            				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 Mail Gay Lussac • 95000 Neuville-sur-Oise
            			</p>
            			
            			<p>
            			<h2><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;BUREAU GRAND EST</h2>
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quartier Libre &bull; Les Quartiers Généraux <br />
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 rue de Saint-Brice &bull; 51100 Reims
            		</p>
            		</div>
            	</div>
            	</div>
            	</div>
            </section>
		<?php include("footer.php");?>
		</div>
	</body>
</html>

