<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>TTweb Digital Agency</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="height=device-height, width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&subset=cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&subset=cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/base.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/compose.css">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/langs.js"></script>
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
<script data-skip-moving="true">
        (function(w,d,u,b){
                s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
                h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b3112929/crm/site_button/loader_2_9qdke7.js');
</script>
</body>
</html>