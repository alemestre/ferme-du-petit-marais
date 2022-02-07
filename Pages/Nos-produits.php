<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style_ferme-du-petit-marais.css">
		<title> La Ferme du Petit Marais </title>
	</head>
	<body>
	<?php include('header.php');?>
	<section class="produits">
	<div class="produits__boucherie"> 
		<a href="Boucherie.php" target="_blank"> <img src="../Photos/Produits/meat.png" class="produits__boucherie__img" alt="img_boucherie"> </a>
		<btn>
			<a href="Boucherie.php" target="_blank"> 
				<h3 class="btn btn__produits"> Boucherie </h3> 
			</a> 
		</btn>
	</div>
	<div class="produits__legumes"> 
		<a href="Legumes.php" target="_blank"> <img src="../Photos/Produits/vegetables.png" class="produits__legumes__img" alt="img_légumes"> </a>
		<btn>
			<a href="Legumes.php" target="_blank"> 
				<h3 class=" btn btn__produits">Légumes</h3> 
			</a>
		</btn>
	</div>
	<div class="produits__charcuterie">
			<a href="Charcuterie-traiteur.php" target="_blank"> <img src="../Photos/Produits/sausages.png" class="produits__charcuterie__img" alt="img_charcuterie"> </a>
			<btn>
				<a href="Charcuterie-traiteur.php" target="_blank"> 
					<h3 class="btn btn__produits"> Charcuterie </h3>
				</a>
			</btn>
	</div>
	<div class="produits__epicerie">
		<a href="Epicerie.php" target="_blank"> <img src="../Photos/Produits/grocery.png" class="produits__epicerie__img" alt="img_epicerie"> </a>
		<btn>
			<a href="Epicerie.php" target="_blank"> 
				<h3 class="btn btn__produits"> Epicerie</h3>
			</a> 
		</btn>
	</div>
	<div class="produits__laitage">
		<a href="Laitage.php" target="_blank"> <img src="../Photos/Produits/laitage.png" class="produits__laitage__img" alt="img_laitage"> </a>
		<btn>
			<a href="Laitage.php" target="_blank"> 
				<h3 class="btn btn__produits"> Laitages </h3>
			</a>
		</btn>
	</div>
	<div class="produits__boissons">
		<a href="Boissons.php" target="_blank"> <img src="../Photos/Produits/boissons.png"  class="produits__boissons__img" alt="img_boisson"> </a>
		<btn>
			<a href="Boissons.php" target="_blank">
				<h3 class="btn btn__produits"> Boissons </h3>
			</a>
		</btn>
	</div>
	<div class="produits__frais">
		<a href="Tres-tres-frais.php" target="_blank"> <img src="../Photos/Produits/frais.png" class="produits__frais__img" alt="img_frais"> </a>
		<btn> 
			<a href="Tres-tres-frais.php" target="_blank">
				<h3 class="btn btn__produits"> Très très frais</h3>
			</a>
		</btn>
	</div>
	</section>
<footer>
	<div class="footer">	 
	<div class="footer__bloc-contact">
			<h4>Restons en contact</h4>
				<section class="footer__bloc-contact__tel">	
					<img src="../Photos/Phone gris.png" class="footer__bloc-contact__tel__img">
					<p>06.67.25.52.87 </p>
				</section>
				<section class="footer__bloc-contact__email">
					<img src="../Photos/email gris.png" class="footer__bloc-contact__email__img">
					<a href="mailto:lafermedupetitmarais@gmail.com">lafermedupetitmarais@gmail.com</a>
				</section>
				<section class="footer__bloc-contact__adresse">
					<img src="../Photos/map gris.png" class="footer__bloc-contact__adresse__img">
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
				<a href="https://www.facebook.com/lafermedupetitmarais/"  target="_blank" class="footer__bloc-medias__FB" > <figure> <img src="../Photos/logo_fb.png" alt="logo_fb" class="footer__bloc-medias__FB__logo">Suivez-nous sur Facebook ! </a>
			</figure>
	</div>
</div>
</footer>
</body>
<script src="javascript.js"></script>
</html> 
