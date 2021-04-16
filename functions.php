<?php

	// Ajoute la feuille de style du thème parent
	// Pratique habituelle pour thèmes enfant
	add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );	
	function wpchild_enqueue_styles(){
		wp_enqueue_style( 'ns-theme-style', get_template_directory_uri() . '/style.css' );
	}

	function single_category_template($single) {
	    // Récupère la variable globale $post qui contient les informations de l'article demandé
	    global $post;
	 
	    // Récupère le chemin vers les fichiers de style du thème, ce qui nous donne le chemin exact du dossier du thème enfant
	    // auquel nous ajoutons le dossier "/single" dans lequel se trouveront nos modèles spécifiques à chaque catégorie
	    $single_path = get_stylesheet_directory() . '/single';
	  
	    // Cette boucle traverse toutes les catégories de l'article actuel
	    foreach((array)get_the_category() as $cat) :
	             
	            // Pour chaque catégorie le système va voir si un fichier existe pour cette catégorie
	            // Par exemple si cet article appartient à la catégorie "SEO" dont le slug est "seo"
	            // cette fonction regardera si le fichier "/single/single-seo.php" existe.
	            // Si ce fichier existe c'est cette valeur qui est retournée et WordPress utilisera ce modèle
	            if(file_exists($single_path . '/single-' . $cat->slug . '.php'))
	            return $single_path . '/single-' . $cat->slug . '.php';
	      
	    endforeach;

	    // Si le fichier n'existe pas, aucune variable ne sera retournée et laissera WordPress
	    // utiliser le thème par défaut
	}
	 
	// Enregistrement du filtre
	add_filter('single_template', 'single_category_template');