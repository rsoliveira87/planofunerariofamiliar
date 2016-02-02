<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer" class="instaapp-section">
		<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
			    <div class="copyright span6 alpha omega"><?php echo esc_attr(get_theme_mod('_copyright','Plano Funerário Brasil é marca registrada da Aleah Brasil')); ?></div>
                <div class="owner span6 alpha omega"> Conheça a <a href="http://aleah.com.br" title="Aleah Brasil">Aleah Brasil</a></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->

<!--  Back to top desativado pois dá conflito com a caixa do chat.
<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
-->

<!-- script to rdstation.  não exluir -->
<script type="text/javascript" async="true" src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/68ee2bbd-c7e1-4611-bc66-f1b81d9fae35-loader.js" ></script>
	
	<?php wp_footer(); ?>
</body>
</html>