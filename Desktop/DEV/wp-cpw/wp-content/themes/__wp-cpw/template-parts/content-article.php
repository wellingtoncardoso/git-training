<div class="row gap-2">
    <?php
    if( have_posts() ): 
        while( have_posts() ): the_post() ;?>
            <article id="post-<?php the_ID();?>" <?php post_class( 'col-12-xs col-6-sm col-4-lg' );?>>
                <div class="card">
                    <header class="entry-header">
                        <?php if( has_post_thumbnail() ) { the_post_thumbnail( array( 364, 190 ) ); } ?>
                        <span class="header__float-category">
                            <?php the_category(); ?>
                        </span>
                    </header>
                    <a href="<?php the_permalink() ?>">
                        <div class="card-body">
                            <div class="entry-meta"></div>
                            <div class="entry-title">
                                <?php the_title( '<h2 class="text-white mb-1">', '</h2>' ); ?>
                            </div>
                            <div class="entry-content mt-2">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                </div>
            </article>
            <?php if( comments_open() || get_comments_number() ){
                comments_template();
            } 
        endwhile; 
        else: ?>
            <p class="text-white font-lg"><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
        <?php 
    endif; ?>
</div>
<div class="row">
    <div class="col-12-xs col-8">
        <?php the_posts_pagination(); ?>
    </div>
</div>