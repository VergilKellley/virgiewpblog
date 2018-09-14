<?php if(!is_front_page()) : ?>
<!--------Dynamic Sidebar--------------->
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </div><!-- /.blog-sidebar -->
          <?php endif; ?>
      </div><!-- /.row -->

    </div><!-- /.container -->
<footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>

        <a href="#">Back to top</a>
      </p>
      <a href="https://vergilkellley.github.io/" target="_blank">Website Created by Vergil Kelley Web Design & Development</a>
    </footer>
    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>