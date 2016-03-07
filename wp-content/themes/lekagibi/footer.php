
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            
                <?php echo get_page_content('adresses');?>

        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo get_template_directory_uri();?>/js/grayscale.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68704417-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>

</body>

</html>
