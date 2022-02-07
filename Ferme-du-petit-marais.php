<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Pages/style_ferme-du-petit-marais.css">
		<title> La Ferme du Petit Marais </title>
	</head>
	<body>
		<?php include('Pages/header-accueil.php');?>
		<section class="banniere">
			<h2 class=banniere__description> Des produits fermiers et locaux, en vente directe à la ferme  </h2>	
		</section>
		<button class="btn btn__nos-produits">
			<a href="Nos-produits.html" > Découvrez nos produits !</a> 
		</button>
		<section class="first-part">
			<img src="./Photos/Ferme_du_Petit_Marais-0161.jpg" alt="photo_verger" class="first-part__photo-verger">
			<h2> Viandes bovines, charcuteries, volailles, oeufs, légumes et produits du terroir...
			</h2>
		</section>

		<section class="second-part">
			
			<h2> Et bien plus en magasin !
			</h2>
			<img src="./Photos/Ferme_du_Petit_Marais-078.jpg" alt="photo_magasin" class="second-part__photo-magasin">
		</section>
		<button class="btn btn__small-screen">
			<a href="Nos-produits.html" > Découvrez nos produits !</a> 
		</button>
<footer>
	 <div class="footer">	 
		<div class="footer__bloc-contact">
      		<h4>Restons en contact</h4>
      			<section class="footer__bloc-contact__tel">	
      				<img src="./Photos/Phone gris.png" class="footer__bloc-contact__tel__img">
      				<p>06.67.25.52.87 </p>
      			</section>
      			<section class="footer__bloc-contact__email">
      				<img src="./Photos/email gris.png" class="footer__bloc-contact__email__img">
      				<a href="mailto:lafermedupetitmarais@gmail.com">lafermedupetitmarais@gmail.com</a>
      			</section>
      			<section class="footer__bloc-contact__adresse">
      				<img src="./Photos/map gris.png" class="footer__bloc-contact__adresse__img">
      				<p>1, le Petit Marais, 57645 Retonfey</p>
      			</section>
    	</div>
    	<div class="footer__bloc-horaires">
                <h4>Horaires d'ouverture</h4>
                <ul class="footer__bloc-horaires__liste">
                    <li> Jeu 17h-19h</li>
                    <li> Ven 17h-19h</li>
                    <li> Sam 09h-13h</li> 
                </ul>
        </div>
        <div class="footer__bloc-medias">
		 		<a href="https://www.facebook.com/lafermedupetitmarais/"  target="_blank" class="footer__bloc-medias__FB" > <figure> <img src="./Photos/logo_fb.png" alt="logo_fb" class="footer__bloc-medias__FB__logo">Suivez-nous sur Facebook ! </a>
				</figure>
		</div>
	</div>
</footer>
</body>
<script src="javascript.js"></script>
</html> 