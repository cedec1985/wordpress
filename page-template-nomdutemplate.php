<?php

/*
Template Name: voyages 
*/

// Pour choisir ce modèle en tant que template WordPress, donné lui simplement un nom
// dans le commentaire ci-dessous. 
// Il apparaîtra dans la section "Attribut de la page" sous "Modèles" à l'édition d'une page

// Récupère l'en-tête de la page, basée sur les réglages du thèmes et du site
get_header();
?>

<!-- Vous pouvez commencer à personnaliser les classes pour les réutiliser après -->
<div id="main-content" class="Voyages">	
	<?php 
		// Utilise une boucle car il est possible que la page traite plusieurs articles, 
		// comme pour une page de catégories ou d'archives. C'est la convention dans WordPress
		while ( have_posts() ) : the_post(); ?><h1>voyages en Europe</h1>
		<!-- En-tête de l'article, page, projet -->
		<div id="page-header">
			<!-- Affiche le titre -->
			<h1><?php the_title(); ?></h1>
			<p>Sous-titre spécifique à ce template si vous le désirez</p>
		</div>
		<!-- Contenu -->
		<div id="page-content">
			<!-- Ajoute l'id du post en ID HTML et la liste des classes générées avec la méthode post_class -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">	
					<?php
						// Afiche le contenu
						the_content();
					?>
				</div>			
			</article>
		</div>
	</div>	
	<?php endwhile; ?>

	<div id="page-footer">
		<!-- Votre pied de page personnalisé -->
	</div>
</div>

<?php

// Récupère le pied de page, basé sur les réglages du thème et du site
get_footer();