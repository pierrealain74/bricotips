<?php

/*
Template Name: A propos

*/
get_header();
?>

<main id="content" class="site-content">
<?php

if (have_posts()){
    the_post();
}


?>
</main>
<?php
get_footer();
?>