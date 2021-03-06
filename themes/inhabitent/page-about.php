<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */
//ABOUT USES THIS
get_header();
?>

<!--CONTENT -->
<?php
if (have_posts()):
  while (have_posts()) : the_post();
  ?>
<div class="about">
<div class="about-background">
    <h1>About</h1>
</div>
      <?php
    the_content();
    ?>
</div>
<?php
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
<!-- NO SIDEBAR -->
<?php
get_footer();
?>
