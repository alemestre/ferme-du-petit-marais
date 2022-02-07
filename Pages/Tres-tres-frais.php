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
	<section class="tres-frais">
		<h1> Très très frais </h1>
		<p> Nous vous proposons une sélection de glaces et de sorbets artisanaux.ales confectionné.e.s par Les Glaces de
			Vittoncourt (57580) situé à 22km de notre ferme. </p>
		<section class="glaces-sorbets">
			<h2> Les glâces et sorbets </h2>
			<table>
				<tr>
					<th class="colonne_produit"> Produits </th>
					<th class="colonne_prix"> Prix</th>
					<th class="colonne_quantité"> Quantité</th>
				</tr>
				<tr>
					<td class="colonne_produit"> Petit pot</td>
					<td class="colonne_prix"> 2,00€</td>
					<td class="colonne_quantité"> 100 mL</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Boîte de 6 pots </td>
					<td class="colonne_prix"> 11,00€</td>
					<td class="colonne_quantité"> 6 x 100 mL</td>
				</tr>
				<tr>
					<td class="colonne_produit"> Grand pot </td>
					<td class="colonne_prix"> 5,00€ sauf parfum macarons de Boulay : 8,00€</td>
					<td class="colonne_quantité"> 500 mL</td>
				</tr>
			</table>
			<h3> Liste des parfums (non exhaustive)</h3>
			<div>
				<ul>
					<li>
						<span class="glaces-sorbets__parfum"> Sorbets</span> : fraise, banane, framboise, fruits rouges,
						pêche, pomme, mirabelle, tomate basilic, citron basilic, abricot, mangue, melon, fraise
						rhubarbe, poire, cassis, miel
					</li>
				</ul>
			</div>
			<div>
				<ul>
					<li>
						<span class="glaces-sorbets__parfum"> Glaces </span>: vanille, chocolat, tiramisu, choco
						noisette, vanille kinder bueno, schoko bon kinder, café, pistache, nougat, speculoos, cannelle
						caramel beurre salé, crème brûlée, macarons de Boulay, foie gras
					</li>
				</ul>
			</div>
		</section>
		<section class="patisseries-glacées">
			<h2> Les patisseries glacées</h2>
			<section class="patisseries-glacées__vacherin">
				<div class="patisseries-glacées__vacherin__contenu">
					<span class="patisseries-glacées__vacherin__contenu__pres"> Vacherin glacé </span>
					<p> pour 6-8 personnes (diamètre 16 cm) ou 10-12 personnes (diamètre 20cm)</p>
					<p class="patisseries-glacées__parfum"> <span class="parfum-choix"> 2 parfums aux choix </span>:
						vanille/caramel beurre salé, vanille/noisette, vanille/framboise, vanille/mangue ou
						fraise/cassis </p>
				</div>
				<div class="patisseries-glacées__vacherin__prix">
					<p>23,00€ pour 6-8 personnes </p>
					<p>33,00€ pour 10-12 personnes</p>
				</div>
			</section>

			<section class="patisseries-glacées__omelette">
				<div class="patisseries-glacées__omelette__contenu">
					<span class="patisseries-glacées__omelette__contenu__pres"> Omelette norvégienne </span>
					<p> pour 4-5 personnes (environ 12cm) ou 8-10 personnes</p>
					<p class="patisseries-glacées__parfum"> <span class="parfum-choix"> 2 parfums aux choix </span>:
						vanille/fraise, vanille/chocolat, vanille/noisette, vanille/spéculoos, vanille/caramel beurre
						salé, vanille, crème brulée, chocolat/pistache, chocolat/poire, chocolat/mandarine,
						café/tiramisu, mangue/passion, nougat/fruits rouges, vanille kinder bueno/framboise, pain
						d'épices/mandarine </p>
				</div>
				<div class="patisseries-glacées__omelette__prix">
					<p>18,00€ pour 4-5 personnes </p>
					<p>28,00€ pour 8-10 personnes</p>
				</div>
			</section>
			<p>Les pâtisseries glacées sont <span class="patisseries-glacées__délai"> à commander 1 semaine en avance
				</span> </p>
		</section>
		<h2> Les escargots </h2>
		<section class="escargots">
			<p>Délicieux escargots sans coquilles vendus par douzaine <br />
				La coquille est en pâte feuilletée, un véritable régale pour les papilles !</p>
			<p> 8,00€ </p>
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