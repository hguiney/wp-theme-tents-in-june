<?php
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
  if (!is_user_logged_in()) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59465670-1', 'auto');
  ga('send', 'pageview');

</script>
<?php }
} ?>