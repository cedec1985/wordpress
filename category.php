<?php 

// Récupère l'en-tête de la page, basée sur les réglages du thèmes et du site
get_header();

?>

<!-- Vous pouvez commencer à personnaliser les classes pour les réutiliser après -->
<div id="main-content" class="class-nom-categorie">

	<!-- Titre de la catégorie actuelle -->
	<div id="page-header">
		<h1><?php single_cat_title();
		voyage
		?></h1>
	</div>

	<div id="page-articles">
		<?php
			// Si des articles existent, une boucle les affichent
			if ( have_posts() ) :			
				while ( have_posts() ) : the_post();					
				?>
					<!-- Ajoute l'id du post en ID HTML et la liste des classes générées avec la méthode post_class -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- Affiche l'image mise en avant en taille moyenne (the_post_tumbnail) avec un lien vers la page de l'article (the_pemalink) -->
						<a class="article-featured-image" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail("medium")); ?>
						</a>

						<div class="article-content">
							<!-- Affiche le titre de l'article (the_title) avec un lien vers celui-ci (the_permalink) -->
							<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<div class="article-meta">
								<!-- Données meta de l'article - Nom de l'auteur (the_author), date de publication (the_date), catégories séparées par un espace (the_category) -->
								Par <span class="author vcard"><?php the_author(); ?></span> | 
								    <span class="published"><?php the_date(); ?></span> | 
								    <span class="categories"><?php the_category(" "); ?></span>
							</div>

							<div class="article-excerpt">
								<!-- Affiche l'extrait de l'article -->
								<?php the_excerpt(); ?>
							</div>
						
						</div>
					</article>
			<?php
				endwhile;
			?>
			<?php

				// Vérifie si la méthode wp_pagenavi existe, si c'est le cas l'exécute
				// Il s'agit d'une méthode héritée du module WP-PageNavi qui gère la navigation entre les posts
				// Installez ce module pour en tirer profit
				if ( function_exists( 'wp_pagenavi' ) ) {
					wp_pagenavi();
				}

			else :
				// S'il n'y a aucun résultat, affiche le template en question
				get_template_part( 'includes/no-results', 'index' );
			endif;

		?>
	</div>

	<div id="page-footer">
		<!-- Votre pied de page personnalisé -->
	</div>
</div>

<?php

// Récupère le pied de page, basé sur les réglages du thème et du site
get_footer();