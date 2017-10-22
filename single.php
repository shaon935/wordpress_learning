<?php get_header(); ?>

<div class="row">

  <div class="col-sm-8 blog-main">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>  
          <?php comments_template(); ?>
          <?php $args = array(
			        'walker'            => null,
			        'max_depth'         => '',
			        'style'             => 'ul',
			        'callback'          => null,
			        'end-callback'      => null,
			        'type'              => 'all',
			        'reply_text'        => 'Reply',
			        'page'              => '',
			        'per_page'          => '',
			        'avatar_size'       => 32,
			        'reverse_top_level' => null,
			        'reverse_children'  => '',
			        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
			        'short_ping'        => false,   // @since 3.6
			        'echo'              => true     // boolean, default is true
			    );
			?>
			<?php wp_list_comments( $args, $comments );

			    $comments_args = array(
			        // change the title of send button 
			        'label_submit'=>'Post',
			        // change the title of the reply section
			        'title_reply'=>'Write a Reply or Comment',
			        // remove "Text or HTML to be displayed after the set of comment fields"
			        'comment_notes_after' => '',
			        // redefine your own textarea (the comment body)
			        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
			    );

			    comment_form($comments_args);
			?>
        </div><!-- /.blog-post -->
      <?php endwhile; ?>
    <?php else : ?>
      <?php __('Sorry, Posts not found!') ?>
    <?php endif; ?>
    <nav>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav>

  </div><!-- /.blog-main -->

  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
      <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </div>
    <div class="sidebar-module">
      <h4>Archives</h4>
      <ol class="list-unstyled">
        <li><a href="#">March 2014</a></li>
        <li><a href="#">February 2014</a></li>
        <li><a href="#">January 2014</a></li>
        <li><a href="#">December 2013</a></li>
        <li><a href="#">November 2013</a></li>
        <li><a href="#">October 2013</a></li>
        <li><a href="#">September 2013</a></li>
        <li><a href="#">August 2013</a></li>
        <li><a href="#">July 2013</a></li>
        <li><a href="#">June 2013</a></li>
        <li><a href="#">May 2013</a></li>
        <li><a href="#">April 2013</a></li>
      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>