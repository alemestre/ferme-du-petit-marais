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
	<section class="laitage">
		<h1> Oeufs & Laitage </h1>
		<p> Les œufs proviennent de notre exploitation.</p>
		<p>Les laitages sont produits et transformés par la laiterie d’Elvange (57690) et la ferme du Haut (57220)
			respectivement à 23 km et 13 km de notre ferme. </p>
		<section class="laitage__produits">
			<table>
				<tr>
					<th class="colonne_produit"> Produits </th>
					<th class="colonne_prix"> Prix</th>
					<th class="colonne_quantité"> Quantité</th>
				</tr>
				<tr>
					<td class="colonne_produit"> Oeufs </td>
					<td class="colonne_prix"> 3,50€</td>
					<td class="colonne_quantité"> la douzaine</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Beurre de baratte extra-fin </td>
					<td class="colonne_prix"> 4,30€</td>
					<td class="colonne_quantité"> 250g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Crème fraîche </td>
					<td class="colonne_prix"> 2,80€</td>
					<td class="colonne_quantité"> 500g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Yaourts natures </td>
					<td class="colonne_prix"> 2,20€</td>
					<td class="colonne_quantité"> 4 pots de 125g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Yaourts aromatisés </td>
					<td class="colonne_prix"> 2,80€</td>
					<td class="colonne_quantité"> 4 pots de 125g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Yaourts aux fruits (Elevange) </td>
					<td class="colonne_prix"> 2,80€</td>
					<td class="colonne_quantité"> 4 pots de 125g</td>
				</tr>
			</table>
		</section>
		<section class="laitage__fromages">
			<h2> Les fromages </h2>
			<table>
				<tr>
					<th class="colonne_produit"> Produits </th>
					<th class="colonne_prix"> Prix</th>
					<th class="colonne_quantité"> Quantité</th>
				</tr>
				<tr>
					<td class="colonne_produit"> Fromage blanc </td>
					<td class="colonne_prix"> 3,60€</td>
					<td class="colonne_quantité"> 500g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Fromage frais ail/fines herbes </td>
					<td class="colonne_prix"> 3,20€</td>
					<td class="colonne_quantité"> 200g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Carré du laitier nature </td>
					<td class="colonne_prix"> 4,00€</td>
					<td class="colonne_quantité"> 25g</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Carré du laitier à l'ail des ours </td>
					<td class="colonne_prix"> 4,50€</td>
					<td class="colonne_quantité"> 250g</td>
				</tr>
			</table>
		</section>
	</section>
	<button class="btn btn__commande">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSctNAPicobb0s9AGBgsAuHqTN8cA22NrCmmsfmgwdNt-qdfPg/viewform?fbclid=IwAR3Po3DVCzh1iaaEdGPWwboTsvmkK_joh8VimluBx18jgHeOa2L2jCynKzU"
			target="_blank"> Passer commande </a>
	</button>
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
				<a href="https://www.facebook.com/lafermedupetitmarais/" target="_blank"
					class="footer__bloc-medias__FB">
					<figure> <img src="../Photos/logo_fb.png" alt="logo_fb"
							class="footer__bloc-medias__FB__logo">Suivez-nous sur Facebook !
				</a>
				</figure>
			</div>
		</div>
	</footer>
</body>
<script src="javascript.js"></script>
</html>