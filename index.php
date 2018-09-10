<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <title>ictpas</title>
</head>

<body>
  <header><?php wp_nav_menu(); ?></header>
  <?php bloginfo('name'); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php endif; ?>

</body>
</html>