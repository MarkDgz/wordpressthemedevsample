
	<footer class="site-footer">

		<p class="rojito"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
		
		<p><?php $tit = bloginfo('name'); $tit2 = '&nbsp;-&nbsp;&copy;&nbsp;'; echo 'segunda linea ->' +  $tit + $tit2 + date('Y'); ?></p>
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
	
</body>
</html>


