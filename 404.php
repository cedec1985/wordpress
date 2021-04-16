<?php

// Récupère l'en-tête de la page, basée sur les réglages du thèmes et du site
get_header();
	
?>

<div id="main-content">
	<article class="404">
		<h1>Erreur 404</h1>
		<p>La page demandée est introuvable.</p>
		<!-- Affiche un lien vers la page d'accueil du site -->
		<p><a href="<?php echo site_url(); ?>">Retourner à l'accueil</a></p>
</div

<?php

// Récupère le pied de page, basé sur les réglages du thème et du site
get_footer();
