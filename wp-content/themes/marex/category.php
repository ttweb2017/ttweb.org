<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>NEOS</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="path/to/image.jpg">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&subset=cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/compose.css">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="main">
		<?php if ( have_posts() ) : ?>
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				if ( in_category('headers') ) the_content();
			endwhile;
		endif;
		?>
		<div id="wrapper">
			<?php if ( have_posts() ) : ?>
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						if ( in_category('left') ) the_content();
					endwhile;
				endif;
			?>
			<?php if ( have_posts() ) : ?>
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						if ( in_category('content') ) the_content();
					endwhile;
				endif;
			?>
			<?php if ( have_posts() ) : ?>
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						if ( in_category('right') ) the_content();
					endwhile;
				endif;
			?>
		</div>
		<?php if ( have_posts() ) : ?>
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				if ( in_category('footers') ) the_content();
			endwhile;
		endif;
		?>
	</div>
</body>
</html>