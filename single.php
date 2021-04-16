<?php

// Récupère l'en-tête de la page, basée sur les réglages du thèmes et du site
get_header();

?>

<!-- Vous pouvez commencer à personnaliser les classes pour les réutiliser après -->
<div id="main-content" class="article-wrapper">	
	<?php 
		// Utilise une boucle car il est possible que la page traite plusieurs articles, 
		// comme pour une page de catégories ou d'archives. C'est la convention dans WordPress
		while ( have_posts() ) : the_post(); 
	?>
		<!-- En-tête de l'article, page, projet -->
		<div id="article-header">
			<!-- Affiche le titre -->
			<h1><?php the_title(); ?>Voyages en Europe</h1>
			<div class="article-meta">
				<!-- Données meta de l'article - Nom de l'auteur (the_author), date de publication (the_date), catégories séparées par un espace (the_category) -->
				Par <span class="author vcard"><?php the_author(); ?>Cédric De Craim</span> | 
				    <span class="published"><?php the_date(); ?>8 novembre 2020</span> | 
				    <span class="categories"><?php the_category(' '); ?>voyage</span>
			</div>
			<!-- Affiche l'image mise en avant (the_post_tumbnail) -->
			<a class="article-featured-image" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail("medium")); ?>
			</a>
		</div>
		<!-- Contenu -->
		<div id="article-content">
			<!-- Ajoute l'id du post en ID HTML et la liste des classes générées avec la méthode post_class -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">	
					<?php
						// Afiche le contenu
						the_content(
  
                        );

					?>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
    <body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>My First Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            <h3>Some Links</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>

</body>
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