<?php
/*
 Template Name: People
 *
*/
?>

<?php get_header(); ?>

    <div id="content" class="wrapper">

        <div id="inner-content" class="container">

            <div class="main people-content"  role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <div class="entry-content cf" itemprop="articleBody">
                            <?php
                                // the content (pretty self explanatory huh)
                                the_content();
                            ?>
                        </div>

                    </article>

                <?php endwhile; else : ?>

                    <?php get_template_part ('partials/no-post-found');?>

                <?php endif; ?>

            </div>

        </div>

    </div>

<?php get_footer(); ?>